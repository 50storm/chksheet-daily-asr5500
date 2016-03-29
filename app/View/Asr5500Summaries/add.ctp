<h2>[登録画面]</h2>
<div class="notes form">
<?php echo $this->Form->create('ASR5500Summary'); ?>
	<fieldset>
		<legend><?php echo __('登録します。'); ?></legend>
	<?php
	/*
		$opts = array(
			'1' => 'OK',
			'0' => 'Error',
			'' =>  ''
		);
	*/
		echo $this->Form->input('date',array('dateFormat' => 'YMD','monthNames' => false
											));
		/*
		echo $this->Form->input('日付は当日になっているか？', array(
												'type' => 'select', 'options' => $opts	)
								);
		*/
		echo $this->Form->input('ASR5500Summary.no1', array('label'=> '日付は当日になっているか？' , 'type' => 'checkbox'));
		echo $this->Form->input('ASR5500Summary.no2', array('label'=> '【手動】コロンを付与したか？[Summary]CQAP:ASR5500', 'type' => 'checkbox'));
		echo $this->Form->input('ASR5500Summary.no3', array('label'=> 'Inspection QTYの数量は正しいか？', 'type' => 'checkbox'));
		echo $this->Form->input('ASR5500Summary.no4', array('label'=> '【手動】HWWNがあるときに、Defect QTYの数量から、HWWNを差し引いたか？', 'type' => 'checkbox'));
		echo $this->Form->input('ASR5500Summary.no5', array('label'=> 'Defect QTYの数量は正しいか？', 'type' => 'checkbox'));
		echo $this->Form->input('ASR5500Summary.no6', array('label'=> 'FYI　QTYの数量は正しいか？', 'type' => 'checkbox'));
		echo $this->Form->input('ASR5500Summary.no7', array('label'=> '検査した期間のFrom日付とTo日付は正しいか？', 'type' => 'checkbox'));
		echo $this->Form->input('ASR5500Summary.no8', array('label'=> '機密情報のお願い文は挿入できるか？&nbsp;This mail may contain confidential', 'type' => 'checkbox'));

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('一覧'), array('action' => 'index')); ?></li>
	</ul>
</div>
