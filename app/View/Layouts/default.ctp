<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
//$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
//
$cakeDescription = __d('cake_dev', 'DailyReport ASR5500');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())


?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		//Add Igarashi
		//<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
		//<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
		//echo $this->Html->script("http://code.jquery.com/ui/1.9.2/jquery-ui.js");
		//エラーになった。。。から一時削除
		//echo $this->Html->css( '//code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css');
		
	?>
</head>
<body>
	<div id="container">
		<div id="header">
		<!--
			CSS:app\webroot\css\cake.generic.css
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
			<p><pre>CSS:app\webroot\css\cake.generic.css</pre></p>
		-->
			
			<h1><?php echo $this->Html->link('AWS Quality Center', 'http://pdidbserver' ,array('target'=>'_blank')); ?></h1>
			<h1><?php echo $this->Html->link('UIサンプル作成中', 'http://www.dev.igarashi.com/dev/ui_sample/datechecker/ui_sample.html' ,array('target'=>'_blank')); ?></h1>
			<h1><?php echo $this->Html->link('メモアプリ作成中', 'http://www.dev.igarashi.com:8080/memo/' ,array('target'=>'_blank')); ?></h1>
			<h1><?php echo $this->Html->link('リンクごっタ煮', 'http://www.dev.igarashi.com/dev/links.html' ,array('target'=>'_blank')); ?></h1>
			
		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
