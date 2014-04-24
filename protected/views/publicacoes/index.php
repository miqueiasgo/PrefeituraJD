<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "5a772a46-2110-490c-834a-66fcd4f735c3", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<div id='titulo_news'>
	<div id="titulo_news_menor">
		<p>Publicações</p>
	</div>
</div>

<div id="publicacoes">
	<div id="resumo_publicacao">
		<div id="publicacao_cabecalho">
			<div id="publicacao_cabecalho_texto">
				<div id= "publicacao_tipo">Acompanhe o nosso Portal de Publica&ccedil;&otilde;es Oficiais:</div></br>
				<p><a href="http://ba.tmunicipal.org.br/prefeitura/joaodourado/" />At&eacute; 2011</br>
				<p><a href="http://www.pmjoaodourado.ba.ipmbrasil.org.br/CategoriasPublicacao.aspx" />2012/2013</br>
				<p><a href="http://doem.org.br/doem/form.jsp?sys=DOE&action=openform&formID=34&align=0&mode=-1&goto=-1&filter=doe_entidades.ent_codigo=325&scrolling=yes" />A partir de 2014</br>				
			</div>
		</div>
	</div>
</div>


<!-- 2013 -->
<?php
foreach($publicacoes as $publicacao){
?>
   <div id="publicacoes">
	<div id="resumo_publicacao">
		<div id="publicacao_cabecalho">
			<div id="publicacao_barra"></div>
			<div id="publicacao_cabecalho_texto">
				<div id= "publicacao_tipo"><?php echo $publicacao->titulo?></div>
				<p><?php echo $publicacao->subtitulo?></br>
				Data: <?php echo $publicacao->convertData($publicacao->data)?></br>
				Situação: <?php switch($publicacao->situacao){
               case 'em aberto':
                  echo "<div id='publicacao_situacao_aberto'>Em Aberto</div>";break;
               case 'prorrogado':
                  echo "<div id='publicacao_situacao_aberto'>Prorrogado</div>";break;
               case 'julgado':
                  echo "<div id='publicacao_situacao_fechado'>Fechado</div>";break;
               case 'cancelado':
                  echo "<div id='publicacao_situacao_fechado'>Cancelado</div>";break;
            }?>
			</div>
		</div>
	</div>
	<?php 
      if(isset($publicacao->descricao) && $publicacao->descricao != ''){
         echo "<div id='publicacao_linha'></div><div id='publicacao_parte'><div id='publicacao_descricao_titulo'>Descrição:</div>
               <div id='publicacao_descricao_texto'><p>".$publicacao->descricao."</p></div></div>";
      }
      $anexos = Anexos::model()->findAllByAttributes(array('id_publicacao'=>$publicacao->id),array('order'=>'principal DESC'));
      echo "<div id='publicacao_linha'></div>
      <div id='publicacao_parte'>
         <div id='publicacao_descricao_titulo'>Arquivos:</div>";
      $primeiro_anexo = true;
      foreach($anexos as $anexo){
         if($anexo->principal){
      ?>
            
         <div id="publicacao_arquivo">
				<div id="pdf_icone">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pdf.png" />
				</div>
				<?php 
				echo CHtml::link('<div id="publicacao_arquivo_titulo">'.$anexo->name.'</div>',array('/publicacoes/show',
                           'id'=>$anexo->id_publicacao,
                           'arquivo'=>$anexo->path),
									array('target'=>'_blank'));
            echo '</div>';
         }else{ 
            if($primeiro_anexo){
               echo '<div id="publicacao_anexos"><div id="publicacao_anexos_titulo">Anexos:</div>';
               $primeiro_anexo = false;
            }
         ?>
			<div id="publicacao_arquivo">
				<div id="pdf_icone">
					<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pdf.png" />
				</div>
				
				<?php 
				echo CHtml::link('<div id="publicacao_arquivo_titulo">'.$anexo->name.'</div>',array('/publicacoes/show',
									'id'=>$anexo->id_publicacao,
                           'arquivo'=>$anexo->path),
									array('target'=>'_blank'));
            echo '</div>';
          } 
      }
   
echo '</div></div>';
}
?>
<!-- Fim 2013 -->

<div id="publicacao_frase"></div>
<div id='publicacoes'>
	<div class="titulo_publicacoes"><div id="publicacao_ano_2012"></div></div>
	<?php
		foreach($ano2012 as $listar){
				echo "<div id='publicacao'>".
				CHtml::link("<div id='publicacao_data'></div>
							 <div id='publicacao_texto'>
							 <div id='publicacao_texto_tit'>$listar</div><br>
							 <div id='publicacao_linha_abaixo'></div>
							 </div>",
				 array('/publicacoes/showAnteriores',
											'ano'=>2012,
											'arquivo'=>$listar),
										array('target'=>'_blank'))
				 ."</div>";
		}
	?>
	<div class="titulo_publicacoes"><div id="publicacao_ano_2011"></div></div>
	<?php
		foreach($ano2011 as $listar){
			echo "<div id='publicacao'>".
				CHtml::link("<div id='publicacao_data'></div>
							 <div id='publicacao_texto'>
							 <div id='publicacao_texto_tit'>$listar</div><br>
							 <div id='publicacao_linha_abaixo'></div>
							 </div>",
				 array('/publicacoes/showAnteriores',
											'ano'=>2011,
											'arquivo'=>$listar),
										array('target'=>'_blank'))
				 ."</div>";
		}
	?>
	<div class="titulo_publicacoes"><div id="publicacao_ano_2010"></div></div>
	<?php	
		foreach($ano2010 as $listar){
				echo "<div id='publicacao'>".
				CHtml::link("<div id='publicacao_data'></div>
							 <div id='publicacao_texto'>
							 <div id='publicacao_texto_tit'>$listar</div><br>
							 <div id='publicacao_linha_abaixo'></div>
							 </div>",
				 array('/publicacoes/showAnteriores',
											'ano'=>2010,
											'arquivo'=>$listar),
										array('target'=>'_blank'))
				 ."</div>";
		}
	?>
	<div class="titulo_publicacoes"><div id="publicacao_ano_outro"></div></div>
	<?php
		foreach($ano as $listar){
				echo "<div id='publicacao'>".
				CHtml::link("<div id='publicacao_data'></div>
							 <div id='publicacao_texto'>
							 <div id='publicacao_texto_tit'>$listar</div><br>
							 <div id='publicacao_linha_abaixo'></div>
							 </div>",
				 array('/publicacoes/showAnteriores',
											'ano'=>'outros',
											'arquivo'=>$listar),
										array('target'=>'_blank'))
				 ."</div>";
		}
		
	?>
</div>



<div id="links_social">
	Compartilhe o nosso conteúdo: 
	<span class='st_facebook_hcount' displayText='Facebook'></span>
	<span class='st_twitter_hcount' displayText='Tweet'></span>
	<span class='st_email_hcount' displayText='Email'></span>
</div>

