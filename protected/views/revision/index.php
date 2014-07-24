<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'Revisions',
);

$this->menu=array(
	array('label'=>'Create Revision', 'url'=>array('create')),
	array('label'=>'Manage Revision', 'url'=>array('admin')),
);
?>

<h1>Revisions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
