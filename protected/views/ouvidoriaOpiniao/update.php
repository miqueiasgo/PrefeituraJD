<?php
/* @var $this OuvidoriaOpiniaoController */
/* @var $model OuvidoriaOpiniao */

$this->breadcrumbs=array(
	'Ouvidoria Opiniaos'=>array('index'),
	$model->id_ouvidoria=>array('view','id'=>$model->id_ouvidoria),
	'Update',
);

$this->menu=array(
	array('label'=>'List OuvidoriaOpiniao', 'url'=>array('index')),
	array('label'=>'Create OuvidoriaOpiniao', 'url'=>array('create')),
	array('label'=>'View OuvidoriaOpiniao', 'url'=>array('view', 'id'=>$model->id_ouvidoria)),
	array('label'=>'Manage OuvidoriaOpiniao', 'url'=>array('admin')),
);
?>

<h1>Update OuvidoriaOpiniao <?php echo $model->id_ouvidoria; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>