<?php

class AconteceController extends Controller
{
	
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
   
   public function actionIndex()
	{
		$this->render('index');
	}

	public function actionVideos()
	{
		$this->render('videos');
	}
   
   public function actionAdmin()
	{
		$this->layout = 'dashboard';
      //ver as models que precisam ser estanciadas
		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
}