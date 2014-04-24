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
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/pmjd.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/hover_style3.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style_common.css" />
				
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/galeria_imagens/noJS.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/galeria_imagens/style.css" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/grid.css" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style7.css" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/noticias_home/blue.css" />
	
	
	
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.custom.29473.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.nivo.slider.js"></script>
	
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/galeria/gamma.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/galeria/jquery.history.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/galeria/jquery.masonry.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/galeria/jquerypp.custom.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/galeria/js-url.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/galeria/modernizr.custom.70736.js"></script>
	
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<script>
function OpenSel(op) {
 
if (op == 1) {
document.getElementById('sub_administracao').style.display="block";
document.getElementById('sub_acontece').style.display="none";
}else if (op == 2) {
document.getElementById('sub_administracao').style.display="none";
document.getElementById('sub_acontece').style.display="block";
}
else {
	document.getElementById('sub_administracao').style.display="none";
document.getElementById('sub_acontece').style.display="none";
}
}
</script>

<body>

<div class="container" id="page">

	<div id="header">
		<a href="<?php echo Yii::app()->request->baseUrl; ?>"><div id="logo_prefeitura"></div></a>
		<div id="barra_header">
			<div id="icons_header">
				<a href="https://twitter.com/ascompmjd" target="blank">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon_twitter.png" />
				</a>
				<a href="https://www.facebook.com/prefeitura.municipaldejoaodourado?fref=ts" target="blank">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon_facebook.png" />
				</a>
				<a href="http://www.youtube.com/channel/UCNA0ZoqqqDk9Lym1BC59oYA" target="blank">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icon_youtube.png" />
				</a>
			</div>	
			<div id=busca>
				<input type="text" id="busca_texto" value="Digite sua pesquisa aqui" onfocus="this.value=''"/>
				<div id="busca_ok"></div>
			</div>			
			<div id="slideshow">
			  <?php
				$this->widget('application.extensions.seqimage.SeqImage',array(
				  'widthImage' => 943, 
				  'heightImage' => 338,
				  'slides'=>array(  
					   array(
						   'image'=>array('src'=>Yii::app()->request->baseUrl.'/images/slider/header/foto1.jpg'),
						   'link'=>array('url'=>'mypage','htmlOptions'=>array())
					   ),
					   array(
						   'image'=>array('src'=>Yii::app()->request->baseUrl.'/images/slider/header/foto2.jpg'),            
					   ),
					  array(
						   'image'=>array('src'=>Yii::app()->request->baseUrl.'/images/slider/header/foto3.jpg'),         
					   ),
					  array(
						   'image'=>array('src'=>Yii::app()->request->baseUrl.'/images/slider/header/foto4.jpg'),         
					   ),
					  array(
						   'image'=>array('src'=>Yii::app()->request->baseUrl.'/images/slider/header/foto5.jpg'),         
					   ),
					   array(
						   'image'=>array('src'=>Yii::app()->request->baseUrl.'/images/slider/header/foto6.jpg'),         
					   ),
					   array(
						   'image'=>array('src'=>Yii::app()->request->baseUrl.'/images/slider/header/foto7.jpg'),
					   ),
					   array(
						   'image'=>array('src'=>Yii::app()->request->baseUrl.'/images/slider/header/foto8.jpg'),            
					   ),
					  array(
						   'image'=>array('src'=>Yii::app()->request->baseUrl.'/images/slider/header/foto9.jpg'),         
					   ),
					  array(
						   'image'=>array('src'=>Yii::app()->request->baseUrl.'/images/slider/header/foto10.jpg'),         
					   ),
					  array(
						   'image'=>array('src'=>Yii::app()->request->baseUrl.'/images/slider/header/foto11.jpg'),         
					   )
				)));
			  ?>
			</div>
			<div id='links_header'>
				<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/publicacoes" onMouseOver="OpenSel(3);"><div id='link_header'><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/header/publicacoes_header.jpg" /></div></a>
				<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/sic" onMouseOver="OpenSel(3);"><div id='link_header'><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/header/sic_header.jpg" /></div></a>
				<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/obras" onMouseOver="OpenSel(3);"><div id='link_header'><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/header/obras_header.jpg" /></div></a>
			</div>
			<div id="barra_inferior_header"></div>
			<div id="menu_header">
				<ul class="ca-menu">
						<li>
							<a href="<?php echo Yii::app()->request->baseUrl; ?>" onMouseOver="OpenSel(3);">
								<span class="ca-icon"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icones/home.png" /></span>
								<div class="ca-content">									
									<h3 class="ca-sub">Home</h3>
								</div>
							</a>
						</li>
						<li>
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/noticias" onMouseOver="OpenSel(3);">
								<span class="ca-icon"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icones/noticias.png" /></span>
								<div class="ca-content">
									<h3 class="ca-sub">Notícias</h3>
								</div>
							</a>
						</li>						
						
						<li>
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/ouvidoria" onMouseOver="OpenSel(3);">
								<span class="ca-icon"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icones/ouvidoria.png" /></span>
								<div class="ca-content">
									<h3 class="ca-sub">Ouvidoria</h3>
								</div>
							</a>
						</li>
						<li>
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/cidade" onMouseOver="OpenSel(3);">
								<span class="ca-icon"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icones/cidade.png" /></span>
								<div class="ca-content">
									<h3 class="ca-sub">A cidade</h3>
								</div>
							</a>
						</li>
						<li style="width:170px">
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/administracao" onMouseOver="OpenSel(1);">
								<span class="ca-icon"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icones/administracao.png" /></span>
								<div class="ca-content">
									<h3 class="ca-sub">Administração</h3>
								</div>
							</a>
						</li>
						<li style="width:190px ">
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/acontece/videos" onMouseOver="OpenSel(2);">
								<span class="ca-icon"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/icones/acontece.png" /></span>
								<div class="ca-content">
									<h3 class="ca-sub">PMJD Acontece</h3>
								</div>
							</a>
						</li>						
					</ul>				
			</div>
			<div id="submenu_header">
				<div id="sub_administracao" style="display:none;">
					<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/gabinete"><div id="sub_item">Gabinete do prefeito</div></a>
					<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/equipeGoverno"><div id="sub_item">Equipe de governo</div></a>
					<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/secretarias"><div id="sub_item">Secretarias</div></a>
					<!-- <a href="<?php //echo Yii::app()->request->baseUrl; ?>/index.php/parcerias"><div id="sub_item">Parcerias</div></a> !-->
				</div>
				<div id="sub_acontece" style="display:none;">
					<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/acontece/videos"><div id="sub_item">Vídeos</div></a>
					<!-- <a href="<?php //echo Yii::app()->request->baseUrl; ?>/index.php/acontece/imagens"><div id="sub_item">Galeria de imagens</div></a>  !-->
				</div>
			</div>

			
			
		</div>
	</div><!-- header -->


