<?php

class ObrasController extends Controller
{
	public $layout='//layouts/column2';
   public $path = 'C:/wamp/www/merge/public/obras/';
   
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
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
	public function actionCreate()
	{
		$this->layout = "dashboard";
      $model=new Obras;

		if(isset($_POST['Obras'])){
         $model->foto_slideshow = CUploadedFile::getInstance($model,'foto_slideshow');
         
			$model->attributes=$_POST['Obras'];
         $model->data = date("Y-m-d H:i:s");
         
			if($model->save()){
            $model->foto_slideshow->saveAs($this->path.$model->foto_slideshow->name);
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
	public function actionUpdate($id)
	{
      $this->layout = "dashboard";
		$model=$this->loadModel($id);

		if(isset($_POST['Obras']))
		{
			$model->attributes=$_POST['Obras'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_obras));
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

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$obras = Obras::model()->findAll(array('order'=>'id_obras'));
		$this->render('index',array(
			'obras'=>$obras,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$this->layout = "dashboard";
      $model=new Obras('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Obras']))
			$model->attributes=$_GET['Obras'];

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
		$model=Obras::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='obras-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
