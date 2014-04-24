<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('noticias-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gerenciar Notícias</h1>

<?php 
echo CHtml::imageButton(Yii::app()->request->baseUrl.'/images/icons/add.png', array('submit' => array('//noticias/create')));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'noticias-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'titulo',
		'subtitulo',
		array(
         'header'=>'data',
         'name'=>'data',
         'value'=>'$data->convertData($data->data)',
      ),
		'texto_noticia',
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
