<?php
/* @var $this PublicacoesController */
/* @var $data Publicacoes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subtitulo')); ?>:</b>
	<?php echo CHtml::encode($data->subtitulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php 
      $data = explode('-',$data->data);
      $data = $data[0].'/'.$data[1].'/'.$data[2];
      echo CHtml::encode($data); ?>
	<br />
   
   <b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('situacao')); ?>:</b>
	<?php echo CHtml::encode($data->situacao); ?>
	<br />


</div>