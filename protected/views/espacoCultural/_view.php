<?php
/* @var $this EspacoCulturalController */
/* @var $data EspacoCultural */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_acontece')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_acontece), array('view', 'id'=>$data->id_acontece)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('texto')); ?>:</b>
	<?php echo CHtml::encode($data->texto); ?>
	<br />


</div>