<?php

$this->menu=array(
	array('label'=>'List Publicacoes', 'url'=>array('index')),
	array('label'=>'Create Publicacoes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('publicacoes-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Gerenciar Publicações</h3>

<?php 
echo CHtml::imageButton(Yii::app()->request->baseUrl.'/images/icons/add.png', array('submit' => array('//publicacoes/create')));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'publicacoes-grid',
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
		'situacao',
		array(
         'header' => 'Ações',
         'class'=>'CButtonColumn',
         'viewButtonImageUrl' => Yii::app()->baseUrl . '/images/icons/view.png',
         'updateButtonImageUrl' => Yii::app()->baseUrl . '/images/icons/edit.png',
         'deleteButtonImageUrl' => Yii::app()->baseUrl . '/images/icons/trash.png',
         'buttons'=> array(
             'anexos' => array(
                 'label'=>'Gerenciar Anexos',
                 'imageUrl'=>Yii::app()->request->baseUrl.'/images/icons/attachment.png',
                 'url'=>'Yii::app()->createUrl("anexos/admin", array("id_publicacao"=>$data->id))',
             ),
         ),
         'template'=>'{view}{update}{delete}{anexos}',
         'htmlOptions'=>array('width'=>'80px'),
		),
	),
)); ?>
