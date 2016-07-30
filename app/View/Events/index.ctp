<?echo $this->Html->script("user.js");?>
<?echo $this->Html->script("readmore.min.js");?>
<? echo $this->Html->script('remodal.js');?>

<? $this->Html->css('remodal', null, array('inline' => false)) ?>
<? $this->Html->css('remodal-default-theme', null, array('inline' => false)) ?>
<? $this->Html->css('event.min', null, array('inline' => false)) ?>

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
<div id="main_container">
  <div id="event-container">
    <div id="event-picture">
      <div class="container-fluid nopadding">
        <div class="row">
          <div class="col-xs-12 event-img" style="background-image:url('img/urban.jpg')">
            
          </div>
        </div>
      </div>
    </div>
    <div id="event-summary">
      <div class="container">
        <!-- サマリーヘッダー1 大枠 -->
        <div class="row">
          <? echo $this->element('event/summary'); ?>
          <!-- lg用サイドシフト -->
          <? echo $this->element('event/lg-sidebar'); ?>
        </div>
      </div>

      <div class="container ev-details"><div class="row">
        <div class="container">
           <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-0">
              <? echo $this->element('event/detail1'); ?>
            </div>
          </div>
        </div>
        <!-- 写真集 -->
        <? echo $this->element('event/album'); ?>
      </div>
      <div class="container">
        <!-- サマリーヘッダー1 大枠 -->
        <div class="row">
          <div class="col-sm-12 ev-sm-review col-lg-8">
            <? echo $this->element('event/review'); ?>
          </div>
        </div>
      </div> <!-- ev-revew container end -->
    </div>
  </div>
</div>
</div>
<div class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking:false">
<button data-remodal-action="close" class="remodal-close"></button>
<h1>始まらない旅は遂げられない</h1>
<p><i>The only impossible journey is the one you never begin. <br>ーAnthony Robbins</i></p>
  <div class="row" style="text-align:left;">
    <div class="col-sm-6">
      <img src="img/zeppelin.jpg" style="width:100%;padding-bottom:20px;">
    </div>
    <div class="col-sm-6">
      <table>

      </table>
    </div>
  </div>
<button data-remodal-action="cancel" class="remodal-cancel">戻る</button>
<button data-remodal-action="confirm" class="remodal-confirm">ログイン</button>
</div>
