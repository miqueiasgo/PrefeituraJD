<?php
/* @var $this FotosController */
/* @var $model Fotos */

$this->breadcrumbs=array(
	'Fotoses'=>array('index'),
	$model->id_acontece_fotos=>array('view','id'=>$model->id_acontece_fotos),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fotos', 'url'=>array('index')),
	array('label'=>'Create Fotos', 'url'=>array('create')),
	array('label'=>'View Fotos', 'url'=>array('view', 'id'=>$model->id_acontece_fotos)),
	array('label'=>'Manage Fotos', 'url'=>array('admin')),
);
?>

<h1>Update Fotos <?php echo $model->id_acontece_fotos; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>