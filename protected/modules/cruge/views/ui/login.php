<div style="width: 30%; float: left">
<h1><?php echo CrugeTranslator::t('logon',"Login"); ?></h1>
<?php if(Yii::app()->user->hasFlash('loginflash')): ?>
<div class="flash-error">
	<?php echo Yii::app()->user->getFlash('loginflash');
        Yii::app()->user->setFlash("error", "Your message...");
        ?>
</div>
<?php else: ?>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'logon-form',
	'enableClientValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
            
		<?php 
                echo CHtml::button('Iniciar Sesión', array('type'=>'submit','class'=>'btn btn-primary ui-button ui-widget ui-state-default ui-corner-all'));
                //Yii::app()->user->ui->tbutton(CrugeTranslator::t('logon', "Login")); ?>
		<?php //echo Yii::app()->user->ui->passwordRecoveryLink; ?>
		<?php
			//if(Yii::app()->user->um->getDefaultSystem()->getn('registrationonlogin')===1)
			//	echo Yii::app()->user->ui->registrationLink;
		?>
        </div>

	<?php
		//	si el componente CrugeConnector existe lo usa:
		//
		if(Yii::app()->getComponent('crugeconnector') != null){
		if(Yii::app()->crugeconnector->hasEnabledClients){ 
	?>
	<div class='crugeconnector'>
		<span><?php echo CrugeTranslator::t('logon', 'You also can login with');?>:</span>
		<ul>
		<?php 
			$cc = Yii::app()->crugeconnector;
			foreach($cc->enabledClients as $key=>$config){
				$image = CHtml::image($cc->getClientDefaultImage($key));
				echo "<li>".CHtml::link($image,
					$cc->getClientLoginUrl($key))."</li>";
			}
		?>
		</ul>
	</div>
	<?php }} ?>
	

<?php $this->endWidget(); ?>
</div>
<?php endif; ?>
</div>
<div style="width: 38%; float: left; text-align: center ">
<img src="<?php echo Yii::app()->baseUrl;?>/themes/abound/img/logo-tap.png">       
<h2>Me Interesa:</h2>
<br>
<div class="label label-success" style="width: 40%; float: left; text-align: center">
    <a href="#" style="color: #ffffff"><h4>Tesis</h4></a>      
</div>
<div class="label label-info" style="width: 40%; float: right; text-align: center">
    <a href="#" style="color: #ffffff"><h4>Pasantías</h4></a>
</div>

</div>