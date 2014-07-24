<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'LineaInvestigacions'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List LineaInvestigacion', 'url'=>array('index')),
	array('label'=>'Create LineaInvestigacion', 'url'=>array('create')),
	array('label'=>'Update LineaInvestigacion', 'url'=>array('update', 'id'=>$model->id, 'Area_id'=>$model->Area_id)),
	array('label'=>'Delete LineaInvestigacion', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'id'=>$model->id, 'Area_id'=>$model->Area_id),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LineaInvestigacion', 'url'=>array('admin')),
);
?>

<h1>View LineaInvestigacion</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Area_id',
		'nombre',
		'descripcion',
		'fecha',
	),
)); ?>
