<?php
/* @var $this LapsoAcademicoController */
/* @var $model LapsoAcademico */

$this->breadcrumbs=array(
	'Lapso Academicos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LapsoAcademico', 'url'=>array('index')),
	array('label'=>'Create LapsoAcademico', 'url'=>array('create')),
	array('label'=>'View LapsoAcademico', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LapsoAcademico', 'url'=>array('admin')),
);
?>

<h1>Update LapsoAcademico <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>