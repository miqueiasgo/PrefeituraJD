<?php
/* @var $this AnexosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Anexoses',
);

$this->menu=array(
	array('label'=>'Create Anexos', 'url'=>array('create')),
	array('label'=>'Manage Anexos', 'url'=>array('admin')),
);
?>

<h1>Anexoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
