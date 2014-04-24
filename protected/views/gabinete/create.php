<?php
/* @var $this GabineteController */
/* @var $model Gabinete */

$this->breadcrumbs=array(
	'Gabinetes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gabinete', 'url'=>array('index')),
	array('label'=>'Manage Gabinete', 'url'=>array('admin')),
);
?>

<h1>Create Gabinete</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>