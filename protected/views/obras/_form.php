<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'obras-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data');
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
		echo $form->error($model,'data'); ?>
	</div>
   
   <div class="row">
   <?php
      echo $form->labelEx($model, 'foto_slideshow');
      echo $form->fileField($model, 'foto_slideshow');
      echo $form->error($model, 'foto_slideshow'); 
   ?>
   </div>

	<div class="row">
		<?php echo $form->labelEx($model,'texto_obra'); 
      $this->widget('ext.editMe.widgets.ExtEditMe', array(
		    'model'=>$model,
		    'attribute'=>'texto_obra',
		));
      echo $form->error($model,'texto_obra'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar' : 'Atualizar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->