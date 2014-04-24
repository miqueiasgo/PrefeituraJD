<script type="text/javascript">
     
    $(function() {
 
        var GammaSettings = {
                // order is important!
                viewport : [ {
                    width : 1200,
                    columns : 5
                }, {
                    width : 900,
                    columns : 4
                }, {
                    width : 500,
                    columns : 3
                }, { 
                    width : 320,
                    columns : 2
                }, { 
                    width : 0,
                    columns : 2
                } ]
        };
 
        Gamma.init( GammaSettings );
 
    });
 
</script>

<div id='titulo_news'>
	<div id="titulo_news_menor">
		<p>Imagens</p>
	</div>
</div>

<div id="imagens">
		
	<div class="gamma-container gamma-loading" id="gamma-container"> 
		<ul class="gamma-gallery">
			<li>
				<div data-alt="img01" data-description="<h3>Assemblage</h3>" data-max-width="1800" data-max-height="2400">
					<div><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/galeria_imagens/2.jpg" data-min-width="300"></div>					
					<div data-src="images/xxxlarge/1.jpg" data-min-width="1300"></div>
					<div data-src="images/xxlarge/1.jpg" data-min-width="1000"></div>
					<div data-src="images/xlarge/1.jpg" data-min-width="700"></div>
					<div data-src="images/large/1.jpg" data-min-width="300"></div>
					<div data-src="images/medium/1.jpg" data-min-width="200"></div>
					<div data-src="images/small/1.jpg" data-min-width="140"></div>
					<div data-src="images/xsmall/1.jpg"></div>
					<noscript>
						<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/galeria_imagens/2.jpg" alt="img01"/>
					</noscript>
				</div>
			</li>
			<li> <!-- ... --> </li>
			<!-- ... -->
		</ul>
	 
		<div class="gamma-overlay"></div>
	 
	</div>
</div>

