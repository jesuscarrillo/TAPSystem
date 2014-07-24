<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'tap_euss'=>array('index'),
	'View'=>array('view', 'TAP_id'=>$model->TAP_id, 'Estatus_id'=>$model->Estatus_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List tap_eus', 'url'=>array('index')),
	array('label'=>'Create tap_eus', 'url'=>array('create')),
	array('label'=>'View tap_eus', 'url'=>array('view', 'TAP_id'=>$model->TAP_id, 'Estatus_id'=>$model->Estatus_id)),
	array('label'=>'Manage tap_eus', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
