<?php
/* @var $this EspacoCulturalController */
/* @var $model EspacoCultural */

$this->breadcrumbs=array(
	'Espaco Culturals'=>array('index'),
	$model->id_acontece,
);

$this->menu=array(
	array('label'=>'List EspacoCultural', 'url'=>array('index')),
	array('label'=>'Create EspacoCultural', 'url'=>array('create')),
	array('label'=>'Update EspacoCultural', 'url'=>array('update', 'id'=>$model->id_acontece)),
	array('label'=>'Delete EspacoCultural', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_acontece),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EspacoCultural', 'url'=>array('admin')),
);
?>

<h1>View EspacoCultural #<?php echo $model->id_acontece; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_acontece',
		'titulo',
		'texto',
	),
)); ?>
