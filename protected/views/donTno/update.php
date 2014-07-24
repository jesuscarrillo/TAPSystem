<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'don_tnos'=>array('index'),
	'View'=>array('view', 'TutorExterno_id'=>$model->TutorExterno_id, 'Direccion_id'=>$model->Direccion_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List don_tno', 'url'=>array('index')),
	array('label'=>'Create don_tno', 'url'=>array('create')),
	array('label'=>'View don_tno', 'url'=>array('view', 'TutorExterno_id'=>$model->TutorExterno_id, 'Direccion_id'=>$model->Direccion_id)),
	array('label'=>'Manage don_tno', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
