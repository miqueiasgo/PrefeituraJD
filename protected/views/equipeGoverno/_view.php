<?php
/* @var $this EquipeGovernoController */
/* @var $data EquipeGoverno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_adm_equipe')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_adm_equipe), array('view', 'id'=>$data->id_adm_equipe)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargo')); ?>:</b>
	<?php echo CHtml::encode($data->cargo); ?>
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