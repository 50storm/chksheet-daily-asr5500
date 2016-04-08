<?php 
/*  Helper で使うセッテイング */
?>
<h2>[Auth]</h2>
<div class="form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
	<?php echo $this->Form->input('User.username' );  ?>
	<?php echo $this->Form->input('User.password' ); ?>
	<?php echo $this->Form->end(__('login')); ?>
</div>
