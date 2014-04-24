<?php
/* @var $this GabineteController */
/* @var $model Gabinete */

$this->breadcrumbs=array(
	'Gabinetes'=>array('index'),
	$model->id_adm_gabinete=>array('view','id'=>$model->id_adm_gabinete),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gabinete', 'url'=>array('index')),
	array('label'=>'Create Gabinete', 'url'=>array('create')),
	array('label'=>'View Gabinete', 'url'=>array('view', 'id'=>$model->id_adm_gabinete)),
	array('label'=>'Manage Gabinete', 'url'=>array('admin')),
);
?>

<h1>Update Gabinete <?php echo $model->id_adm_gabinete; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>