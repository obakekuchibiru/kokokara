<?
if($events['Event']['country']==null){
  $locationSummary =  $this->element('lists/locationSet').$events['Event']['location'];
}elseif($events['Event']['prefecture']==null){
  $locationSummary = $this->element('lists/locationSetCnt').$events['Event']['location'];
}

$gmap_encore = urlencode($locationSummary);
$gmap_url = 'http://maps.google.co.jp/maps?&q='.$gmap_encore.'&output=embed';
?>


<h3><i class="fa fa-info-circle" aria-hidden="true"></i> このプログラムについて</h3>

<div class="row ev-detail-table">
  <div class="col-sm-4 left"><p class="table-subtitle">身につくスキル</p></div>
  <div class="col-sm-8 left">
    <div class="row">
      <div class="col-sm-12 left"><p class="table-text"><b><?echo $events['Event']['skill1'] ?></b></p></div>
    </div>
    <div class="row">
      <div class="col-sm-12 left"><p class="table-text"><b><?echo $events['Event']['skill2'] ?></b></p></div>
    </div>
      <?
      if($events['Event']['skill3'] !== ''){
        echo $this->element('branches/skill3');
      }else{
        echo null;
      }
      ?>
      <?
      if($events['Event']['skill4'] !== ''){
        echo $this->element('branches/skill4');
      }else{
        echo null;
      }
      ?>
  </div>
</div>
<div class="row ev-detail-table">
  <hr>
  <div class="col-sm-4 left"><p class="table-subtitle">募集対象</p></div>
  <div class="col-sm-8 left">
    <div class="row">
      <div class="col-sm-12 left"><p class="table-text"><b><?echo $events['Event']['recruit1'] ?></b></p></div>
    </div>
    <div class="row">
      <div class="col-sm-12 left"><p class="table-text"><b><?echo $events['Event']['recruit2'] ?></b></p></div>
    </div>
    <?
    if($events['Event']['recruit3'] !== ''){
      echo $this->element('branches/recruit3');
    }else{
      echo null;
    }
    ?>
    <?
    if($events['Event']['recruit4'] !== ''){
      echo $this->element('branches/recruit4');
    }else{
      echo null;
    }
    ?>
  </div>
</div>
<div class="row ev-detail-table"style="padding-top:30px;">
  <hr>
  <p class="table-subtitle">ロケーション：<? echo $locationSummary ?></p>
  <div class="col-xs-12 nopadding gmap-location" style="border:1px solid #e0e0e0;">
    <iframe
      width="100%"
      height="100%"
      frameborder="0"
      src="<? echo $gmap_url ?>" allowfullscreen>
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
