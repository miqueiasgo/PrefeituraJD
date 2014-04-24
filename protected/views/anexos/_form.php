<?php
/* @var $this AnexosController */
/* @var $model Anexos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'anexos-form',
	'enableAjaxValidation'=>false,
   'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios</p>

	<?php 
      echo $form->errorSummary($model);
      echo $form->hiddenField($model,'id_publicacao',array('value'=>$publicacao->id));
   ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
   <div class="row">
   <?php
      echo $form->labelEx($model, 'anexo');
      echo $form->fileField($model, 'anexo');
      echo $form->error($model, 'anexo'); 
   ?>
   </div>
	<div class="row">
		<?php echo $form->labelEx($model,'principal'); ?>
		<?php echo $form->dropDownList($model, 'principal', array('1'=>'Pricipal', '0'=>'Anexo'));?>
		<?php echo $form->error($model,'principal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Adicionar' : 'Atualizar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->