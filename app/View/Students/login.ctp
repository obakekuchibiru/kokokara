
<?php echo $this->Form->create('Student', Array('url'=>'/students/login')); ?>
<? $this->Html->css('login.min', null, array('inline' => false)) ?>
<? $this->Html->css('remodal', null, array('inline' => false)) ?>
<? $this->Html->css('remodal-default-theme', null, array('inline' => false)) ?>

<? echo $this->Html->script('remodal.js');?>

<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
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
			<div class="col-md-12 col-sm-12">
				<h3>まだ見ぬ世界へ！</h3>
				<h1>kokokara University</h1>
				<hr>
				<a class="smoothScroll btn btn-danger" data-remodal-target="modal" >登校</a>
				<a href="#contact" class="smoothScroll btn btn-default">当校について</a>
				<?php echo $this->Session->flash('auth'); ?>
			</div>
		</div>
	</div>
</section>
<?php echo $this->Form->input('Student.email'); ?>
<?php echo $this->Form->input('Student.password'); ?>
<?php echo $this->Form->end(__('ログイン')); ?>

<div class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking:false">
<button data-remodal-action="close" class="remodal-close"></button>
<h1>こんにちは、今日は何をしますか？</h1>
<p><i>The only impossible journey is the one you never begin. <br>ーAnthony Robbins</i></p>
  <div class="row" style="text-align:left;">
		<div class="col-xs-12">
			<?php echo $this->Form->input('Student.email'); ?>
			<?php echo $this->Form->input('Student.password'); ?>
			<?php echo $this->Form->end(__('ログイン')); ?>
		</div>
  </div>
<button data-remodal-action="cancel" class="remodal-cancel">やめておく</button>
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
