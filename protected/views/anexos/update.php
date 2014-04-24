<?php
/* @var $this AnexosController */
/* @var $model Anexos */

$this->breadcrumbs=array(
	'Anexoses'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Anexos', 'url'=>array('index')),
	array('label'=>'Create Anexos', 'url'=>array('create')),
	array('label'=>'View Anexos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Anexos', 'url'=>array('admin')),
);
?>

<h1>Update Anexos <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'publicacao'=>$publicacao)); ?>