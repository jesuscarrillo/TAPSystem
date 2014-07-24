<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'don_tnos',
);

$this->menu=array(
	array('label'=>'Create don_tno', 'url'=>array('create')),
	array('label'=>'Manage don_tno', 'url'=>array('admin')),
);
?>

<h1>don_tnos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
