<?php
/* @var $this SicController */
/* @var $model Sic */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sic-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_sic'); ?>
		<?php echo $form->textField($model,'id_sic'); ?>
		<?php echo $form->error($model,'id_sic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpf'); ?>
		<?php echo $form->textField($model,'cpf'); ?>
		<?php echo $form->error($model,'cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'doc_tipo'); ?>
		<?php echo $form->textField($model,'doc_tipo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'doc_tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'doc_valor'); ?>
		<?php echo $form->textField($model,'doc_valor',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'doc_valor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_nascimento'); ?>
		<?php echo $form->textField($model,'data_nascimento'); ?>
		<?php echo $form->error($model,'data_nascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo'); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'escolaridade'); ?>
		<?php echo $form->textField($model,'escolaridade',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'escolaridade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profissao'); ?>
		<?php echo $form->textField($model,'profissao',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'profissao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cep'); ?>
		<?php echo $form->textField($model,'cep'); ?>
		<?php echo $form->error($model,'cep'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endereco'); ?>
		<?php echo $form->textField($model,'endereco',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'endereco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'complemento'); ?>
		<?php echo $form->textField($model,'complemento',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'complemento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bairro'); ?>
		<?php echo $form->textField($model,'bairro',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'bairro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cidade'); ?>
		<?php echo $form->textField($model,'cidade',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cidade'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uf'); ?>
		<?php echo $form->textField($model,'uf',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'uf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pais'); ?>
		<?php echo $form->textField($model,'pais',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'pais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone1'); ?>
		<?php echo $form->textField($model,'telefone1'); ?>
		<?php echo $form->error($model,'telefone1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone2'); ?>
		<?php echo $form->textField($model,'telefone2'); ?>
		<?php echo $form->error($model,'telefone2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone3'); ?>
		<?php echo $form->textField($model,'telefone3'); ?>
		<?php echo $form->error($model,'telefone3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'motivo'); ?>
		<?php echo $form->textField($model,'motivo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'motivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'orgao'); ?>
		<?php echo $form->textField($model,'orgao',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'orgao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'assunto'); ?>
		<?php echo $form->textField($model,'assunto',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'assunto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textArea($model,'descricao',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anexo'); ?>
		<?php echo $form->textField($model,'anexo',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'anexo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->