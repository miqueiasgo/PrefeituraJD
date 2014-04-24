<?php
/* @var $this OuvidoriaCidadeController */
/* @var $model OuvidoriaCidade */

$this->breadcrumbs=array(
	'Ouvidoria Cidades'=>array('index'),
	$model->id_ouvidoria=>array('view','id'=>$model->id_ouvidoria),
	'Update',
);

$this->menu=array(
	array('label'=>'List OuvidoriaCidade', 'url'=>array('index')),
	array('label'=>'Create OuvidoriaCidade', 'url'=>array('create')),
	array('label'=>'View OuvidoriaCidade', 'url'=>array('view', 'id'=>$model->id_ouvidoria)),
	array('label'=>'Manage OuvidoriaCidade', 'url'=>array('admin')),
);
?>

<h1>Update OuvidoriaCidade <?php echo $model->id_ouvidoria; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>