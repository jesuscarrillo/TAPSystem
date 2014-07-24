<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'don_tnos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List don_tnos', 'url'=>array('index')),
	array('label'=>'Create don_tno', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('donTnogrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage don_tnos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
$this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'donTnogrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'TutorExterno_id',
        'Direccion_id',
        'comentario',
        'fecha',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("donTno/view/", 
                                            array("TutorExterno_id"=>$data->TutorExterno_id, "Direccion_id"=>$data->Direccion_id
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("donTno/update/", 
                                            array("TutorExterno_id"=>$data->TutorExterno_id, "Direccion_id"=>$data->Direccion_id
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("donTno/delete/", 
                                            array("TutorExterno_id"=>$data->TutorExterno_id, "Direccion_id"=>$data->Direccion_id
											))',
                ),
            ),
        ),
    ),
)); ?>
