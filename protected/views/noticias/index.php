<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "5a772a46-2110-490c-834a-66fcd4f735c3", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<div id='titulo_news'>
	<div id="titulo_news_menor">
		<p>Notícias</p>
	</div>
</div>

<div id='conteudo_interno'>
   <?php foreach($noticias as $noticia){ ?>
		<div class="noticias_item">
			<div class="post_item">
				<div class="pic_noticias">
					<a href="<?php echo Yii::app()->controller->createUrl('view',array('id'=>$noticia->id_noticia)); ?>">
                  <img src="<?php echo Yii::app()->request->baseUrl; ?>/public/noticias/<?php echo $noticia->foto_slideshow?>" / style="width: 400px; height: 220px;">
                       <div class="img_overlay"></div>
               </a>
				</div>				
				<div class="noticias_item_texto">
					<h3 class="post_title">
                  <a href="<?php echo Yii::app()->controller->createUrl('view',array('id'=>$noticia->id_noticia)); ?>">
                     <?php echo $noticia->titulo; ?>
                  </a>
               </h3>
               <p class="post_meta">
					<span class="calendar">
						 <?php echo $noticia->convertData($noticia->data) ?>
					  </a>
					</span>					
				</p>
					<div class="post_description">
					  <?php /*echo $noticia->texto_noticia; */?>
					  <?php 
					  $noticia_resumo = $noticia->texto_noticia;                  
					  echo $res = substr($noticia_resumo, 0, strpos($noticia_resumo, '.')).'...';
					  ?>
					</div>
					<a href="<?php echo Yii::app()->controller->createUrl('view',array('id'=>$noticia->id_noticia)); ?>">
						<div id="botao_mais_noticia_interna">
							  <p>Veja mais</p>
						</div>		
					</a>
				</div>				
			</div>
		</div>
   <?php } ?>
</div>
