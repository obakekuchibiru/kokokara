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

$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="kokokara Group" content="//kokokara-group.com">
    <meta name="description" content="海外インターンシッププログラムを紹介します。">
    <meta name="format-detection" content="telephone=no">
    <link rel="canonical" href="http://kokokara-group.com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="twitter:card" content="summary">
    <meta property="article:publisher" content="https://www.facebook.com/kokokaragroup/">
    <meta property="og:description" content="">
    <meta property="og:title" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="kokokara University">
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->Html->css("kai.css");
		echo $this->Html->script("kai.js");

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		echo $scripts_for_layout;
	?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Jquery 導入 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<?php
	echo $this->Html->script('bootstrap.min.js');
	echo $this->Html->script('jquery.bgswitcher.js');
	echo $this->Html->css('bootstrap.min.css');
	echo $this->Html->css('font-awesome.min.css');

	echo $this->Html->css('style.css')
	?>
</head>
<body>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-54273956-2', 'auto');
	  ga('send', 'pageview');
	</script>
	<div id="container">
		<!-- header -->
		<?php 
			$current = Router::url();
			if($current == '/kokokara/'){
				echo $this->element('header/header-top');
			}else{
				echo $this->element('header/header');
			}
		?>
	    <div class="container"></div> <!-- なぞのバグ回避用 -->
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>

		<!-- footer -->
	    <?
	     echo $this->element('footer/footer');
	    ?>
	</div>
	<?php echo $this->element('sql_dump'); ?>
	<?php debug($events); ?>
	
</body>
</html>
