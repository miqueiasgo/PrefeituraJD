<?php
/* @var $this AnexosController */
/* @var $model Anexos */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('anexos-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Anexos - <?php echo $titulo;   ?></h1>

<?php
echo CHtml::imageButton(Yii::app()->request->baseUrl.'/images/icons/add.png', array('submit' => array('//anexos/create','id_publicacao'=>$id_publicacao)));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'anexos-grid',
	'dataProvider'=>$model->findAnexos($id_publicacao),
	'filter'=>$model,
	'columns'=>array(
		'name',
		array(
         'header'=>'principal',
         'name'=>'principal',
         'value'=>'($data->principal)? "Principal" : "Anexo"',
      ),
		array(
         'header' => 'Ações',
         'class'=>'CButtonColumn',
         'updateButtonImageUrl' => Yii::app()->baseUrl . '/images/icons/edit.png',
         'deleteButtonImageUrl' => Yii::app()->baseUrl . '/images/icons/trash.png',
         'template' => '{update}{delete}',
		),
	),
)); ?>
