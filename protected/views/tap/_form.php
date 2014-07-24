<?php
/* @var $this TapController */
/* @var $model TAP */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tap-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'LineaInvestigacion_id'); ?>
		<?php echo $form->textField($model,'LineaInvestigacion_id'); ?>
		<?php echo $form->error($model,'LineaInvestigacion_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Area_id'); ?>
		<?php echo $form->textField($model,'Area_id'); ?>
		<?php echo $form->error($model,'Area_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'publica'); ?>
		<?php echo $form->textField($model,'publica'); ?>
		<?php echo $form->error($model,'publica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaCreacion'); ?>
		<?php echo $form->textField($model,'fechaCreacion'); ?>
		<?php echo $form->error($model,'fechaCreacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lapsoInicio'); ?>
		<?php echo $form->textField($model,'lapsoInicio'); ?>
		<?php echo $form->error($model,'lapsoInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaInicio'); ?>
		<?php echo $form->textField($model,'fechaInicio'); ?>
		<?php echo $form->error($model,'fechaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaFin'); ?>
		<?php echo $form->textField($model,'fechaFin'); ?>
		<?php echo $form->error($model,'fechaFin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lapsoFin'); ?>
		<?php echo $form->textField($model,'lapsoFin'); ?>
		<?php echo $form->error($model,'lapsoFin'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->