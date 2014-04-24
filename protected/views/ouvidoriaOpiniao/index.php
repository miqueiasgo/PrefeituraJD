<?php
/* @var $this OuvidoriaOpiniaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ouvidoria Opiniaos',
);

$this->menu=array(
	array('label'=>'Create OuvidoriaOpiniao', 'url'=>array('create')),
	array('label'=>'Manage OuvidoriaOpiniao', 'url'=>array('admin')),
);
?>

<h1>Ouvidoria Opiniaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
