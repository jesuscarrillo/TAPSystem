<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'don_tnos'=>array('index'),
	'View',
);

$this->menu=array(
	array('label'=>'List don_tno', 'url'=>array('index')),
	array('label'=>'Create don_tno', 'url'=>array('create')),
	array('label'=>'Update don_tno', 'url'=>array('update', 'TutorExterno_id'=>$model->TutorExterno_id, 'Direccion_id'=>$model->Direccion_id)),
	array('label'=>'Delete don_tno', 'url'=>'delete', 
	      'linkOptions'=>array('submit'=>array('delete',
	                                           'TutorExterno_id'=>$model->TutorExterno_id, 'Direccion_id'=>$model->Direccion_id),
									'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage don_tno', 'url'=>array('admin')),
);
?>

<h1>View don_tno</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TutorExterno_id',
		'Direccion_id',
		'comentario',
		'fecha',
	),
)); ?>
