<?
if($events['Event']['country']==null){
  $locationSummary =  $this->element('lists/locationSet').'、'.$events['Event']['location'];
}elseif($events['Event']['prefecture']==null){
  $locationSummary = '未完、'.$events['Event']['location'];
}
?>


<h3><i class="fa fa-info-circle" aria-hidden="true"></i> このプログラムについて</h3>

<div class="row ev-detail-table">
  <div class="col-sm-4 left"><p class="table-subtitle">身につくスキル</p></div>
  <div class="col-sm-8 left">
    <div class="row">
      <div class="col-sm-12 left"><p class="table-text">スキル1：<b>13文字ってどれくらい？</b></p></div>
    </div>
    <div class="row">
      <div class="col-sm-12 left"><p class="table-text">スキル2：<b>13文字ってこれぐらい。</b></p></div>
    </div>
  </div>
</div>
<div class="row ev-detail-table">
  <hr>
  <div class="col-sm-4 left"><p class="table-subtitle">募集対象</p></div>
  <div class="col-sm-8 left">
    <div class="row">
      <div class="col-sm-12 left"><p class="table-text">条件1：<b>やる気のある大学生3回生</b></p></div>
    </div>
    <div class="row">
      <div class="col-sm-12 left"><p class="table-text">条件2：<b>マーケティングに興味のある人</b></p></div>
    </div>
    <div class="row">
      <div class="col-sm-12 left"><p class="table-text">条件3：<b>人とのコミュニケーションが好きな人</b></p></div>
    </div>
  </div>
</div>
<div class="row ev-detail-table"style="padding-top:30px;">
  <hr>
  <p class="table-subtitle">ロケーション：<? echo $locationSummary ?></p>
  <div class="col-xs-12 nopadding" style="height:200px;border:1px solid #e0e0e0;">
    <iframe
      width="100%"
      height="100%"
      frameborder="0" style="border:0"
      src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDMt7Ng_vRmIMK3GnMPdshb8QMc4jwzaTo
        &q=<? echo $locationSummary ?>" allowfullscreen>
    </iframe>
  </div>
</div>

<div class="row ev-detail-table">
  <hr>
  <div class="col-sm-4 left"><p class="table-subtitle">プログラム内容</p></div>
  <div class="col-sm-8 left ev-detail-text">
    <article>
    <p class="table-text">
      <?echo $events['Event']['detail'] ?>
    </p>
    </article>
  </div>
</div>
