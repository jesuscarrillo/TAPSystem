<?php
/* @var $this InscripcionController */
/* @var $model Inscripcion */

$this->breadcrumbs=array(
	'Inscripcions'=>array('index'),
	$model->TAP_id=>array('view','id'=>$model->TAP_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Inscripcion', 'url'=>array('index')),
	array('label'=>'Create Inscripcion', 'url'=>array('create')),
	array('label'=>'View Inscripcion', 'url'=>array('view', 'id'=>$model->TAP_id)),
	array('label'=>'Manage Inscripcion', 'url'=>array('admin')),
);
?>

<h1>Update Inscripcion <?php echo $model->TAP_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>