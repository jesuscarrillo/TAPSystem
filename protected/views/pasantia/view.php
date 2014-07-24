<?php
/* @var $this PasantiaController */
/* @var $model Pasantia */

$this->breadcrumbs=array(
	'Pasantias'=>array('index'),
	$model->TAP_id,
);

$this->menu=array(
	array('label'=>'List Pasantia', 'url'=>array('index')),
	array('label'=>'Create Pasantia', 'url'=>array('create')),
	array('label'=>'Update Pasantia', 'url'=>array('update', 'id'=>$model->TAP_id)),
	array('label'=>'Delete Pasantia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TAP_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pasantia', 'url'=>array('admin')),
);
?>

<h1>View Pasantia #<?php echo $model->TAP_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'notaExterna',
		'TAP_id',
		'TutorExterno_Id',
		'Direccion_id',
	),
)); ?>
