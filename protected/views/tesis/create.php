<?php
/* @var $this TesisController */
/* @var $model Tesis */

$this->breadcrumbs=array(
	'Tesises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tesis', 'url'=>array('index')),
	array('label'=>'Manage Tesis', 'url'=>array('admin')),
);
?>

<h1>Create Tesis</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>