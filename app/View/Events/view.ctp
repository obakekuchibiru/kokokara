<?echo $this->Html->script("user.js");?>
<?echo $this->Html->script("readmore.min.js");?>
<?echo $this->Html->script("remodal.js");?>
<?echo $this->Html->script("jquery.sticky.js");?>

<? $this->Html->css('remodal', null, array('inline' => false)); ?>
<? $this->Html->css('remodal-default-theme', null, array('inline' => false)); ?>
<? $this->Html->css('event.min', null, array('inline' => false)); ?>

<?php
  $event_thumb = $this->Html->url('/'.'files/thumbnail/attachment/'. $events['Thumbnail'][0]['dir'] . '/' . $events['Thumbnail'][0]['attachment']);
  $company_logo = $this->Html->webroot.IMAGES_URL . "cmp-sample.jpg";
  $manager_thumb = $this->Html->url('/'.'files/photo/attachment/'. $events['Photo'][0]['dir'] . '/' . $events['Photo'][0]['attachment']);
?>

<style>
.event-img{
  background-image:url('<? echo $event_thumb ?>');
}
.event-sm-suppier-thumb{
  background-image:url('<? echo $company_logo ?>');
}
.person-in-charge{
  background-image:url('<? echo $manager_thumb ?>');
}
</style>


<script type="text/javascript">
      $(function () {
        $('article').readmore({
          speed: 400,
          collapsedHeight: 200,
          moreLink: '<a href="#">続きを読む</a>',
          lessLink: '<a href="#">閉じる</a>'
        });
      });
</script>
<script type="text/javascript">
  $(window).load(function(){
   $("#sticker").sticky({ topSpacing: 0, center:true, className:"hey" });
 });
</script>

<div id="main_container">
  <div id="event-container">
    <div id="event-picture">
      <div class="container-fluid nopadding">
        <div class="row">
          <div class="col-xs-12 event-img">
            <!-- event-thumbnail -->
          </div>
        </div>
      </div>
    </div>
    <div id="event-summary">
      <div class="container">
        <!-- サマリーヘッダー1 大枠 -->
        <div class="row">
          <?php echo $this->element('event/summary'); ?>
          <!-- lg用サイドシフト -->
          <?php echo $this->element('event/lg-sidebar'); ?>
        </div>
      </div>

      <div class="container-fluid ev-details">
        <div class="row">
          <div class="container">
             <div class="row">
              <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-0">
                <?php echo $this->element('event/detail1'); ?>
              </div>
            </div>
          </div>
        <!-- 写真集 -->
        <?php echo $this->element('event/album'); ?>
        </div>
      <div class="container">
        <!-- サマリーヘッダー1 大枠 -->
        <div class="row">
          <div class="col-sm-12 ev-sm-review col-lg-8">
            <?php echo $this->element('event/review'); ?>
          </div>
        </div>
      </div> <!-- ev-revew container end -->
    </div>
  </div>
</div>
<div class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking:false">
  <button data-remodal-action="close" class="remodal-close"></button>
  <h1>始まらない旅は遂げられない</h1>
  <p><i>The only impossible journey is the one you never begin. <br>ーAnthony Robbins</i></p>
    <div class="row" style="text-align:left;">
      <div class="col-sm-6">
        <?php echo $this->html->image('zeppelin.jpg',array('style'=>'width:100%;padding-bottom:20px;')); ?>
      </div>
      <div class="col-sm-6">
        <table>

        </table>
      </div>
    </div>
  <button data-remodal-action="cancel" class="remodal-cancel">やめておく</button>
  <button data-remodal-action="confirm" class="remodal-confirm">応募する</button>
</div>
<?php debug($events); ?>
