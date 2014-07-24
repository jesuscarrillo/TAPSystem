<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'LineaInvestigacions'=>array('index'),
	'View'=>array('view', 'id'=>$model->id, 'Area_id'=>$model->Area_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LineaInvestigacion', 'url'=>array('index')),
	array('label'=>'Create LineaInvestigacion', 'url'=>array('create')),
	array('label'=>'View LineaInvestigacion', 'url'=>array('view', 'id'=>$model->id, 'Area_id'=>$model->Area_id)),
	array('label'=>'Manage LineaInvestigacion', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
