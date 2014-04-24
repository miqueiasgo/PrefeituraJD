<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'equipe-governo-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cargo'); ?>
		<?php echo $form->textField($model,'cargo'); ?>
		<?php echo $form->error($model,'cargo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'texto'); 
         $this->widget('ext.editMe.widgets.ExtEditMe', array(
		    'model'=>$model,
		    'attribute'=>'texto',
		));
		 echo $form->error($model,'texto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto');
		echo $form->fileField($model, 'foto');
		echo $form->error($model,'foto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->