<?php
/* @var $this SicController */
/* @var $model Sic */

$this->breadcrumbs=array(
	'Sics'=>array('index'),
	$model->id_sic=>array('view','id'=>$model->id_sic),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sic', 'url'=>array('index')),
	array('label'=>'Create Sic', 'url'=>array('create')),
	array('label'=>'View Sic', 'url'=>array('view', 'id'=>$model->id_sic)),
	array('label'=>'Manage Sic', 'url'=>array('admin')),
);
?>

<h1>Update Sic <?php echo $model->id_sic; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>