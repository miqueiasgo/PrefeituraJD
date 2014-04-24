<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/noticias_slider/jquery.eislideshow.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/noticias_slider/jquery.flexslider.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/noticias_slider/jquery.iconmenu.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.min.js"></script>


<!--javascript conteúdo mídias sociais !-->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "5a772a46-2110-490c-834a-66fcd4f735c3", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<!--Fim javascript conteúdo mídias sociais !-->
<script type="text/javascript">
	// Flex Slider
	(function($) {
	  $(window).ready(function() {
	  $('.flexslider').flexslider({
		animation: 'fade',
		animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
		slideshow: true,                //Boolean: Animate slider automatically
		slideshowSpeed: 4500,           //Integer: Set the speed of the slideshow cycling, in milliseconds
		animationSpeed: 700,             //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
		pauseOnHover: true, 
		pauseOnAction:false,
		controlNav: true,
		directionNav: false,
		controlsContainer: '.flex-container'
			});
	  
	  $('.flexslider2').flexslider({
		animation: 'slide',
		animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
		slideshow: true,                //Boolean: Animate slider automatically
		slideshowSpeed: 4500,           //Integer: Set the speed of the slideshow cycling, in milliseconds
		animationSpeed: 700,             //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
		pauseOnHover: true, 
		pauseOnAction:false,
		controlNav: false,
		directionNav: true,
		controlsContainer: '.flex-container'
			});
	  
	  $('.flexslider3').flexslider({
		animation: 'slide',
		animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
		slideshow: false,                //Boolean: Animate slider automatically
		slideshowSpeed: 4500,           //Integer: Set the speed of the slideshow cycling, in milliseconds
		animationSpeed: 700,             //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
		pauseOnHover: true, 
		pauseOnAction:false,
		controlNav: false,
		directionNav: true,
		controlsContainer: '.flex-container'
			});
	  
	  
		});
	})(jQuery)

	// Carousel Slider

	// Sliding Text and Icon Menu Style
	$(function() {
		$('#sti-menu').iconmenu();
	});
	
	
	// Elastic Slider
	$(function() {
	  $('#ei-slider').eislideshow({
		  animation			: 'center',
		  autoplay			: true,
		  slideshow_interval	: 3000,
		  thumbMaxWidth       : 188,
		  titlesFactor		: 0
	  });
	});
	
	// Accordion
	$(document).ready(function() {
    $("#accordion").accordion({
	   autoHeight: false,
	   icons: { "header": "plus", "headerSelected": "minus" }
	});
});


</script>


<div id='news'>
	<div id='bem-vindos' >
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/bem-vindo.png"/>
	</div>
  <div id='barra_home'> 
    <div id='barra_menor'></div>
    <div id='barra_maior'></div>
    <p>Not&iacute;cias</p>
  </div>
  <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/noticias">
	<div id="botao_mais_noticias">
		  <p>Mais notícias</p>
	</div>		
  </a>
	<div id='noticias' style="width: 100%; overflow: hidden; outline: none;">									
		<div id="slider">
			<div class="container_slider clearfix">			
			  <div class="sixteen columns">
				
			  <div class="flex-container">
			  <div class="flexslider">
				<ul class="slides">
				<?php
				  	foreach($noticias as $noticia){
	  			?>
	  					<li>
							<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/noticias/<?=$noticia->id_noticia?>">
								<img src="<?php echo Yii::app()->request->baseUrl;?>/public/noticias/<?=$noticia->foto_slideshow?>" style="width:740px; height:400px;">
							</a>
							<p class="flex-caption"> 
								<span><?=$noticia->titulo?></span>
							</p>
						  </li>
		  		<?php
				  	}
				?>
				</ul>
			  </div>
			  
			  </div>
			  
			  </div>
			  
			</div><!-- End Container -->
	  </div><!-- End Slider -->
	  <div id="servicos_home">
		  <h2 class="title">Serviços<span class="line"></span></h2>
		   <div id="accordion">
				<h3><a href="#">Transparência</a></h3>
				<div><p>Acompanhe o nosso portal da transparência.</br>
				<a href='http://transparencia.net.br/167'>Acesse aqui.</a></p></div>
				
				<h3><a href="#">Tributos e NFE</a></h3>
				<div><p>Acompanhe o nosso portal de tributos e nota fiscal eletrônica.</br>
				<a href='http://www.faceugly.com/joaodourado/'>Acesse aqui.</a></p></div>
				
				<h3><a href="#">Transparência - Fundo Municipal de Saúde</a></h3>
				<div><p>Acompanhe o nosso portal da transparência do Fundo Municipal de Saúde.</br>
				<a href='http://transparencia.net.br/701'>Acesse aqui.</a></p></div>
					
		  </div><!-- End accordion -->
	  </div>
	
	<div id="cidade_home">
		<div id="cidade_home_txt">
			<h2>Gostaria de conhecer mais sobre a nossa cidade?</h2>
			<p>Acompanhe a história do nosso município. </p>
		</div>
		<div id="botao_cidade_home">
		  <div class="four columns alpha">
		  <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/cidade" class="link">
			  Clique aqui e acompanhe
		  </a></div>
		</div>		
	</div><!-- End Welcome -->
		
	</div>
	<div id="plugins">
		<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fprefeitura.municipaldejoaodourado&amp;width=300&amp;height=258&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color=%23f6fee6&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:258px;" allowTransparency="true"></iframe>    
	</div>
	
	<div id='quadrados'>
		<div id='acesse_tit'>
			<img src='<?php echo Yii::app()->request->baseUrl; ?>/images/acesse.jpg'/>			
		</div>
		<div id='acesse_enderecos'>
			<a href='http://www.pmjoaodourado.ba.ipmbrasil.org.br/Publicacoes.aspx'><div id='acesse_end_escuro'><p>Diário Oficial - PMJD</p></div></a>
			<a href='http://www.cgu.gov.br/'><div id='acesse_end_claro'><p>Controladoria Geral da União</p></div></a>
			<a href='http://www.brasil.gov.br/'><div id='acesse_end_escuro'><p>Portal Brasil</p></div></a>
			<a href='http://www.ba.gov.br/'><div id='acesse_end_claro'><p>Governo da Bahia</p></div></a>
			<a href='http://www.acessoainformacao.gov.br/acessoainformacaogov/'><div id='acesse_end_escuro'><p>E-Sic: Governo Federal</p></div></a>
			<a href='http://www.portaltransparencia.gov.br/'><div id='acesse_end_claro'><p>Portal da Transparência</p></div></a>
			<a href='http://www.sac.ba.gov.br/'><div id='acesse_end_escuro'><p>SAC Bahia</p></div></a>
		</div>
	</div>
	<div id="plugin_tempo">
	  <iframe src='http://selos.climatempo.com.br/selos/MostraSelo120.php?CODCIDADE=4841&SKIN=verde' scrolling='no' frameborder='0' width='258' height='170' marginheight='0' marginwidth='0'></iframe>
	</div>
</div>
	
<div id="links_social" style="margin-top:0px;">
	Compartilhe a nossa página: 
	<span class='st_facebook_hcount' displayText='Facebook'></span>
	<span class='st_twitter_hcount' displayText='Tweet'></span>
	<span class='st_email_hcount' displayText='Email'></span>
</div>
