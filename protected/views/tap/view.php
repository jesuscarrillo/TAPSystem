<?php
/* @var $this TapController */
/* @var $model TAP */

$this->breadcrumbs=array(
	'Taps'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TAP', 'url'=>array('index')),
	array('label'=>'Create TAP', 'url'=>array('create')),
	array('label'=>'Update TAP', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TAP', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TAP', 'url'=>array('admin')),
);
?>

<h1>View TAP #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'LineaInvestigacion_id',
		'Area_id',
		'publica',
		'fechaCreacion',
		'lapsoInicio',
		'fechaInicio',
		'fechaFin',
		'lapsoFin',
	),
)); ?>
