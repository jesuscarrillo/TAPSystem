<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'tap_euss'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List tap_euss', 'url'=>array('index')),
    array('label'=>'Manage tap_eus', 'url'=>array('admin')),
);
?>

<h1>Create tap_eus</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
