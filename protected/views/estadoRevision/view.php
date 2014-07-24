<?php
/* @var $this EstadoRevisionController */
/* @var $model EstadoRevision */

$this->breadcrumbs=array(
	'Estado Revisions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EstadoRevision', 'url'=>array('index')),
	array('label'=>'Create EstadoRevision', 'url'=>array('create')),
	array('label'=>'Update EstadoRevision', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EstadoRevision', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EstadoRevision', 'url'=>array('admin')),
);
?>

<h1>View EstadoRevision #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
		'Icono',
		'fecha',
	),
)); ?>
