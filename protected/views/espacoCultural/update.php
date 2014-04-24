<?php
/* @var $this EspacoCulturalController */
/* @var $model EspacoCultural */

$this->breadcrumbs=array(
	'Espaco Culturals'=>array('index'),
	$model->id_acontece=>array('view','id'=>$model->id_acontece),
	'Update',
);

$this->menu=array(
	array('label'=>'List EspacoCultural', 'url'=>array('index')),
	array('label'=>'Create EspacoCultural', 'url'=>array('create')),
	array('label'=>'View EspacoCultural', 'url'=>array('view', 'id'=>$model->id_acontece)),
	array('label'=>'Manage EspacoCultural', 'url'=>array('admin')),
);
?>

<h1>Update EspacoCultural <?php echo $model->id_acontece; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>