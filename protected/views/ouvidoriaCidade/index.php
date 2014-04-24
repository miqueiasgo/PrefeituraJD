<?php
/* @var $this OuvidoriaCidadeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ouvidoria Cidades',
);

$this->menu=array(
	array('label'=>'Create OuvidoriaCidade', 'url'=>array('create')),
	array('label'=>'Manage OuvidoriaCidade', 'url'=>array('admin')),
);
?>

<h1>Ouvidoria Cidades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
