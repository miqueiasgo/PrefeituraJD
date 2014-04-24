<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/pmjd.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/hover_style3.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_common.css" />
	
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.nivo.slider.js"></script>
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<a href="<?php echo Yii::app()->request->baseUrl; ?>"><div id="logo_prefeitura"></div></a>
		<div id="barra_header"><p style="float: right;margin-top: 13px;font-weight: bold;margin-right: 5px;">Área Restrita Prefeitura de João Dourado</p></div>
   </div>
   <div id="menu_dashboard">
		<?php $this->widget('ext.emenu.EMenu',array(
			'items'=>array(
				array('label'=>'Notícias', 'url'=>array('/noticias/admin')),
				array('label'=>'Obras', 'url'=>array('/obras/admin')),
				array('label'=>'Equipe de governo', 'url'=>array('/equipeGoverno/admin')),
				array('label'=>'Secretarias', 'url'=>array('/secretarias/admin')),
				array('label'=>'Parcerias', 'url'=>array('/parcerias/admin')),
				array('label'=>'PMJD Acontece', 'url'=>array('/acontece/admin')), 
				array('label'=>'Publicações', 'url'=>array('/publicacoes/admin')),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div>
   
	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		<div id='links_footer'>
		Mapa do site:</br>
		<?php
			echo CHtml::link('Home',	 	 array('/site/index')).' - ';
			echo CHtml::link('Notícias', 	 array('/noticias')).' - ';
			echo CHtml::link('Obras',	 	 array('/obras')).' - ';
			echo CHtml::link('Ouvidoria',	 array('/ouvidoria')).' - ';
			echo CHtml::link('A cidade', 	 array('/cidade')).' - ';
			echo CHtml::link('Administração',array('/administracao')).' - ';
			echo CHtml::link('Gabinete do prefeito',array('/gabinete')).'</br>';
			echo CHtml::link('Equipe de governo',	array('/equipeGoverno')).' - ';
			echo CHtml::link('Secretarias',  array('/secretarias')).' - ';
			echo CHtml::link('Parcerias', 	 array('/parcerias')).' - ';
			echo CHtml::link('PMJD Acontece',array('/acontece')).' - ';
			echo CHtml::link('Vídeos', 		 array('/acontece/videos')).' - ';
			echo CHtml::link('Publicações',  array('/publicacoes')).' - ';
			echo CHtml::link('Transparência',array('/transparencia')).'</br>';
		?>
	</div>
		</br></br>
		Copyright &copy; <?php echo date('Y'); ?> Prefeitura de João Dourado - BA.<br/>
		Todos direitos reservados<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