<!--
	<div id="mainmenu">
		
		<!--
		
		<?php $this->widget('ext.emenu.EMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Notícias', 'url'=>array('/noticias')),
				array('label'=>'Obras', 'url'=>array('/obras')),
				array('label'=>'Ouvidoria', 'url'=>array('/ouvidoria')),
				array('label'=>'A cidade', 'url'=>array('/cidade')),
				array('label'=>'Administração', 'url'=>array('/administracao')),
				array('label'=>'Gabinete do prefeito', 'url'=>array('/gabinete')),
				array('label'=>'Equipe de governo', 'url'=>array('/equipeGoverno')),				
				array('label'=>'Secretarias', 'url'=>array('/secretarias')),
				array('label'=>'Parcerias', 'url'=>array('/parcerias')),
				array('label'=>'PMJD Acontece', 'url'=>array('/acontece')), 
				array('label'=>'Vídeos', 'url'=>array('/acontece/videos')),
				array('label'=>'Galeria de imagens', 'url'=>array('/acontece/imagens')),
				array('label'=>'Publicações', 'url'=>array('/publicacoes')),
				array('label'=>'Transparência', 'url'=>array('/transparencia')),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
			'vertical' => true,
			'rtl'=> true,
		)); ?>
	</div>
	
	!-->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

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
		Copyright &copy; <?php echo date('Y'); ?> Prefeitura Municipal de João Dourado<br/>
		Todos Direito Reservados.<br/>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
