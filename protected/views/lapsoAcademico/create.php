<?php
/* @var $this LapsoAcademicoController */
/* @var $model LapsoAcademico */

$this->breadcrumbs=array(
	'Lapso Academicos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LapsoAcademico', 'url'=>array('index')),
	array('label'=>'Manage LapsoAcademico', 'url'=>array('admin')),
);
?>

<h1>Create LapsoAcademico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>