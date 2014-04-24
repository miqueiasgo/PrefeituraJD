<?php
/* @var $this ParceriasController */
/* @var $model Parcerias */

$this->breadcrumbs=array(
	'Parceriases'=>array('index'),
	$model->id_adm_parcerias,
);

$this->menu=array(
	array('label'=>'List Parcerias', 'url'=>array('index')),
	array('label'=>'Create Parcerias', 'url'=>array('create')),
	array('label'=>'Update Parcerias', 'url'=>array('update', 'id'=>$model->id_adm_parcerias)),
	array('label'=>'Delete Parcerias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_adm_parcerias),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Parcerias', 'url'=>array('admin')),
);
?>

<h1>View Parcerias #<?php echo $model->id_adm_parcerias; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_adm_parcerias',
		'titulo',
		'texto',
		'tipo',
	),
)); ?>
