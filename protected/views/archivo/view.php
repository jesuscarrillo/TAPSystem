<?php
/* @var $this ArchivoController */
/* @var $model Archivo */

$this->breadcrumbs=array(
	'Archivos'=>array('index'),
	$model->tap_ica_id,
);

$this->menu=array(
	array('label'=>'List Archivo', 'url'=>array('index')),
	array('label'=>'Create Archivo', 'url'=>array('create')),
	array('label'=>'Update Archivo', 'url'=>array('update', 'id'=>$model->tap_ica_id)),
	array('label'=>'Delete Archivo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tap_ica_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Archivo', 'url'=>array('admin')),
);
?>

<h1>View Archivo #<?php echo $model->tap_ica_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tap_ica_id',
		'nombre',
		'adjunto',
	),
)); ?>
