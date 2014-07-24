<?php
/* @var $this CapituloController */
/* @var $model Capitulo */

$this->breadcrumbs=array(
	'Capitulos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Capitulo', 'url'=>array('index')),
	array('label'=>'Manage Capitulo', 'url'=>array('admin')),
);
?>

<h1>Create Capitulo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>