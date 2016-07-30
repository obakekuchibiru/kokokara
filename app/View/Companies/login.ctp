<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Company', Array('url' => '/companies/login')); ?>
<? $this->Html->css('user-page.min', null, array('inline' => false)); ?>
<? $this->Html->css('specialhome/animate.min', null, array('inline' => false)) ?>
<? $this->Html->css('specialhome/et-line-font', null, array('inline' => false)) ?>
<? $this->Html->css('specialhome/nivo-lightbox', null, array('inline' => false)) ?>
<? $this->Html->css('specialhome/nivo_themes/default/default', null, array('inline' => false)) ?>
<? $this->Html->css('specialhome/style', null, array('inline' => false)) ?>
<? $this->Html->css('login.min', null, array('inline' => false)) ?>
<? $this->Html->css('remodal', null, array('inline' => false)) ?>
<? $this->Html->css('remodal-default-theme', null, array('inline' => false)) ?>

<? echo $this->Html->script('remodal.js');?>
<? echo $this->Html->script('specialhome/smoothscroll.js');?>
<? echo $this->Html->script('specialhome/isotope.js');?>
<? echo $this->Html->script('specialhome/imagesloaded.min.js');?>
<? echo $this->Html->script('specialhome/nivo-lightbox.min.js');?>
<? echo $this->Html->script('specialhome/jquery.backstretch.min.js');?>
<? echo $this->Html->script('specialhome/wow.min.js');?>
<? echo $this->Html->script('specialhome/custom2.js');?>


<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
<script type="text/javascript">
var h = $(window).height();
$('#main-container').css("height", h + "px");

$(window).resize(function(){
var h = $(window).height();
$('#main-container').css("height",h + "px");
});
</script>
<script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
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
				<h3>カンパニーページ</h3>
				<h1>kokokara University</h1>
				<hr>
          <style>
            .submit{
              margin-top:0 !important;
            }
            .submit input{
              background:none;
              border:none;
              border-radius:2px;
            }
              input:-webkit-autofill {
                  -webkit-box-shadow: 0 0 0px 1000px #f2f2f2 inset;
              }
          </style>






        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="row form-row" data-toggle="validator" role="form">
              <div class="col-sm-8 col-sm-offset-2 form-group">
                <div class="row">
                  <div class="col-sm-12">
                    <p>メールアドレス</p>
                    <?php echo $this->Form->input('Company.email', array('label' => false, 'id'=>'inputEmail','placeholder'=>'Email address', 'required','autofocus')); ?>
                  </div>
                  <div class="col-sm-12" style="padding-top:10px;">
                    <p>パスワード<p>
                    <?php echo $this->Form->input('Company.password', Array('label' => false, 'id'=>'unputPassword','class'=>'form-control','placeholder'=>'Password', 'required')); ?>
                  </div>
                </div>
              </div>
            </div>
            <label for="inputEmail" class="sr-only">メールアドレス</label>

            <label for="inputPassword" class="sr-only">パスワード</label>


    				<a class="smoothScroll btn btn-danger"><?php echo $this->Form->end(__('ログイン')); ?></a>
    				<a href="#contact" class="smoothScroll btn btn-default">パスワードを忘れた</a>
          </div>
        </div>
			</div>
		</div>
	</div>
</section>
