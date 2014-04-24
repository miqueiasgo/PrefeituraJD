<?php
/* @var $this SecretariasController */
/* @var $model Secretarias */

$this->breadcrumbs=array(
	'Secretariases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Secretarias', 'url'=>array('index')),
	array('label'=>'Manage Secretarias', 'url'=>array('admin')),
);
?>

<h1>Create Secretarias</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>