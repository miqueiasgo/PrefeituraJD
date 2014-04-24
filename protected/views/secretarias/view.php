<?php
/* @var $this SecretariasController */
/* @var $model Secretarias */

$this->breadcrumbs=array(
	'Secretariases'=>array('index'),
	$model->id_adm_secretarias,
);

$this->menu=array(
	array('label'=>'List Secretarias', 'url'=>array('index')),
	array('label'=>'Create Secretarias', 'url'=>array('create')),
	array('label'=>'Update Secretarias', 'url'=>array('update', 'id'=>$model->id_adm_secretarias)),
	array('label'=>'Delete Secretarias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_adm_secretarias),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Secretarias', 'url'=>array('admin')),
);
?>

<h1>View Secretarias #<?php echo $model->id_adm_secretarias; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_adm_secretarias',
		'titulo',
		'texto',
		'tipo',
	),
)); ?>
