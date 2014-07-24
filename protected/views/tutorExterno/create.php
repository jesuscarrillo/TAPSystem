<?php
/* @var $this TutorExternoController */
/* @var $model TutorExterno */

$this->breadcrumbs=array(
	'Tutor Externos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TutorExterno', 'url'=>array('index')),
	array('label'=>'Manage TutorExterno', 'url'=>array('admin')),
);
?>

<h1>Create TutorExterno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>