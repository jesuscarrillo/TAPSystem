<?php
/* @var $this DireccionController */
/* @var $model Direccion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'direccion-form',
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
		<?php echo $form->textField($model,'detalle',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'detalle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otroContacto'); ?>
		<?php echo $form->textField($model,'otroContacto',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'otroContacto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ciudad_id'); ?>
		<?php echo $form->textField($model,'Ciudad_id'); ?>
		<?php echo $form->error($model,'Ciudad_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Empresa_id'); ?>
		<?php echo $form->textField($model,'Empresa_id'); ?>
		<?php echo $form->error($model,'Empresa_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->