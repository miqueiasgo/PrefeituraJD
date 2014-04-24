<?php
/* @var $this PublicacoesController */
/* @var $model Publicacoes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'publicacoes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subtitulo'); ?>
		<?php echo $form->textField($model,'subtitulo',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'subtitulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data');
      
      echo $form->error($model,'data'); ?>
	</div>
<?php

	$this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model, 
                'attribute'=>'data',
                'i18nScriptFile' => 'jquery.ui.datepicker-ja.js',
                'defaultOptions' => array(
                    'showOn' => 'focus', 
                    'dateFormat' => 'dd/mm/yy',
                    'changeMonth' => true,
                    'changeYear' => true,
                )));
?>
	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textArea($model,'descricao',array('style'=>'min-height:100px;min-width:400px;')); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>
   
   <div class="row">
		<?php echo $form->labelEx($model,'situacao'); ?>
		<?php echo $form->dropDownList($model,'situacao',array('em aberto'=>'Em Aberto','julgado'=> 'Julgado','prorrogado'=> 'Prorrogado','cancelado'=> 'Cancelado')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Atualizar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->