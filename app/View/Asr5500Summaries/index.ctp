<?php 
/*初期設定などあれば*/
?>
<div class="index">
	<h2><?php echo "一覧表示(index)"; ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		    <th><?php echo $this->Paginator->sort('id'); ?></th>
		    <th>登録日</th>
			<!--
		    <th><?php echo $this->Paginator->sort('date'); ?> </th>
		    <th><?php echo $this->Paginator->sort('no1'); ?></th>
		    <th><?php echo $this->Paginator->sort('no2'); ?></th>
		    <th><?php echo $this->Paginator->sort('no3'); ?></th>
		    <th><?php echo $this->Paginator->sort('no4'); ?></th>
		    <th><?php echo $this->Paginator->sort('no5'); ?></th>
		    <th><?php echo $this->Paginator->sort('no6'); ?></th>
		    <th><?php echo $this->Paginator->sort('no7'); ?></th>
			-->
			<th class="actions">
			<?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($asr5500_summaries as $asr5500_summary): ?>
	<?php // debug($asr5500_summary); ?>
	<tr>
		<td><?php echo h($asr5500_summary['Asr5500Summary']['id']); ?>&nbsp;</td>
		<td><?php echo h($asr5500_summary['Asr5500Summary']['date']); ?>&nbsp;</td>
		<!--
		<td><?php echo h($asr5500_summary['Asr5500Summary']['no1']); ?>&nbsp;</td>
		<td><?php echo h($asr5500_summary['Asr5500Summary']['no2']); ?>&nbsp;</td>
		<td><?php echo h($asr5500_summary['Asr5500Summary']['no3']); ?>&nbsp;</td>
		<td><?php echo h($asr5500_summary['Asr5500Summary']['no4']); ?>&nbsp;</td>
		<td><?php echo h($asr5500_summary['Asr5500Summary']['no5']); ?>&nbsp;</td>
		<td><?php echo h($asr5500_summary['Asr5500Summary']['no6']); ?>&nbsp;</td>
		<td><?php echo h($asr5500_summary['Asr5500Summary']['no7']); ?>&nbsp;</td>
		-->
		<td class="actions">
			<?php echo $this->Html->link(__( Configure::read("VIEW_ACTION") ) , array('action' => 'view', $asr5500_summary['Asr5500Summary']['id'])); ?>
			<?php echo $this->Html->link(__( Configure::read("EDIT_ACTION") ), array('action' => 'edit', $asr5500_summary['Asr5500Summary']['id'])); ?>
			<?php echo $this->Form->postLink( __( Configure::read("DELETE_ACTION") ), array('action' => 'delete', $asr5500_summary['Asr5500Summary']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $asr5500_summary['Asr5500Summary']['id']))); ?>
		</td>
	</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	
	</p>
	
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>

</div>

<div class="actions">
	<!--<h3><?php echo __('メニュー'); ?></h3>-->
	<h3><?php echo __( Configure::read("ACTIONS") ); ?></h3>
	<ul>
		<li><?php // echo $this->Html->link(__('新規登録'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__(  Configure::read("ADD_ACTION") ), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Excel出力[未実装]'), array('action' => 'excel2007')); ?></li>
		<!--
		<li><?php echo $this->Html->link(__('PDF出力GETパラメーター[未実装]'), array('action' => 'menu_download_pdf')); ?></li>
		-->
		<li><?php echo $this->Html->link(__('PDF出力[未実装]'), array('action' => 'menu_download_pdf_link')); ?></li>
		<li><?php echo $this->Html->link(__('Mail送信[未実装]'), array('controller'=>'emails' , 'action' => 'send')); ?></li>
	</ul>
</div>
