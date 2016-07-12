<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Student', Array('url'=>'/students/login')); ?>
<? $this->Html->css('login.min', null, array('inline' => false)) ?>
<script type="text/javascript">
var h = $(window).height();
$('#main-container').css("height", h + "px");

$(window).resize(function(){
var h = $(window).height();
$('#main-container').css("height",h + "px");
});
</script>

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
				<a href="signup">ハジメカラ</a><br>
				<?php echo $this->Html->link('ツヅキカラ', array("controller" => "fbconnect", "action" => "facebook")); ?>
				<a href="#">kokokaraとは</a>
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

<?php echo $this->Form->input('Student.email'); ?>
<?php echo $this->Form->input('Student.password'); ?>
<?php echo $this->Form->end(__('ログイン')); ?>
