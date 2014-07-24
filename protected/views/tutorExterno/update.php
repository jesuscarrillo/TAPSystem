<?php
/* @var $this TutorExternoController */
/* @var $model TutorExterno */

$this->breadcrumbs=array(
	'Tutor Externos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TutorExterno', 'url'=>array('index')),
	array('label'=>'Create TutorExterno', 'url'=>array('create')),
	array('label'=>'View TutorExterno', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TutorExterno', 'url'=>array('admin')),
);
?>

<h1>Update TutorExterno <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>