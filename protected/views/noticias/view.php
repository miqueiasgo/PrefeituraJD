<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "5a772a46-2110-490c-834a-66fcd4f735c3", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<div id='titulo_news'>
	<div id="titulo_news_menor">
		<p>Notícias</p>
	</div>
</div>

<div id='conteudo_interno'>	
	<div id="noticia_item_titulo1" class="noticia_item_titulo">
      <p><?php echo $model->titulo?></p>
   </div>
	<div id="foto_item_1" class="noticia_item_foto">
      <img src="<?php echo Yii::app()->request->baseUrl; ?>/public/noticias/<?php echo $model->foto_slideshow?>" / style="width: 700px; height: 300px;">
   </div>
	<div id="noticia_item_texto1" class="noticia_item_texto">
      <?php echo $model->texto_noticia;?>
	</div>
	<p class="post_meta">
		<span class="calendar"><?php echo $model->convertData($model->data) ?></span>
	</p>
	<div id="links_social">
		Compartilhe o nosso conteúdo: 
		<span class='st_facebook_hcount' displayText='Facebook'></span>
		<span class='st_twitter_hcount' displayText='Tweet'></span>
		<span class='st_email_hcount' displayText='Email'></span>
	</div>
		
</div>
