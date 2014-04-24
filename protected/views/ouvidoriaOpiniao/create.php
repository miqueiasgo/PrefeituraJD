<?php
/* @var $this OuvidoriaOpiniaoController */
/* @var $model OuvidoriaOpiniao */

$this->breadcrumbs=array(
	'Ouvidoria Opiniaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OuvidoriaOpiniao', 'url'=>array('index')),
	array('label'=>'Manage OuvidoriaOpiniao', 'url'=>array('admin')),
);
?>

<h1>Create OuvidoriaOpiniao</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>