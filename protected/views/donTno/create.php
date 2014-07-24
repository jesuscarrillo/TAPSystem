<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'don_tnos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List don_tnos', 'url'=>array('index')),
    array('label'=>'Manage don_tno', 'url'=>array('admin')),
);
?>

<h1>Create don_tno</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
