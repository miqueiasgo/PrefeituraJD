<?php
/* @var $this SicController */
/* @var $model Sic */

$this->breadcrumbs=array(
	'Sics'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sic', 'url'=>array('index')),
	array('label'=>'Manage Sic', 'url'=>array('admin')),
);
?>

<h1>Create Sic</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>