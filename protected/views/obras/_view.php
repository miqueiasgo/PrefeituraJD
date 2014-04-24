<?php
/* @var $this ObrasController */
/* @var $data Obras */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_obras')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_obras), array('view', 'id'=>$data->id_obras)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('texto_obra')); ?>:</b>
	<?php echo CHtml::encode($data->texto_obra); ?>
	<br />


</div>