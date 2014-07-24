<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'LineaInvestigacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LineaInvestigacions', 'url'=>array('index')),
    array('label'=>'Manage LineaInvestigacion', 'url'=>array('admin')),
);
?>

<h1>Create LineaInvestigacion</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
