<?php
/* @var $this EstadoRevisionController */
/* @var $model EstadoRevision */

$this->breadcrumbs=array(
	'Estado Revisions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EstadoRevision', 'url'=>array('index')),
	array('label'=>'Manage EstadoRevision', 'url'=>array('admin')),
);
?>

<h1>Create EstadoRevision</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>