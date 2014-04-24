<?php
/* @var $this SecretariasController */
/* @var $data Secretarias */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_adm_secretarias')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_adm_secretarias), array('view', 'id'=>$data->id_adm_secretarias)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('texto')); ?>:</b>
	<?php echo CHtml::encode($data->texto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />


</div>