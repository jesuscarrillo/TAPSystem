<?php
/* @var $this InscripcionController */
/* @var $model Inscripcion */

$this->breadcrumbs=array(
	'Inscripcions'=>array('index'),
	$model->TAP_id,
);

$this->menu=array(
	array('label'=>'List Inscripcion', 'url'=>array('index')),
	array('label'=>'Create Inscripcion', 'url'=>array('create')),
	array('label'=>'Update Inscripcion', 'url'=>array('update', 'id'=>$model->TAP_id)),
	array('label'=>'Delete Inscripcion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TAP_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Inscripcion', 'url'=>array('admin')),
);
?>

<h1>View Inscripcion #<?php echo $model->TAP_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TAP_id',
		'Estudiante_id',
		'Estudiante_id2',
		'fecha',
	),
)); ?>
