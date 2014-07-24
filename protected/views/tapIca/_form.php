<?php
/* @var $this TapIcaController */
/* @var $model TapIca */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tap-ica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'detalle'); ?>
		<?php echo $form->textArea($model,'detalle',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'detalle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Caracteristica_id'); ?>
		<?php echo $form->textField($model,'Caracteristica_id'); ?>
		<?php echo $form->error($model,'Caracteristica_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TAP_id'); ?>
		<?php echo $form->textField($model,'TAP_id'); ?>
		<?php echo $form->error($model,'TAP_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tapIcaCita'); ?>
		<?php echo $form->textField($model,'tapIcaCita'); ?>
		<?php echo $form->error($model,'tapIcaCita'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'versionPrevia'); ?>
		<?php echo $form->textField($model,'versionPrevia'); ?>
		<?php echo $form->error($model,'versionPrevia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->