<?php 
/*  Helper で使うセッテイング */
/* チェックボックス */
$options_chkbox=array('div' => false, 'label'=> false , 'type' => 'checkbox');
?>
<h2>[登録画面]</h2>
<div class="form">
<?php echo $this->Form->create('ASR5500Summary'); ?>
	<fieldset>
	<legend><?php echo __('チェックリスト'); ?></legend>
		<?php echo $this->Form->input('ASR5500Summary.date', array('label' => '日付：', 'dateFormat' => 'YMD', 'minYear'=> date('Y')-1,'maxYear' => date('Y')+1, 'monthNames' => false  )); ?>
		<table>
		<tr>
			<th>
				項目
			</th>
			<th>
				確認内容
			</th>
			<th>
				作成者
			</th>
			<th>
				確認者
			</th>
		</tr>
		<tr>
			<td>
				タイトル
			</td>
			<td>
				日付は当日になっているか？
			</td>
			<td>
				<?php //echo $this->Form->input('ASR5500Summary.no1', array('label'=> '日付は当日になっているか？' , 'type' => 'checkbox')); ?>
				<?php echo $this->Form->input('ASR5500Summary.no1', $options_chkbox ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Summary.no1_dblchk', $options_chkbox ); ?>
			</td>
		</tr>
	
		<tr>
			<td>
				本文
			</td>
			<td>
				【手動】コロンを付与したか？[Summary]CQAP:ASR5500
			</td>
			<td>
				<?php // echo $this->Form->input('ASR5500Summary.no2', array('label'=> '【手動】コロンを付与したか？[Summary]CQAP:ASR5500', 'type' => 'checkbox'));  ?>
				<?php echo $this->Form->input('ASR5500Summary.no2', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Summary.no2_dblchk', $options_chkbox ); ?>
			</td>
		</tr>
	
		<tr>
			<td>
				本文
			</td>
			<td>
				Inspection QTYの数量は正しいか？
			</td>
			<td>
				<?php // echo $this->Form->input('ASR5500Summary.no3', array('label'=> 'Inspection QTYの数量は正しいか？', 'type' => 'checkbox'));  ?>
				<?php echo $this->Form->input('ASR5500Summary.no3', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Summary.no3_dblchk', $options_chkbox ); ?>
			</td>
		</tr>
		<tr>
			<td>
				本文
			</td>
			<td>
				【手動】HWWNがあるときに、Defect QTYの数量から、HWWNを差し引いたか？
			</td>
			<td>
				<?php //echo $this->Form->input('ASR5500Summary.no4', array('label'=> '【手動】HWWNがあるときに、Defect QTYの数量から、HWWNを差し引いたか？', 'type' => 'checkbox'));  ?>
				<?php echo $this->Form->input('ASR5500Summary.no4', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Summary.no4_dblchk', $options_chkbox ); ?>
			</td>
		</tr>
		<tr>
			<td>
				本文
			</td>
			<td>
				Defect QTYの数量は正しいか？
			</td>
			<td>
				<?php // echo $this->Form->input('ASR5500Summary.no5', array('label'=> 'Defect QTYの数量は正しいか？', 'type' => 'checkbox'));  ?>
				<?php echo $this->Form->input('ASR5500Summary.no5', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Summary.no5_dblchk', $options_chkbox ); ?>
			</td>
		</tr>
		<tr>
			<td>
				本文
			</td>
			<td>
				FYI　QTYの数量は正しいか？
			</td>
			<td>
				<?php // echo $this->Form->input('ASR5500Summary.no6', array('label'=> 'FYI　QTYの数量は正しいか？', 'type' => 'checkbox'));  ?>
				<?php echo $this->Form->input('ASR5500Summary.no6', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Summary.no6_dblchk', $options_chkbox ); ?>
			</td>
		</tr>
		<tr>
			<td>
				本文
			</td>
			<td>
				検査した期間のFrom日付とTo日付は正しいか？
			</td>
			<td>
				<?php // echo $this->Form->input('ASR5500Summary.no7', array('label'=> '検査した期間のFrom日付とTo日付は正しいか？', 'type' => 'checkbox'));  ?>
				<?php echo $this->Form->input('ASR5500Summary.no7', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Summary.no7_dblchk', $options_chkbox ); ?>
			</td>
		</tr>
		<tr>
			<td>
				フッター
			</td>
			<td>
				機密情報のお願い文は挿入できるか？&nbsp;This mail may contain confidential
			</td>
			<td>
				<?php // echo $this->Form->input('ASR5500Summary.no8', array('label'=> '機密情報のお願い文は挿入できるか？&nbsp;This mail may contain confidential', 'type' => 'checkbox'));  ?>
				<?php echo $this->Form->input('ASR5500Summary.no8', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Summary.no8_dblchk', $options_chkbox ); ?>
			</td>
		</tr>
		</table>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('一覧'), array('action' => 'index')); ?></li>
	</ul>
</div>
