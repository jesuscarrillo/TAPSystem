<?php
/* @var $this TapController */
/* @var $model TAP */

$this->breadcrumbs=array(
	'Taps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TAP', 'url'=>array('index')),
	array('label'=>'Manage TAP', 'url'=>array('admin')),
);
?>

<h1>Create TAP</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>