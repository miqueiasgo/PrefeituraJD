<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('obras-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Obras</h1>

<?php
echo CHtml::imageButton(Yii::app()->request->baseUrl.'/images/icons/add.png', array('submit' => array('//obras/create')));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'obras-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'titulo',
		array(
         'header'=>'data',
         'name'=>'data',
         'value'=>'$data->convertData($data->data)',
      ),
		'texto_obra',
		array(
         'header' => 'Ações',
         'class'=>'CButtonColumn',
         'viewButtonImageUrl' => Yii::app()->baseUrl . '/images/icons/view.png',
         'updateButtonImageUrl' => Yii::app()->baseUrl . '/images/icons/edit.png',
         'deleteButtonImageUrl' => Yii::app()->baseUrl . '/images/icons/trash.png',
         'htmlOptions'=>array('width'=>'80px'),
		),
	),
)); ?>
