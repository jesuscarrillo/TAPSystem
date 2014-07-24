<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'uio_lons',
);

$this->menu=array(
	array('label'=>'Create uio_lon', 'url'=>array('create')),
	array('label'=>'Manage uio_lon', 'url'=>array('admin')),
);
?>

<h1>uio_lons</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
