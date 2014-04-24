<?php
/* @var $this GabineteController */
/* @var $data Gabinete */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_adm_gabinete')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_adm_gabinete), array('view', 'id'=>$data->id_adm_gabinete)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('texto')); ?>:</b>
	<?php echo CHtml::encode($data->texto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
	<?php echo CHtml::encode($data->foto); ?>
	<br />


</div>