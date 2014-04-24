<?php

class DashboardController extends Controller
{
   public $layout = 'dashboard';
   
   public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
   
   public function actionIndex()
	{
		$this->forward('/publicacoes/admin');
	}
}