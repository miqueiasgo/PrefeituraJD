<?php

class PublicacoesController extends Controller
{
   public $path = "/../publicacoes\\";

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

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','show','showAnteriores'),
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
		$publicacoes = Publicacoes::model()->findAll(array('order'=>'data DESC'));
      $ano2012 = $this->lista_publicacoes('2012');
		$ano2011 = $this->lista_publicacoes('2011');
		$ano2010 = $this->lista_publicacoes('2010');
		$ano = $this->lista_publicacoes('outros');

		$this->render('index',array('publicacoes'=>$publicacoes, 'ano2012'=>$ano2012,'ano2011'=>$ano2011,'ano2010'=>$ano2010,'ano'=>$ano));
	}

	public function lista_publicacoes($ano){
      $diretorio = getcwd();
      
      $pasta_ano="\\..\\publicacoes\\".$ano;
      $diretorio = $diretorio.$pasta_ano;
      
      $publicacao = opendir($diretorio);
      
      while($nome_arquivo = readdir($publicacao)){
         $itens[] = $nome_arquivo;
      }
      
      sort($itens);
      foreach($itens as $listar){
         if($listar != "." && $listar!=".."){
            $arquivos[] = $listar;       
         }
      }
      return $arquivos;
   }

	public function actionAdmin()
	{
      $this->layout = "dashboard";
		
      $model=new Publicacoes('search');
		$model->unsetAttributes();
		if(isset($_GET['Publicacoes']))
			$model->attributes=$_GET['Publicacoes'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
      $this->layout = "dashboard";
		$model = $this->loadModel($id);
      
      $data = explode('-',$model->data);
      $data = $data[2].'/'.$data[1].'/'.$data[0];
      
      $model->data = $data;
      $this->render('view',array(
			'model'=>$model,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
      $this->layout = "dashboard";
		$model=new Publicacoes;

		if(isset($_POST['Publicacoes']))
		{
			$data = explode('/',$_POST['Publicacoes']['data']);
         $data = $data[2].'-'.$data[1].'-'.$data[0];
         
         $model->attributes=$_POST['Publicacoes'];
         $model->data = $data;
         $model->descricao = $_POST['Publicacoes']['descricao'];
         
			if($model->save()){
            $local = date('Y').'/'.$model->id;
            
            mkdir(getcwd().$this->path.$local, 0777);
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
		$change = false;
      $this->layout = "dashboard";
      $model=$this->loadModel($id);
      $model->data = $model->convertData($model->data);

		if(isset($_POST['Publicacoes'])){
         $model->attributes=$_POST['Publicacoes'];
         $model->data = $model->convertDataSave($_POST['Publicacoes']['data']);
         
			if($model->save()){
            $this->redirect(array('admin'));
         }
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
		Anexos::model()->deleteAllAnexos($id);
      $this->loadModel($id)->delete();
      
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Publicacoes::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='publicacoes-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
   
   public function actionShow($id,$arquivo){

         $arquivo = $id.'/'.$arquivo;
   		$path = Yii::app()->basePath.'\..\..\\publicacoes\\2013\\'.$arquivo;
         $filecontent = file_get_contents($path);
   		
        $path_parts = pathinfo($arquivo); 
        $ext = strtolower($path_parts['extension']); 
        
        switch ($ext){
          case "pdf": $ctype="application/pdf"; break; 
          case "exe": $ctype="application/octet-stream"; break; 
          case "zip": $ctype="application/zip"; break; 
          case "doc": $ctype="application/msword"; break; 
          case "xls": $ctype="application/vnd.ms-excel"; break; 
          case "ppt": $ctype="application/vnd.ms-powerpoint"; break; 
          case "gif": $ctype="image/gif"; break; 
          case "png": $ctype="image/png"; break; 
          case "jpg": $ctype="image/jpg"; break; 
          default: $ctype="application/force-download"; 
        } 
        
	    header("Pragma: public");
	    header("Content-Type: application/$ctype");
		header("Content-disposition: inline; filename=$arquivo");
		header("Pragma: no-cache");
		header("Accept Ranges: bytes");
        header("Expires: 0"); 
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
		echo $filecontent;
   }

   public function actionShowAnteriores($ano,$arquivo){
   		$diretorio = getcwd();
      
      
   		$path = $diretorio.'\\..\\publicacoes\\'.$ano.'\\'.$arquivo;
         $filecontent = file_get_contents($path);
   		
        $path_parts = pathinfo($arquivo); 
        $ext = strtolower($path_parts['extension']); 
        
        switch ($ext){
          case "pdf": $ctype="application/pdf"; break; 
          case "exe": $ctype="application/octet-stream"; break; 
          case "zip": $ctype="application/zip"; break; 
          case "doc": $ctype="application/msword"; break; 
          case "xls": $ctype="application/vnd.ms-excel"; break; 
          case "ppt": $ctype="application/vnd.ms-powerpoint"; break; 
          case "gif": $ctype="image/gif"; break; 
          case "png": $ctype="image/png"; break; 
          case "jpg": $ctype="image/jpg"; break; 
          default: $ctype="application/force-download"; 
        } 
        
	    header("Pragma: public");
	    header("Content-Type: application/$ctype");
		header("Content-disposition: inline; filename=$arquivo");
		header("Pragma: no-cache");
		header("Accept Ranges: bytes");
        header("Expires: 0"); 
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
		echo $filecontent;
   }

   public function actionZipFiles($ano,$pasta,$filename){
   	
	$filepath = Yii::app()->viewPath.'/publicacoes/publicacoes_pdf/'.$ano.'/'.$pasta.'/'.$filename;

	// http headers for zip downloads
	header("Pragma: public");
	header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
	header("Cache-Control: public");
	header("Content-Description: File Transfer");
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=\"".$filename."\"");
	header("Content-Transfer-Encoding: binary");
	header("Content-Length: ".filesize($filepath.$filename));
	ob_end_flush();
	@readfile($filepath.$filename);
   }
}
