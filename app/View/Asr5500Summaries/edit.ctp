<div class="notes form">
<?php echo $this->Form->create('Note'); ?>
	<fieldset>
		<legend><?php echo __('メモ編集画面'); ?></legend>
	<?php
		//echo $this->Form->input('id');
		echo $this->Form->input('date');
		echo $this->Form->input('tag');
		echo $this->Form->input('time');
		echo $this->Form->input('memo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('メモ削除'), array('action' => 'delete', $this->Form->value('Note.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Note.id')))); ?></li>
		<li><?php echo $this->Html->link(__('メモ一覧'), array('action' => 'index')); ?></li>
	</ul>
</div>
