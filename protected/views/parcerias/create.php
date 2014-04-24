<?php
/* @var $this ParceriasController */
/* @var $model Parcerias */

$this->breadcrumbs=array(
	'Parceriases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Parcerias', 'url'=>array('index')),
	array('label'=>'Manage Parcerias', 'url'=>array('admin')),
);
?>

<h1>Create Parcerias</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>