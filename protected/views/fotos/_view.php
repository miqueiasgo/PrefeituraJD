<?php
/* @var $this FotosController */
/* @var $data Fotos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_acontece_fotos')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_acontece_fotos), array('view', 'id'=>$data->id_acontece_fotos)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('texto_album')); ?>:</b>
	<?php echo CHtml::encode($data->texto_album); ?>
	<br />


</div>