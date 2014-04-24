<?php
/* @var $this GabineteController */
/* @var $model Gabinete */

$this->breadcrumbs=array(
	'Gabinetes'=>array('index'),
	$model->id_adm_gabinete,
);

$this->menu=array(
	array('label'=>'List Gabinete', 'url'=>array('index')),
	array('label'=>'Create Gabinete', 'url'=>array('create')),
	array('label'=>'Update Gabinete', 'url'=>array('update', 'id'=>$model->id_adm_gabinete)),
	array('label'=>'Delete Gabinete', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_adm_gabinete),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gabinete', 'url'=>array('admin')),
);
?>

<h1>View Gabinete #<?php echo $model->id_adm_gabinete; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_adm_gabinete',
		'titulo',
		'texto',
		'foto',
	),
)); ?>
