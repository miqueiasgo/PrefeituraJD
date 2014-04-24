<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "5a772a46-2110-490c-834a-66fcd4f735c3", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<div id='titulo_news'>
	<div id="titulo_news_menor">
		<p>Obras</p>
	</div>
</div>

<?php foreach($obras as $obra){ ?>
<div class="view_obras view-third">	
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/public/obras/<?php echo $obra->foto_slideshow?>" />
	<div class="mask">
		<h2><?php echo $obra->titulo;?></h2>
		<?php
         echo $obra->texto_obra;
      ?>
	</div>
</div>
<?php } ?>

<div id="obras_texto">
	<p>Conheça as principais obras de infraestrutura que estão sendo executadas pela Prefeitura Municipal em prol da população de João Dourado:</p>
</div>

<div class="view_obras view-third">	
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/obras/obras7.jpg" />
	<div class="mask">
		<h2>RECUPERAÇÃO DA PRINCIPAL ESTRADA VICINAL DO MUNICÍPIO</h2>
		<p>A recuperação da principal estrada vicinal que dá acesso ao Norte do município, que está sendo feita com recursos próprios, conta com o processo de terraplanagem praticamente completo, e vai recuperar os 10km da estrada que liga João Dourado ao entroncamento que dá acesso aos povoados de Riacho, Floresta e Mata do Milho. O procedimento consiste na aplicação de uma base de cascalho sobre o subleito, com o objetivo de assegurar condições de trânsito satisfatórias.</p>		
	</div>
</div>
<div class="view_obras view-third">	
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/obras/obras8.jpg" />
	<div class="mask">
		<h2>SINALIZAÇÃO DA AVENIDA JOAQUIM AUGUSTO </h2>
		<p>A Secretaria de Obras de João Dourado implantou a sinalização horizontal de trânsito na Avenida Joaquim Augusto. Nesta localidade não existia faixa de pedestres. Nesse ponto o fluxo de veículos é grande, e para garantir a segurança de motoristas e pedestres, a Prefeitura instalou faixas de pedestres e de estacionamento, faixa contínua de trânsito, além da sinalização vertical para orientar o tráfego.</p>		
	</div>
</div>
<div class="view_obras view-third">	
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/obras/obras9.jpg" />
	<div class="mask">
		<h2>CONSTRUÇÃO DE BANHEIROS PÚBLICOS</h2>
		<p>91 novas unidades sanitárias estão sendo construídas nos povoados do Norte do município, como Macedônia, Riacho, Salinas e Lagoa do Meio; além de 78 unidades no povoado de Gameleira. As melhorias sanitárias, feitas em parceria com o Ministério da Saúde através da FUNASA, incluem a construção de módulos sanitários, banheiro, privada, tanque séptico, tanque de lavar roupa e lavatório.</p>		
	</div>
</div>
<div class="view_obras view-third">	
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/obras/obras1.jpg" />
	<div class="mask">
		<h2>CONSTRUÇÃO DE PSF NO BAIRRO NOVO CANAL</h2>
		<p>A obra, com 1.092m2 de área construída através de convênio com o Ministério da Saúde, atenderá as famílias dos bairros do Novo Canal e Santo Amaro.</p>		
	</div>	
</div>
<div class="view_obras view-third">	
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/obras/obras2.jpg" />
	<div class="mask">
		<h2>FINAL DA AVENIDA JOSÉ ALVES DE ANDRADE</h2>
		<p>O entroncamento, que dá acesso ao povoado de Gameleira, foi pavimentado. O importante trecho também abriga uma escola modelo de grande porte, que está sendo construída no local.</p>
		<!--<a href="#" class="info">Read More</a> !-->		
		
	</div>
</div>
<div class="view_obras view-third">	
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/obras/obras4.jpg" />
	<div class="mask">
		<h2>PAVIMENTAÇÃO DOS BAIRROS NOVO CANAL E SANTO AMARO</h2>
		<p>São mais de 9 mil metros quadrados pavimentados com recursos adquiridos junto aos Ministérios das Cidades e do Turismo, para facilitar a vida dos moradores das ruas Gasparino dos Santos, Renério da Silva Dourado, Augusto Dourado Sobrinho, Maria Rosa, 10 de Maio, Largo da Paz, Severino Tomé, José Pereira Loula, Adolfo da Silva Dourado, além das Travessas Elizabete Dourado e Largo da Paz I, II e III.</p>
	</div>
</div>
<div class="view_obras view-third">	
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/obras/obras5.jpg" />
	<div class="mask">
		<h2>CONSTRUÇÃO DE ESCOLA MODELO</h2>
		<p>A Escola Modelo de grande porte, focada na excelência do ensino fundamental, tem aproximadamente 2.700 m2, e sua estrutura contará com oito salas de aula, cantina com refeitório, centro administrativo e jardim. A escola Modelo de João Dourado está localizada na Rua Lindolfo Cardoso – saída para a Gameleira.</p>		
	</div>
</div>
<div class="view_obras view-third">	
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/obras/obras6.jpg" />
	<div class="mask">
		<h2>CONSTRUÇÃO DE CRECHE NO BAIRRO DO NOVO CANAL</h2>
		<p>A creche, que está sendo construída em parceria com o Ministério da Educação, beneficiará as crianças dos bairros Santo Amaro e Novo Canal. O projeto tem mais de 560 metros quadrados de área construída por meio de recursos adquiridos junto ao FNDE - Fundo de Desenvolvimento da Educação, e conta com blocos pedagógico, administrativo e de serviço, além de pátio coberto e playground.</p>
	</div>
</div>

<div id="links_social">
	Compartilhe o nosso conteúdo: 
	<span class='st_facebook_hcount' displayText='Facebook'></span>
	<span class='st_twitter_hcount' displayText='Tweet'></span>
	<span class='st_email_hcount' displayText='Email'></span>
</div>
