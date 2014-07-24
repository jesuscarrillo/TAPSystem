<?php
/* @var $this PasantiaController */
/* @var $model Pasantia */

$this->breadcrumbs=array(
	'Pasantias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pasantia', 'url'=>array('index')),
	array('label'=>'Manage Pasantia', 'url'=>array('admin')),
);
?>

<h1>Create Pasantia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>