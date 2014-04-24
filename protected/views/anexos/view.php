<?php
/* @var $this AnexosController */
/* @var $model Anexos */

$this->breadcrumbs=array(
	'Anexoses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Anexos', 'url'=>array('index')),
	array('label'=>'Create Anexos', 'url'=>array('create')),
	array('label'=>'Update Anexos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Anexos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Anexos', 'url'=>array('admin')),
);
?>

<h1>View Anexos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_publicacao',
		'path',
		'name',
		'principal',
	),
)); ?>
