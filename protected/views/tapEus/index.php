<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'tap_euss',
);

$this->menu=array(
	array('label'=>'Create tap_eus', 'url'=>array('create')),
	array('label'=>'Manage tap_eus', 'url'=>array('admin')),
);
?>

<h1>tap_euss</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
