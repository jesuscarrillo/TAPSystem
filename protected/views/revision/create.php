<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Revisions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Revisions', 'url'=>array('index')),
    array('label'=>'Manage Revision', 'url'=>array('admin')),
);
?>

<h1>Create Revision</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
