<?php
/* @var $this LapsoAcademicoController */
/* @var $model LapsoAcademico */

$this->breadcrumbs=array(
	'Lapso Academicos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LapsoAcademico', 'url'=>array('index')),
	array('label'=>'Create LapsoAcademico', 'url'=>array('create')),
	array('label'=>'Update LapsoAcademico', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LapsoAcademico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LapsoAcademico', 'url'=>array('admin')),
);
?>

<h1>View LapsoAcademico #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fechaInicio',
		'fechaFin',
	),
)); ?>
