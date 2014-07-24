<?php
/* @var $this ControlDeEstudioController */
/* @var $model ControlDeEstudio */

$this->breadcrumbs=array(
	'Control De Estudios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ControlDeEstudio', 'url'=>array('index')),
	array('label'=>'Manage ControlDeEstudio', 'url'=>array('admin')),
);
?>

<h1>Create ControlDeEstudio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>