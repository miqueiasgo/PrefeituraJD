<?php
/* @var $this ObrasController */
/* @var $model Obras */

$this->breadcrumbs=array(
	'Obrases'=>array('index'),
	$model->id_obras,
);

$this->menu=array(
	array('label'=>'List Obras', 'url'=>array('index')),
	array('label'=>'Create Obras', 'url'=>array('create')),
	array('label'=>'Update Obras', 'url'=>array('update', 'id'=>$model->id_obras)),
	array('label'=>'Delete Obras', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_obras),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Obras', 'url'=>array('admin')),
);
?>

<h1>View Obras #<?php echo $model->id_obras; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'titulo',
		'data',
		'texto_obra',
	),
)); ?>
