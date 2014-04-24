<?php
/* @var $this OuvidoriaOpiniaoController */
/* @var $model OuvidoriaOpiniao */

$this->breadcrumbs=array(
	'Ouvidoria Opiniaos'=>array('index'),
	$model->id_ouvidoria,
);

$this->menu=array(
	array('label'=>'List OuvidoriaOpiniao', 'url'=>array('index')),
	array('label'=>'Create OuvidoriaOpiniao', 'url'=>array('create')),
	array('label'=>'Update OuvidoriaOpiniao', 'url'=>array('update', 'id'=>$model->id_ouvidoria)),
	array('label'=>'Delete OuvidoriaOpiniao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ouvidoria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OuvidoriaOpiniao', 'url'=>array('admin')),
);
?>

<h1>View OuvidoriaOpiniao #<?php echo $model->id_ouvidoria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ouvidoria',
		'nome',
		'email',
		'texto',
	),
)); ?>
