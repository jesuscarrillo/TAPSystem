<?php
/* @var $this ControlDeEstudioController */
/* @var $model ControlDeEstudio */

$this->breadcrumbs=array(
	'Control De Estudios'=>array('index'),
	$model->Usuario_id,
);

$this->menu=array(
	array('label'=>'List ControlDeEstudio', 'url'=>array('index')),
	array('label'=>'Create ControlDeEstudio', 'url'=>array('create')),
	array('label'=>'Update ControlDeEstudio', 'url'=>array('update', 'id'=>$model->Usuario_id)),
	array('label'=>'Delete ControlDeEstudio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Usuario_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ControlDeEstudio', 'url'=>array('admin')),
);
?>

<h1>View ControlDeEstudio #<?php echo $model->Usuario_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Usuario_id',
		'nombre',
		'apellido',
		'tipoUsuario',
		'tipoAcceso',
	),
)); ?>
