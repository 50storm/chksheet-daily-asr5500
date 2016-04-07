<?php 
/*  Helper で使うセッテイング */
/* チェックボックス */
$options_chkbox=array('div' => false, 'label'=> false , 'type' => 'checkbox');
$options_name1 = array('label'=>'作成者', 'type'=>'select', 'options'=>$cqap_member, 'selected'=>'五十嵐');
$options_name2 = array('label'=>'確認者', 'type'=>'select', 'options'=>$cqap_member, 'selected'=>'中林');

?>
<h2>[登録画面]</h2>
<div class="form">
<?php echo $this->Form->create('ASR5500Chksheet'); ?>
	<?php echo $this->Form->input('ASR5500Chksheet.date', array('label' => false, 'dateFormat' => 'YMD', 'minYear'=> date('Y')-1,'maxYear' => date('Y')+1, 'monthNames' => false  )); ?>
	<fieldset>
	<!--
	<legend><?php echo __( Configure::read("SHEET_SUMMARY") ); ?></legend>
	-->
	<!--
	<legend><?php echo __('CheckSheet'); ?></legend>
	-->
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
			<!--
				作成者
			-->
			<?php echo $this->Form->input('ASR5500Chksheet.name1', $options_name1); ?>
			</th>
			<th>
			<!--
				確認者
			-->
					<?php echo $this->Form->input('ASR5500Chksheet.name2', $options_name2); ?>
			</th>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no1', $options_chkbox ); ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no1_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no2', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no2_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no3', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no3_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no4', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no4_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no5', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no5_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no6', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no6_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no7', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no7_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no8', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no8_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no9', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no9_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no10', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no10_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no11', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no11_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no12', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no12_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no13', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no13_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no14', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no14_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no15', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no15_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no16', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no16_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no17', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no17_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no18', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no18_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no19', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no19_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no20', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no20_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no21', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no21_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no22', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no22_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no23', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no23_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no24', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no24_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no25', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no25_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no26', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no26_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no27', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no27_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no28', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no28_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no29', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no29_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no30', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no30_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no31', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no31_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no32', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no32_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no33', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no33_dblchk', $options_chkbox ); ?>
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
				<?php echo $this->Form->input('ASR5500Chksheet.no34', $options_chkbox );  ?>
			</td>
			<td> 
				<?php echo $this->Form->input('ASR5500Chksheet.no34_dblchk', $options_chkbox ); ?>
			</td>
		</tr>
		</table>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php  echo __(Configure::read("ACTIONS")); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(Configure::read("INDEX_ACTION"), array('action' => 'index')); ?></li>
	</ul>
</div>
