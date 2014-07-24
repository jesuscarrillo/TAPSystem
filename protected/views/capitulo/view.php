<?php
/* @var $this CapituloController */
/* @var $model Capitulo */

$this->breadcrumbs=array(
	'Capitulos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Capitulo', 'url'=>array('index')),
	array('label'=>'Create Capitulo', 'url'=>array('create')),
	array('label'=>'Update Capitulo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Capitulo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Capitulo', 'url'=>array('admin')),
);
?>

<h1>View Capitulo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
		'fecha',
	),
)); ?>
