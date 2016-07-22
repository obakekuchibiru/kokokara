
<?php echo $this->Form->create('Student', Array('url'=>'/students/login')); ?>
<? $this->Html->css('specialhome/animate.min', null, array('inline' => false)) ?>
<? $this->Html->css('specialhome/et-line-font', null, array('inline' => false)) ?>
<? $this->Html->css('specialhome/nivo-lightbox', null, array('inline' => false)) ?>
<? $this->Html->css('specialhome/nivo_themes/default/default', null, array('inline' => false)) ?>
<? $this->Html->css('specialhome/style', null, array('inline' => false)) ?>
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


<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-circle">
       <div class="sk-circle1 sk-circle"></div>
       <div class="sk-circle2 sk-circle"></div>
       <div class="sk-circle3 sk-circle"></div>
       <div class="sk-circle4 sk-circle"></div>
       <div class="sk-circle5 sk-circle"></div>
       <div class="sk-circle6 sk-circle"></div>
       <div class="sk-circle7 sk-circle"></div>
       <div class="sk-circle8 sk-circle"></div>
       <div class="sk-circle9 sk-circle"></div>
       <div class="sk-circle10 sk-circle"></div>
       <div class="sk-circle11 sk-circle"></div>
       <div class="sk-circle12 sk-circle"></div>
    </div>
</div>


<!-- home section -->
<section id="home">
	<div class="container">
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

</div>

<? echo $this->Html->script('specialhome/smoothscroll.js');?>
<? echo $this->Html->script('specialhome/isotope.js');?>
<? echo $this->Html->script('specialhome/imagesloaded.min.js');?>
<? echo $this->Html->script('specialhome/nivo-lightbox.min.js');?>
<? echo $this->Html->script('specialhome/jquery.backstretch.min.js');?>
<? echo $this->Html->script('specialhome/wow.min.js');?>
<? echo $this->Html->script('specialhome/custom.js');?>
