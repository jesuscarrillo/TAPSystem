<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Revisions'=>array('index'),
	'View'=>array('view', 'tap_ica_id'=>$model->tap_ica_id, 'Evaluador_Usuario_id'=>$model->Evaluador_Usuario_id, 'Evaluador_TAP_id'=>$model->Evaluador_TAP_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Revision', 'url'=>array('index')),
	array('label'=>'Create Revision', 'url'=>array('create')),
	array('label'=>'View Revision', 'url'=>array('view', 'tap_ica_id'=>$model->tap_ica_id, 'Evaluador_Usuario_id'=>$model->Evaluador_Usuario_id, 'Evaluador_TAP_id'=>$model->Evaluador_TAP_id)),
	array('label'=>'Manage Revision', 'url'=>array('admin')),
); 
?>

<h1>Update Client</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
