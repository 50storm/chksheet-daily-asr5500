<?php
/*初期設定などあれば*/
/*メッセージを組み立てる*/
$msg['no1'] =   $Asr5500Summary['Asr5500Summary']['no1'] ? "チェック済" : "未チェック";
$msg['no2'] =   $Asr5500Summary['Asr5500Summary']['no2'] ? "チェック済" : "未チェック";
$msg['no3'] =   $Asr5500Summary['Asr5500Summary']['no3'] ? "チェック済" : "未チェック";
$msg['no4'] =   $Asr5500Summary['Asr5500Summary']['no4'] ? "チェック済" : "未チェック";
$msg['no5'] =   $Asr5500Summary['Asr5500Summary']['no5'] ? "チェック済" : "未チェック";
$msg['no6'] =   $Asr5500Summary['Asr5500Summary']['no6'] ? "チェック済" : "未チェック";
$msg['no7'] =   $Asr5500Summary['Asr5500Summary']['no7'] ? "チェック済" : "未チェック";
$msg['no8'] =   $Asr5500Summary['Asr5500Summary']['no8'] ? "チェック済" : "未チェック";

$msg['no1_dblchk'] =   $Asr5500Summary['Asr5500Summary']['no1_dblchk'] ? "チェック済" : "未チェック";
$msg['no2_dblchk'] =   $Asr5500Summary['Asr5500Summary']['no2_dblchk'] ? "チェック済" : "未チェック";
$msg['no3_dblchk'] =   $Asr5500Summary['Asr5500Summary']['no3_dblchk'] ? "チェック済" : "未チェック";
$msg['no4_dblchk'] =   $Asr5500Summary['Asr5500Summary']['no4_dblchk'] ? "チェック済" : "未チェック";
$msg['no5_dblchk'] =   $Asr5500Summary['Asr5500Summary']['no5_dblchk'] ? "チェック済" : "未チェック";
$msg['no6_dblchk'] =   $Asr5500Summary['Asr5500Summary']['no6_dblchk'] ? "チェック済" : "未チェック";
$msg['no7_dblchk'] =   $Asr5500Summary['Asr5500Summary']['no7_dblchk'] ? "チェック済" : "未チェック";
$msg['no8_dblchk'] =   $Asr5500Summary['Asr5500Summary']['no8_dblchk'] ? "チェック済" : "未チェック";

?>
<div class="view">
	<h2><?php echo __('ダブルチェック状況:').h($Asr5500Summary['Asr5500Summary']['date']);?></h2>
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
				<?php echo $msg['no1']  ;?>
			</td>
			<td>
				<?php echo $msg['no1_dblchk']  ;?>
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
				<?php echo $msg['no2']  ;?>
			</td>
			<td>
				<?php echo $msg['no2_dblchk']  ;?>
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
				<?php echo $msg['no3']  ;?>
			</td>
			<td>
				<?php echo $msg['no3_dblchk']  ;?>
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
				<?php echo $msg['no4']  ;?>
			</td>
			<td>
				<?php echo $msg['no4_dblchk']  ;?>
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
				<?php echo $msg['no5']  ;?>
			</td>
			<td>
				<?php echo $msg['no5_dblchk']  ;?>
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
				<?php echo $msg['no6']  ;?>
			</td>
			<td>
				<?php echo $msg['no6_dblchk']  ;?>
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
				<?php echo $msg['no7']  ;?>
			</td>
			<td>
				<?php echo $msg['no7_dblchk']  ;?>
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
				<?php echo $msg['no8']  ;?>
			</td>
			<td>
				<?php echo $msg['no8_dblchk']  ;?>
			</td>
		</tr>

		
		</table>
</div>
<div class="actions">
	<h3><?php  echo __(Configure::read("ACTIONS")); ?></h3>
	
	<ul>
		<li><?php echo $this->Html->link(__(Configure::read("EDIT_ACTION")), array('action' => 'edit', $Asr5500Summary['Asr5500Summary']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Note'), array('action' => 'delete', $Asr5500Summary['Asr5500Summary']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $Asr5500Summary['Asr5500Summary']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__(Configure::read("INDEX_ACTION")), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__(Configure::read("ADD_ACTION")), array('action' => 'add')); ?> </li>
	</ul>
	
</div>
