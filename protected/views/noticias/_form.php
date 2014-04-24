<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'noticias-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'titulo'); ?>
		<?php echo $form->textField($model,'titulo',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'titulo'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'subtitulo'); ?>
		<?php //echo $form->textField($model,'subtitulo',array('size'=>60,'maxlength'=>200)); ?>
		<?php //echo $form->error($model,'subtitulo'); ?>
	</div>
   
   <div class="row">
   <?php
      echo $form->labelEx($model, 'foto_slideshow');
      echo $form->fileField($model, 'foto_slideshow');
      echo $form->error($model, 'foto_slideshow'); 
   ?>
   </div>

	<div class="row">
		<?php echo $form->labelEx($model,'texto_noticia');
      
      $this->widget('ext.editMe.widgets.ExtEditMe', array(
		    'model'=>$model,
		    'attribute'=>'texto_noticia',
		));
		
		echo $form->error($model,'texto_noticia'); ?>
	</div>
  
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Salvar' : 'Atualizar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->