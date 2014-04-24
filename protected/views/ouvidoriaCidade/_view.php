<?php
/* @var $this OuvidoriaCidadeController */
/* @var $data OuvidoriaCidade */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ouvidoria')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ouvidoria), array('view', 'id'=>$data->id_ouvidoria)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('texto')); ?>:</b>
	<?php echo CHtml::encode($data->texto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endereco')); ?>:</b>
	<?php echo CHtml::encode($data->endereco); ?>
	<br />


</div>