<?php 
/*  Helper で使うセッテイング */
/* チェックボックス */
//debug($Asr5500Chksheet);
$options_name1 = array('label'=>'作成者', 'type'=>'select', 'options'=>$cqap_member, 'selected'=>$Asr5500Chksheet['Asr5500Chksheet']['name1']);
$options_name2 = array('label'=>'確認者', 'type'=>'select', 'options'=>$cqap_member, 'selected'=>$Asr5500Chksheet['Asr5500Chksheet']['name2']);


$options_chkbox_unchecked =array('div' => false, 'label'=> false , 'type' => 'checkbox', 'checked' =>false );
$options_chkbox_checked   =array('div' => false, 'label'=> false , 'type' => 'checkbox', 'checked' =>true  );
$options_chkbox;
//TODO:共通処理化
foreach($Asr5500Chksheet['Asr5500Chksheet'] as $key => $value ){
	if( $key === "id" || $key === "date"){
		//skip
	}else{
		$options_chkbox[$key ] = $value ? $options_chkbox_checked : $options_chkbox_unchecked ;
	}
}

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
				シート
			</th>
			
			<th>
				項目
			</th>
			<th>
				確認内容
			</th>
			<th>
				<?php echo $this->Form->input('ASR5500Chksheet.name1', $options_name1); ?>
			</th>
			<th>
				<?php echo $this->Form->input('ASR5500Chksheet.name2', $options_name2); ?>	
			</th>>
		</tr>
		<tr>
		
			<td rowspan="8" >
				<?php echo __( Configure::read("SHEET_SUM") ); ?>
			</td>
		
			<td>
				<?php echo __( Configure::read("TITLE") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO1_CONTENT") ); ?>
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
				<?php echo __( Configure::read("CONTENT") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO2_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no2', $options_chkbox['no2'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no2_dblchk', $options_chkbox['no2_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("CONTENT") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO3_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no3', $options_chkbox['no3'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no3_dblchk', $options_chkbox['no3_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("CONTENT") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO4_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no4', $options_chkbox['no4'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no4_dblchk', $options_chkbox['no4_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("CONTENT") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO5_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no5', $options_chkbox['no5'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no5_dblchk', $options_chkbox['no5_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("CONTENT") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO6_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no6', $options_chkbox['no6'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no6_dblchk', $options_chkbox['no6_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("CONTENT") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO7_CONTENT") ); ?>				
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no7', $options_chkbox['no7'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no7_dblchk', $options_chkbox['no7_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("FOOTER") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO8_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no8', $options_chkbox['no8'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no8_dblchk', $options_chkbox['no8_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td rowspan="12">
				<?php echo __( Configure::read("SHEET_D") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("MAIL_NUM") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO9_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no9', $options_chkbox['no9'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no9_dblchk', $options_chkbox['no9_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("TITLE") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO10_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no10', $options_chkbox['no10'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no10_dblchk', $options_chkbox['no10_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("TITLE") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO11_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no11', $options_chkbox['no11'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no11_dblchk', $options_chkbox['no11_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("TITLE") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO12_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no12', $options_chkbox['no12'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no12_dblchk', $options_chkbox['no12_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("HEADER") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO13_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no13', $options_chkbox['no13'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no13_dblchk', $options_chkbox['no13_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("CONTENT_DFT") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO14_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no14', $options_chkbox['no14'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no14_dblchk', $options_chkbox['no14_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("CONTENT_DFT") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO15_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no15', $options_chkbox['no15'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no15_dblchk', $options_chkbox['no15_dblchk'] ); ?>
			</td>
		</tr>		
		<tr>
			<td>
				<?php echo __( Configure::read("CONTENT_DFT") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO16_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no16', $options_chkbox['no16'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no16_dblchk', $options_chkbox['no16_dblchk'] ); ?>
			</td>
		</tr>		
		<tr>
			<td>
				<?php echo __( Configure::read("FOOTER") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO17_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no17', $options_chkbox['no17'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no17_dblchk', $options_chkbox['no17_dblchk'] ); ?>
			</td>
		</tr>		
		<tr>
			<td>
				<?php echo __( Configure::read("ATMNT") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO18_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no18', $options_chkbox['no18'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no18_dblchk', $options_chkbox['no18_dblchk'] ); ?>
			</td>
		</tr>		
		<tr>
			<td>
				<?php echo __( Configure::read("ATMNT") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO19_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no19', $options_chkbox['no19'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no19_dblchk', $options_chkbox['no19_dblchk'] ); ?>
			</td>
		</tr>		
		<tr>
			<td>
				<?php echo __( Configure::read("ATMNT") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO20_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no20', $options_chkbox['no20'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no20_dblchk', $options_chkbox['no20_dblchk'] ); ?>
			</td>
		</tr>		
		<tr>
			<td rowspan="10">
				<?php echo __( Configure::read("SHEET_F") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("MAIL_NUM") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO21_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no21', $options_chkbox['no21'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no21_dblchk', $options_chkbox['no21_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("TITLE") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO22_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no22', $options_chkbox['no22'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no22_dblchk', $options_chkbox['no22_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("TITLE") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO23_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no23', $options_chkbox['no23'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no23_dblchk', $options_chkbox['no23_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("TITLE") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO24_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no24', $options_chkbox['no24'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no24_dblchk', $options_chkbox['no24_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("HEADER") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO25_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no25', $options_chkbox['no25'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no25_dblchk', $options_chkbox['no25_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("CONTENT_DFT") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO26_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no26', $options_chkbox['no26'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no26_dblchk', $options_chkbox['no26_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("CONTENT_DFT") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO27_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no27', $options_chkbox['no27'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no27_dblchk', $options_chkbox['no27_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("FOOTER") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO28_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no28', $options_chkbox['no28'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no28_dblchk', $options_chkbox['no28_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("ATMNT") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO29_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no29', $options_chkbox['no29'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no29_dblchk', $options_chkbox['no29_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("ATMNT") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO30_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no30', $options_chkbox['no30'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no30_dblchk', $options_chkbox['no30_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td rowspan="4">
				<?php echo __( Configure::read("SHEET_H") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("MAIL_NUM") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO31_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no31', $options_chkbox['no31'] );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no31_dblchk', $options_chkbox['no31_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("CONTENT_DFT") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO32_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no32', $options_chkbox['no32'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no32_dblchk', $options_chkbox['no32_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("FOOTER") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO33_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no33', $options_chkbox['no33'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no33_dblchk', $options_chkbox['no33_dblchk'] ); ?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo __( Configure::read("TITLE") ); ?>
			</td>
			<td>
				<?php echo __( Configure::read("NO34_CONTENT") ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no34', $options_chkbox['no34'] );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no34_dblchk', $options_chkbox['no34_dblchk'] ); ?>
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
