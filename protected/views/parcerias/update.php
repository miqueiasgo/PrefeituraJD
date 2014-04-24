<?php
/* @var $this ParceriasController */
/* @var $model Parcerias */

$this->breadcrumbs=array(
	'Parceriases'=>array('index'),
	$model->id_adm_parcerias=>array('view','id'=>$model->id_adm_parcerias),
	'Update',
);

$this->menu=array(
	array('label'=>'List Parcerias', 'url'=>array('index')),
	array('label'=>'Create Parcerias', 'url'=>array('create')),
	array('label'=>'View Parcerias', 'url'=>array('view', 'id'=>$model->id_adm_parcerias)),
	array('label'=>'Manage Parcerias', 'url'=>array('admin')),
);
?>

<h1>Update Parcerias <?php echo $model->id_adm_parcerias; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>