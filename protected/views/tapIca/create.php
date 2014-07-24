<?php
/* @var $this TapIcaController */
/* @var $model TapIca */

$this->breadcrumbs=array(
	'Tap Icas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TapIca', 'url'=>array('index')),
	array('label'=>'Manage TapIca', 'url'=>array('admin')),
);
?>

<h1>Create TapIca</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>