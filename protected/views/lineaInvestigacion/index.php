<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'LineaInvestigacions',
);

$this->menu=array(
	array('label'=>'Create LineaInvestigacion', 'url'=>array('create')),
	array('label'=>'Manage LineaInvestigacion', 'url'=>array('admin')),
);
?>

<h1>LineaInvestigacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
