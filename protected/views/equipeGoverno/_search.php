<?php
/* @var $this EquipeGovernoController */
/* @var $model EquipeGoverno */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_adm_equipe'); ?>
		<?php echo $form->textField($model,'id_adm_equipe'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cargo'); ?>
		<?php echo $form->textField($model,'cargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'texto'); ?>
		<?php echo $form->textArea($model,'texto',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'foto'); ?>
		<?php echo $form->textArea($model,'foto',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->