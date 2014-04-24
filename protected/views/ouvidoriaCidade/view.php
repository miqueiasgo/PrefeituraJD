<?php
/* @var $this OuvidoriaCidadeController */
/* @var $model OuvidoriaCidade */

$this->breadcrumbs=array(
	'Ouvidoria Cidades'=>array('index'),
	$model->id_ouvidoria,
);

$this->menu=array(
	array('label'=>'List OuvidoriaCidade', 'url'=>array('index')),
	array('label'=>'Create OuvidoriaCidade', 'url'=>array('create')),
	array('label'=>'Update OuvidoriaCidade', 'url'=>array('update', 'id'=>$model->id_ouvidoria)),
	array('label'=>'Delete OuvidoriaCidade', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ouvidoria),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OuvidoriaCidade', 'url'=>array('admin')),
);
?>

<h1>View OuvidoriaCidade #<?php echo $model->id_ouvidoria; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ouvidoria',
		'nome',
		'email',
		'texto',
		'endereco',
	),
)); ?>
