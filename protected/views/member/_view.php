<?php
/* @var $this MemberController */
/* @var $data Member */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id member')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idmember), array('view', 'id'=>$data->idmember)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggallahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no telp')); ?>:</b>
	<?php echo CHtml::encode($data->notelp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datecreated')); ?>:</b>
	<?php echo CHtml::encode($data->datecreated); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lastupdate')); ?>:</b>
	<?php echo CHtml::encode($data->lastupdate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('admin_idadmin')); ?>:</b>
	<?php echo CHtml::encode($data->admin_idadmin); ?>
	<br />

	*/ ?>

</div>