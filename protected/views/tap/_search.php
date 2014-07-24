<?php
/* @var $this TapController */
/* @var $model TAP */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LineaInvestigacion_id'); ?>
		<?php echo $form->textField($model,'LineaInvestigacion_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Area_id'); ?>
		<?php echo $form->textField($model,'Area_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'publica'); ?>
		<?php echo $form->textField($model,'publica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaCreacion'); ?>
		<?php echo $form->textField($model,'fechaCreacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lapsoInicio'); ?>
		<?php echo $form->textField($model,'lapsoInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaInicio'); ?>
		<?php echo $form->textField($model,'fechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaFin'); ?>
		<?php echo $form->textField($model,'fechaFin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lapsoFin'); ?>
		<?php echo $form->textField($model,'lapsoFin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->