<?php
/* @var $this CaracteristicaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Caracteristicas',
);

$this->menu=array(
	array('label'=>'Create Caracteristica', 'url'=>array('create')),
	array('label'=>'Manage Caracteristica', 'url'=>array('admin')),
);
?>

<h1>Caracteristicas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
