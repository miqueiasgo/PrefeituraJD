<!--
<?php
/* @var $this NoticiasController */
/* @var $dataProvider CActiveDataProvider */

?>

<h1>Notícias</h1>



<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

!-->

<div id='titulo_news'>
	<div id="titulo_news_menor">
		<p>Notícias</p>
	</div>
</div>

<div id='conteudo_interno'>	
		<div id="noticias_item_1" class="noticias_item">
			<div id="barra_lateral_1" class="barra_lateral"></div>
			<div class="post_item">			
				<div class="pic">
					<a href="blog_item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/noticias/1.jpg" / style="width: 350px; height: 200px;"><div class="img_overlay"></div></a>
				</div>				
				<h3 class="post_title"><a href="blog_item.html">Retomada de obras em João Dourado</a></h3>		
				<p class="post_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum elementum arcu, at facilisis leo pretium eget. Nulla lacus risus, aliquam id faucibus sit amet, imperdiet vitae quam. In eu nunc nunc, in lacinia neque. Curabitur dictum fringilla lectus id fringilla. In et turpis ac lorem molestie auctor vitae nec purus. Vestibulum ullamcorper ...</p>					
				<p class="post_meta">
					<span class="calendar"><a href="blog.html">24 September, 2012</a></span>
					<span class="author"><a href="blog.html">by Admin</a></span>
					<span class="comments"><a href="blog_item.html">3 Comments</a></span>
					<span class="tags"><a href="#">Web Design</a>, <a href="#">Web Development</a></span>
				</p>
			</div>
		</div>
	<div id="noticias_item_2" class="noticias_item">
		<div class="post_item">			
			<div class="pic">				
				<a href="blog_item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/noticias/2.jpg" / style="width: 350px; height: 200px;"><div class="img_overlay"></div></a>
			</div>				
			<h3 class="post_title"><a href="blog_item.html">Retomada de obras em João Dourado</a></h3>		
			<p class="post_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum elementum arcu, at facilisis leo pretium eget. Nulla lacus risus, aliquam id faucibus sit amet, imperdiet vitae quam. In eu nunc nunc, in lacinia neque. Curabitur dictum fringilla lectus id fringilla. In et turpis ac lorem molestie auctor vitae nec purus. Vestibulum ullamcorper ...</p>					
			<p class="post_meta">
				<span class="calendar"><a href="blog.html">24 September, 2012</a></span>
				<span class="author"><a href="blog.html">by Admin</a></span>
				<span class="comments"><a href="blog_item.html">3 Comments</a></span>
				<span class="tags"><a href="#">Web Design</a>, <a href="#">Web Development</a></span>
			</p>
		</div>
	</div>
	<div id="noticias_item_3" class="noticias_item">
		<div class="post_item">			
			<div class="pic">
				<a href="blog_item.html"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/noticias/3.jpg" / style="width: 350px; height: 200px;"><div class="img_overlay"></div></a>
			</div>				
			<h3 class="post_title"><a href="blog_item.html">Retomada de obras em João Dourado</a></h3>		
			<p class="post_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vestibulum elementum arcu, at facilisis leo pretium eget. Nulla lacus risus, aliquam id faucibus sit amet, imperdiet vitae quam. In eu nunc nunc, in lacinia neque. Curabitur dictum fringilla lectus id fringilla. In et turpis ac lorem molestie auctor vitae nec purus. Vestibulum ullamcorper ...</p>					
			<p class="post_meta">
				<span class="calendar"><a href="blog.html">24 September, 2012</a></span>
				<span class="author"><a href="blog.html">by Admin</a></span>
				<span class="comments"><a href="blog_item.html">3 Comments</a></span>
				<span class="tags"><a href="#">Web Design</a>, <a href="#">Web Development</a></span>
			</p>
		</div>
	</div>
	
</div>
