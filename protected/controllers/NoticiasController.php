<?php

class NoticiasController extends Controller{
	
	
   
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','noticia12'),
				'users'=>array('*'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','create','update'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate(){

		$this->layout = 'dashboard';
		$model=new Noticias;

		if(isset($_POST['Noticias'])){
         $model->foto_slideshow = CUploadedFile::getInstance($model,'foto_slideshow');
			
			$model->attributes=$_POST['Noticias'];
         $model->data = date("Y-m-d H:i:s");
			
			if($model->save()){
            $model->foto_slideshow->saveAs(getcwd().'/public/noticias/'.$model->foto_slideshow->name);
				$this->redirect(array('admin'));
         }
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id){

		$this->layout = 'dashboard';
		$model=$this->loadModel($id);

		if(isset($_POST['Noticias']))
		{
			$model->attributes=$_POST['Noticias'];
			if($model->save())
				$this->redirect(array('admin'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
      $noticias = Noticias::model()->findAll(array('order'=>'data DESC'));
      
		$dataProvider=new CActiveDataProvider('Noticias');
		$this->render('index',array(
			'noticias'=>$noticias,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin(){
		
		$this->layout = 'dashboard';
      $model=new Noticias('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Noticias']))
			$model->attributes=$_GET['Noticias'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Noticias::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function actionNoticia12()
	{
		$dataProvider=new CActiveDataProvider('Noticias');
		$this->render('noticia12',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='noticias-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
