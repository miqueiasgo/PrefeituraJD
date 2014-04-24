<?php
/* @var $this OuvidoriaCidadeController */
/* @var $model OuvidoriaCidade */

$this->breadcrumbs=array(
	'Ouvidoria Cidades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OuvidoriaCidade', 'url'=>array('index')),
	array('label'=>'Manage OuvidoriaCidade', 'url'=>array('admin')),
);
?>

<h1>Create OuvidoriaCidade</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>