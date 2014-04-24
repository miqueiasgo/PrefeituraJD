<?php
/* @var $this EspacoCulturalController */
/* @var $model EspacoCultural */

$this->breadcrumbs=array(
	'Espaco Culturals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EspacoCultural', 'url'=>array('index')),
	array('label'=>'Manage EspacoCultural', 'url'=>array('admin')),
);
?>

<h1>Create EspacoCultural</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>