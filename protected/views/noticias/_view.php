<?php
/* @var $this NoticiasController */
/* @var $data Noticias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto_slideshow')); ?>:</b>
	
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtitulo')); ?>:</b>
	<?php echo CHtml::encode($data->subtitulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('texto_noticia')); ?>:</b>
	<?php echo CHtml::encode($data->texto_noticia); ?>
	<br />


</div>