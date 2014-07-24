<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<?php
$this->breadcrumbs=array(
	'tap_euss'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List tap_euss', 'url'=>array('index')),
	array('label'=>'Create tap_eus', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tapEusgrid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage tap_euss</h1>

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
    'id'=>'tapEusgrid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'TAP_id',
        'Estatus_id',
        'detalle',
        'fecha',
        array(
            'class'=>'CButtonColumn',
            'template'=>'{view}{update}{delete}',
            'buttons'=>array
            (
                'view' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("tapEus/view/", 
                                            array("TAP_id"=>$data->TAP_id, "Estatus_id"=>$data->Estatus_id
											))',
                ),
                'update' => array
                (
                    'url'=>
                    'Yii::app()->createUrl("tapEus/update/", 
                                            array("TAP_id"=>$data->TAP_id, "Estatus_id"=>$data->Estatus_id
											))',
                ),
                'delete'=> array
                (
                    'url'=>
                    'Yii::app()->createUrl("tapEus/delete/", 
                                            array("TAP_id"=>$data->TAP_id, "Estatus_id"=>$data->Estatus_id
											))',
                ),
            ),
        ),
    ),
)); ?>
