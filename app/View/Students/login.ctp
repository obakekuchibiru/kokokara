<? $this->Html->css('login.min', null, array('inline' => false)) ?>
<div id="main-container">
	<div class="container"> <!-- logo -->
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 login-title">
				<?php echo $this->html->image('KOKOKARA2.png'); ?>
			</div>
		</div>
	</div>
	<div class="container"> <!-- menu -->
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1 login-menu">
				<a href="#">ハジメカラ</a><br>
				<a href="#modal-p01">ツヅキカラ</a><br>
				<a href="#">kokokaraとは</a>
			</div>
		</div>
	</div>
	<div class="container"> <!-- character walking -->
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 login-char">

			</div>
		</div>
	</div>
</div>
<section class="modal-window" id="modal-p01">
	<div class="modal-inner">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<p>ログイン</p>
				</div>
				<div class="col-xs-9">
					<input tyle="text">
				</div>
			</div>
		</div>
	</div>
	<a href="#!" class="modal-close">&times;</a>
</section>






<!--
<div class="row" style="background:#f3f3f3;padding-top:40px;padding-bottom:40px;">
	<div class="col-sm-5 col-sm-offset-1 login-fb">
		<h4>まだアカウントを持ってない方</h4>
		<div class="row">
			<div class="col-xs-6 col-xs-offset-3 login-fb-btn">
				<?php
				//echo $this->Html->link('', array("controller" => "fbconnect", "action" => "facebook"));
				?>
				<h1><i class="fa fa-facebook-square"></i><br><font style="font-size:14px;">Facebookで簡単ログイン！</font></h1>
			</div>
		</div>
	</div>
	<div class="col-sm-5 already-own">
		<h4>既にアカウントをお持ちの方</h4>
		<?php
		//echo $this->Form->create('Student');
		//echo $this->Form->input('e-mail');
		//echo $this->Form->input('password');
		//echo $this->Form->end('ログインする');
		?>

		<?php
		//echo $this->Html->link('パスワードをお忘れの場合', array('action' => 'passwordForgot'));
		?>
	</div>
</div>


<?php
//echo $this->Html->link('Facebookで簡単入学！', array('action' => 'signup'));
?>
-->
