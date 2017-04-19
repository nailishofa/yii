<?php
/* @var $this AdminController */
/* @var $data Admin */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id admin')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idadmin), array('view', 'id'=>$data->idadmin)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date created')); ?>:</b>
	<?php echo CHtml::encode($data->datecreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last update')); ?>:</b>
	<?php echo CHtml::encode($data->lastupdate); ?>
	<br />


</div>