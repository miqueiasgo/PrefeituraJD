<?php
/* @var $this SecretariasController */
/* @var $model Secretarias */

$this->breadcrumbs=array(
	'Secretariases'=>array('index'),
	$model->id_adm_secretarias=>array('view','id'=>$model->id_adm_secretarias),
	'Update',
);

$this->menu=array(
	array('label'=>'List Secretarias', 'url'=>array('index')),
	array('label'=>'Create Secretarias', 'url'=>array('create')),
	array('label'=>'View Secretarias', 'url'=>array('view', 'id'=>$model->id_adm_secretarias)),
	array('label'=>'Manage Secretarias', 'url'=>array('admin')),
);
?>

<h1>Update Secretarias <?php echo $model->id_adm_secretarias; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>