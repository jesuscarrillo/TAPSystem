<?php
/* @var $this PasantiaController */
/* @var $model Pasantia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'notaExterna'); ?>
		<?php echo $form->textField($model,'notaExterna'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TAP_id'); ?>
		<?php echo $form->textField($model,'TAP_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TutorExterno_Id'); ?>
		<?php echo $form->textField($model,'TutorExterno_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Direccion_id'); ?>
		<?php echo $form->textField($model,'Direccion_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->