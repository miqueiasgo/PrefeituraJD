<?php

class AnexosController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
   public $path_upload = "/../publicacoes/";
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
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
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
		$this->layout = "dashboard";
      $this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate($id_publicacao){
		
      $this->layout = "dashboard";
      $model=new Anexos;
      $model_publicacao = Publicacoes::model()->findByPk($id_publicacao);
		
		if(isset($_POST['Anexos'])){
         $model->anexo = CUploadedFile::getInstance($model,'anexo');
         $model->attributes = $_POST['Anexos'];
         $model->path = $model->anexo->name;
         $path = getcwd().$this->path_upload.date('Y').'/'.$model->id_publicacao.'/'.$model->anexo->name;
			
         if($model->save()){
				$model->anexo->saveAs($path);
            $this->redirect(array('admin','id_publicacao'=>$model_publicacao->id));
         }
		}

		$this->render('create',array(
			'model'=>$model,
          'publicacao'=>$model_publicacao,
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
      $publicacao = Publicacoes::model()->findByPk($model->id_publicacao);
      
		if(isset($_POST['Anexos']))
		{
			$model->attributes=$_POST['Anexos'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
          'publicacao'=>$publicacao,
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
		$dataProvider=new CActiveDataProvider('Anexos');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin($id_publicacao){
      
      $this->layout = "dashboard";
      
      $publicacao  = Publicacoes::model()->findByPk($id_publicacao);
		$model=new Anexos('searchPublicacao');
		$model->unsetAttributes();
      
		if(isset($_GET['Anexos']))
			$model->attributes=$_GET['Anexos'];

		$this->render('admin',array(
			'model'=>$model,
         'titulo'=>$publicacao->titulo,
         'id_publicacao'=>$publicacao->id,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Anexos::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='anexos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
