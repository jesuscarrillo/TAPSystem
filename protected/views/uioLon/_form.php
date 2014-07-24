<!--Generated using Gimme CRUD freeware from www.HandsOnCoding.net -->

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'client-account-create-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>
	
    <div class="row">
        <?php echo $form->labelEx($model,'Usuario_id'); ?>
        <?php echo $form->textField($model,'Usuario_id'); ?>
        <?php echo $form->error($model,'Usuario_id'); ?>
    </div>
	
	
    <div class="row">
        <?php echo $form->labelEx($model,'Area_id'); ?>
        <?php echo $form->textField($model,'Area_id'); ?>
        <?php echo $form->error($model,'Area_id'); ?>
    </div>
	

	
    <div class="row buttons">
        <?php echo CHtml::submitButton('Submit'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form --> 
