<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->
<div class="wide form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); ?>

	<div class="row">
		<?php echo $form->label($model,'Usuario_id'); ?>
		<?php echo $form->textField($model,'Usuario_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->label($model,'Area_id'); ?>
		<?php echo $form->textField($model,'Area_id'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
