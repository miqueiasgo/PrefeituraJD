<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "5a772a46-2110-490c-834a-66fcd4f735c3", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<?php 
/* @var $this SicController */
/* @var $dataProvider CActiveDataProvider */
/*
$this->breadcrumbs=array(
	'Sics',
);

$this->menu=array(
	array('label'=>'Create Sic', 'url'=>array('create')),
	array('label'=>'Manage Sic', 'url'=>array('admin')),
);
*/
?>



<?php /* $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */ ?>


<div id='titulo_news'>
	<div id="titulo_news_menor">
		<p>SIC</p>
	</div>
</div>

<div id="conteudo_interno">
	<div id="sic">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/bem_vindo.png" style="width:250px; height:80px; float:left; margin-left:-10px;"/>
		<div id="sic_texto">			
			<p>O e-SIC (Sistema Eletrônico do Serviço de Informações ao Cidadão) permite que qualquer pessoa, física ou jurídica, encaminhe pedidos de acesso à informação para órgãos e entidades da União, Estados, Distrito Federal e Municípios, baseados na Lei nº 12.527. Por meio do sistema, além de fazer o pedido, será possível acompanhar o prazo pelo número de protocolo gerado e receber a resposta da solicitação por e-mail; entrar com recursos, apresentar reclamações e consultar as respostas recebidas. O objetivo é facilitar o exercício do direito de acesso às informações públicas.</p>
			<p>A Lei nº 12.527, sancionada pela Presidenta da República em 18 de novembro de 2011, tem o propósito de regulamentar o direito constitucional de acesso dos cidadãos às informações públicas e seus dispositivos são aplicáveis aos três Poderes da União, Estados, Distrito Federal e Municípios. A publicação da Lei de Acesso a Informações significa um importante passo para a consolidação democrática do Brasil. Por tornar possível uma maior participação popular e o controle social das ações governamentais, o acesso da sociedade às informações públicas permite que ocorra uma melhoria na gestão pública.</p>
		</div>
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/aguarde_sic.png" style="width:500px; height:30px; float:left; margin-top:30px;"/>
		<div id="sic_link_anexos"></div>
			<a href="http://www.acessoainformacao.gov.br/acessoainformacaogov/destaques/cartilha.asp"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/cartilha.png" style="width:400px; height:100px; float:left; "/></a>
			<a href="http://www.planalto.gov.br/ccivil_03/_Ato2011-2014/2011/Lei/L12527.htm"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/lei_integra.png" style="width:400px; height:100px; float:right; "/></a>
		</div>		
		<div id="links_social">
			Compartilhe o nosso conteúdo: 
			<span class='st_facebook_hcount' displayText='Facebook'></span>
			<span class='st_twitter_hcount' displayText='Tweet'></span>
			<span class='st_email_hcount' displayText='Email'></span>
		</div>
	</div>
</div>
