<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php echo $form->labelEx($model,'TAP_id'); ?>
        <?php echo $form->textField($model,'TAP_id'); ?>
        <?php echo $form->error($model,'TAP_id'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'Estatus_id'); ?>
        <?php echo $form->textField($model,'Estatus_id'); ?>
        <?php echo $form->error($model,'Estatus_id'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'detalle'); ?>
        <?php echo $form->textField($model,'detalle'); ?>
        <?php echo $form->error($model,'detalle'); ?>
    </div>

	
    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
