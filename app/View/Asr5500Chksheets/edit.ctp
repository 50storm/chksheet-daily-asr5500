<?php 
/*  Helper で使うセッテイング */
/* チェックボックス */
//debug($Asr5500Chksheet);

$options_chkbox_unchecked =array('div' => false, 'label'=> false , 'type' => 'checkbox', 'checked' =>false );
$options_chkbox_checked   =array('div' => false, 'label'=> false , 'type' => 'checkbox', 'checked' =>true  );
$options_chkbox;

$options_chkbox['no1'] =   $Asr5500Chksheet['Asr5500Chksheet']['no1'] ? $options_chkbox_checked : $options_chkbox_unchecked ;
$options_chkbox['no2'] =   $Asr5500Chksheet['Asr5500Chksheet']['no2'] ? $options_chkbox_checked : $options_chkbox_unchecked ;
$options_chkbox['no3'] =   $Asr5500Chksheet['Asr5500Chksheet']['no3'] ? $options_chkbox_checked : $options_chkbox_unchecked ;
$options_chkbox['no4'] =   $Asr5500Chksheet['Asr5500Chksheet']['no4'] ? $options_chkbox_checked : $options_chkbox_unchecked ;
$options_chkbox['no5'] =   $Asr5500Chksheet['Asr5500Chksheet']['no5'] ? $options_chkbox_checked : $options_chkbox_unchecked ;
$options_chkbox['no6'] =   $Asr5500Chksheet['Asr5500Chksheet']['no6'] ? $options_chkbox_checked : $options_chkbox_unchecked ;
$options_chkbox['no7'] =   $Asr5500Chksheet['Asr5500Chksheet']['no7'] ? $options_chkbox_checked : $options_chkbox_unchecked ;
$options_chkbox['no8'] =   $Asr5500Chksheet['Asr5500Chksheet']['no8'] ? $options_chkbox_checked : $options_chkbox_unchecked ;


$options_chkbox['no1_dblchk'] =   $Asr5500Chksheet['Asr5500Chksheet']['no1_dblchk'] ? $options_chkbox_checked  : $options_chkbox_unchecked ;
$options_chkbox['no2_dblchk'] =   $Asr5500Chksheet['Asr5500Chksheet']['no2_dblchk'] ? $options_chkbox_checked  : $options_chkbox_unchecked ;
$options_chkbox['no3_dblchk'] =   $Asr5500Chksheet['Asr5500Chksheet']['no3_dblchk'] ? $options_chkbox_checked  : $options_chkbox_unchecked ;
$options_chkbox['no4_dblchk'] =   $Asr5500Chksheet['Asr5500Chksheet']['no4_dblchk'] ? $options_chkbox_checked  : $options_chkbox_unchecked ;
$options_chkbox['no5_dblchk'] =   $Asr5500Chksheet['Asr5500Chksheet']['no5_dblchk'] ? $options_chkbox_checked  : $options_chkbox_unchecked ;
$options_chkbox['no6_dblchk'] =   $Asr5500Chksheet['Asr5500Chksheet']['no6_dblchk'] ? $options_chkbox_checked  : $options_chkbox_unchecked ;
$options_chkbox['no7_dblchk'] =   $Asr5500Chksheet['Asr5500Chksheet']['no7_dblchk'] ? $options_chkbox_checked  : $options_chkbox_unchecked ;
$options_chkbox['no8_dblchk'] =   $Asr5500Chksheet['Asr5500Chksheet']['no8_dblchk'] ? $options_chkbox_checked  : $options_chkbox_unchecked ;

//debug($options_chkbox);

?>
<div class="notes form">
<?php echo $this->Form->create('ASR5500Chksheet'); ?>
	<fieldset>
		<legend><?php echo __('Edit:').h($Asr5500Chksheet['Asr5500Chksheet']['date']); ?></legend>
		<?php // echo $this->Form->input('ASR5500Chksheet.date', array('label' => '日付：', 'dateFormat' => 'YMD', 'minYear'=> date('Y')-1,'maxYear' => date('Y')+1, 'monthNames' => false  )); ?>
		<?php // echo __('ダブルチェック:').h($Asr5500Chksheet['Asr5500Chksheet']['date']);?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no1', $options_chkbox['no1'] ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no1_dblchk', $options_chkbox['no1_dblchk'] ); ?>
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
				<?php // echo $this->Form->input('ASR5500Chksheet.no2', array('label'=> '【手動】コロンを付与したか？[Summary]CQAP:ASR5500', 'type' => 'checkbox'));  ?>
				<?php echo $this->Form->input('ASR5500Chksheet.no2', $options_chkbox['no2'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no2_dblchk', $options_chkbox['no2_dblchk']  ); ?>
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
				<?php // echo $this->Form->input('ASR5500Chksheet.no3', array('label'=> 'Inspection QTYの数量は正しいか？', 'type' => 'checkbox'));  ?>
				<?php echo $this->Form->input('ASR5500Chksheet.no3', $options_chkbox['no3'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no3_dblchk', $options_chkbox['no3_dblchk']  ); ?>
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
				<?php //echo $this->Form->input('ASR5500Chksheet.no4', array('label'=> '【手動】HWWNがあるときに、Defect QTYの数量から、HWWNを差し引いたか？', 'type' => 'checkbox'));  ?>
				<?php echo $this->Form->input('ASR5500Chksheet.no4', $options_chkbox['no4'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no4_dblchk', $options_chkbox['no4_dblchk']  ); ?>
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
				<?php // echo $this->Form->input('ASR5500Chksheet.no5', array('label'=> 'Defect QTYの数量は正しいか？', 'type' => 'checkbox'));  ?>
				<?php echo $this->Form->input('ASR5500Chksheet.no5', $options_chkbox['no5'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no5_dblchk', $options_chkbox['no5_dblchk']  ); ?>
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
				<?php // echo $this->Form->input('ASR5500Chksheet.no6', array('label'=> 'FYI　QTYの数量は正しいか？', 'type' => 'checkbox'));  ?>
				<?php echo $this->Form->input('ASR5500Chksheet.no6', $options_chkbox['no6'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no6_dblchk', $options_chkbox['no6_dblchk']  ); ?>
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
				<?php // echo $this->Form->input('ASR5500Chksheet.no7', array('label'=> '検査した期間のFrom日付とTo日付は正しいか？', 'type' => 'checkbox'));  ?>
				<?php echo $this->Form->input('ASR5500Chksheet.no7', $options_chkbox['no7'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no7_dblchk', $options_chkbox['no7_dblchk']  ); ?>
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
				<?php // echo $this->Form->input('ASR5500Chksheet.no8', array('label'=> '機密情報のお願い文は挿入できるか？&nbsp;This mail may contain confidential', 'type' => 'checkbox'));  ?>
				<?php echo $this->Form->input('ASR5500Chksheet.no8', $options_chkbox['no8'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no8_dblchk', $options_chkbox['no8_dblchk']  ); ?>
			</td>
		</tr>
		</table>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __(Configure::read("ACTIONS")); ?></h3>
	<ul>
	<li><?php echo $this->Html->link(__(Configure::read("INDEX_ACTION")), array('action' => 'index')); ?></li>
	<li><?php echo $this->Form->postLink(__(Configure::read("DELETE_ACTION")), array('action' => 'delete', $Asr5500Chksheet['Asr5500Chksheet']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $Asr5500Chksheet['Asr5500Chksheet']['id']))); ?></li>
	</ul>
</div>
