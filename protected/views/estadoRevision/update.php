<?php
/* @var $this EstadoRevisionController */
/* @var $model EstadoRevision */

$this->breadcrumbs=array(
	'Estado Revisions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EstadoRevision', 'url'=>array('index')),
	array('label'=>'Create EstadoRevision', 'url'=>array('create')),
	array('label'=>'View EstadoRevision', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EstadoRevision', 'url'=>array('admin')),
);
?>

<h1>Update EstadoRevision <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>