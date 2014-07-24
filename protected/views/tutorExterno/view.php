<?php
/* @var $this TutorExternoController */
/* @var $model TutorExterno */

$this->breadcrumbs=array(
	'Tutor Externos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TutorExterno', 'url'=>array('index')),
	array('label'=>'Create TutorExterno', 'url'=>array('create')),
	array('label'=>'Update TutorExterno', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TutorExterno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TutorExterno', 'url'=>array('admin')),
);
?>

<h1>View TutorExterno #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'apellido',
		'cedulaIdentidad',
		'telefono',
		'correoElectronico',
		'curriculum',
		'fecha',
	),
)); ?>
