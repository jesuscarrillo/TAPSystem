<?php
/* @var $this CaracteristicaController */
/* @var $model Caracteristica */

$this->breadcrumbs=array(
	'Caracteristicas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Caracteristica', 'url'=>array('index')),
	array('label'=>'Manage Caracteristica', 'url'=>array('admin')),
);
?>

<h1>Create Caracteristica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>