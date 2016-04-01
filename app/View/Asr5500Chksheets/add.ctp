<?php 
/*  Helper で使うセッテイング */
/* チェックボックス */
$options_chkbox=array('div' => false, 'label'=> false , 'type' => 'checkbox');
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
				作成者
			</th>
			<th>
				確認者
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
				
			</td>
			<td>
				【※注意】同じSO、同じPID、同じ不良は、ひとつのメールとして、S/Nをまとめているか？
				
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no10', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no10_dblchk', $options_chkbox ); ?>
			</td>
		</tr>
		</table>
	</fieldset>
	<!--
	<fieldset>
	<legend><?php echo __('ASR5500_D'); ?></legend>
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
				メールの個数
			</td>
			<td>
				【※手動】
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no9', $options_chkbox );  ?>
			</td>
			<td>
				<?php echo $this->Form->input('ASR5500Chksheet.no9_dblchk', $options_chkbox ); ?>
			</td>
		</tr>
	</table>
	</fieldset>
	-->
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('メニュー'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('一覧'), array('action' => 'index')); ?></li>
	</ul>
</div>
