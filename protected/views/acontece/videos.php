<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "5a772a46-2110-490c-834a-66fcd4f735c3", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>


<!--Método que carrega os vídeos do canal do youtube !-->
<?php
// Seu usuário do YouTube
$usuario = 'tvpmjoaodourado';

// URL do Feed RSS de vídeos de um usuário
$youTube_UserFeedURL = 'http://gdata.youtube.com/feeds/base/users/%s/uploads?orderby=updated&v=2';

// Usa cURL para pegar o XML do feed
$cURL = curl_init(sprintf($youTube_UserFeedURL, $usuario));
curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
curl_setopt($cURL, CURLOPT_FOLLOWLOCATION, true);
$resultado = curl_exec($cURL);
curl_close($cURL);

// Inicia o parseamento do XML com o SimpleXML
$xml = new SimpleXMLElement($resultado);

$videos = array();

// Passa por todos vídeos no RSS
foreach ($xml->entry AS $video) {
	$url = (string)$video->link['href'];

	// Quebra a URL do vídeo para pegar o ID
	parse_str(parse_url($url, PHP_URL_QUERY), $params);
	$id = $params['v'];

	// Monta um array com os dados do vídeo
	$videos[] = array(
		'id' => $id,
		'titulo' => (string)$video->title,
		'thumbnail' => 'http://i' . rand(1, 4) .'.ytimg.com/vi/'. $id .'/hqdefault.jpg',
		'url' => $url
	);
}
?>

<!--Fim do Método que carrega os vídeos do canal do youtube !-->


<script type="text/javascript">
	$(function() {
		$(selector).pagination({
			items: 13 ,
			itemsOnPage: 3,
			cssStyle: 'light-theme'
		});
	});
</script>


<div id='titulo_news'>
	<div id="titulo_news_menor">
		<p>Vídeos</p>
	</div>
</div>

<div id="video_maior">
      <iframe width="507" height="371" src="http://www.youtube.com/embed/0qDEfvWetZY?theme=dark&color=white" frameborder="0" allowfullscreen></iframe>
</div>
<div id="barra_video_maior"></div>
<div id="colecao_videos">
	<a>				
		<?php foreach ($videos AS $video) { ?>
			<div id="video_menor">
				<a href="<?php echo $video['url'] ?>" title="<?php echo $video['titulo'] ?>"><img src="<?php echo $video['thumbnail'] ?>" alt="<?php echo $video['titulo'] ?>" width="150" /></a>
				<p><?php echo $video['titulo'] ?></p>
			</div>
			
		<?php } ?>
	</a>
</div>
<div id="links_social">
	Compartilhe o nosso conteúdo: 
	<span class='st_facebook_hcount' displayText='Facebook'></span>
	<span class='st_twitter_hcount' displayText='Tweet'></span>
	<span class='st_email_hcount' displayText='Email'></span>
</div>
