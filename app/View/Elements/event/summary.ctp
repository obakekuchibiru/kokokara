<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-0">
  <div class="row" style="padding-top:40px;">
    <!--　サマリーヘッダー1 左側 -->
    <div class="col-sm-3 col-sm-offset-0 col-xs-12">
      <div class="event-sm-suppier-thumb" style="background-image:url('img/cmp-sample.jpg');">
      </div>
      <p style="text-align:center;padding-top:10px;font-size:14px;"><? echo $events['Company']['name']?></p>
    </div>
    <!--　サマリーヘッダー1 左側終 -->
    <!--　サマリーヘッダー1 右側　-->
    <div class="col-sm-9 col-sm-offset-0 col-xs-12">
      <div class="ev-sm-title">
        <h1><? echo $events['Event']['title']?></h1>
      </div>
    </div>
    <div class="row ev-sm-icons">
      <div class="col-xs-3 col-sm-2">
        <?
        if($events['Event']['job_type'] == 0){
          echo '<div class="icon-block"><p class="sample-font"><i class="fa fa-jpy"></i></p></div><p>マーケティング</p>';
        }elseif($events['Event']['job_type'] == 1){
          echo '<div class="icon-block"><p class="sample-font"><i class="fa fa-jpy"></i></p></div><p>営業</p>';
        }elseif($events['Event']['job_type'] == 2){
          echo '<div class="icon-block"><p class="sample-font"><i class="fa fa-jpy"></i></p></div><p>企画</p>';
        }elseif($events['Event']['job_type'] == 3){
          echo '<div class="icon-block"><p class="sample-font"><i class="fa fa-jpy"></i></p></div><p>デザイン</p>';
        }elseif($events['Event']['job_type'] == 4){
          echo '<div class="icon-block"><p class="sample-font"><i class="fa fa-jpy"></i></p></div><p>プログラミング</p>';
        }elseif($events['Event']['job_type'] == 5){
          echo '<div class="icon-block"><p class="sample-font"><i class="fa fa-jpy"></i></p></div><p>サービス</p>';
        }elseif($events['Event']['job_type'] == 6){
          echo '<div class="icon-block"><p class="sample-font"><i class="fa fa-jpy"></i></p></div><p>教育</p>';
        }
        ?>

        <div class="icon-block"><p class="sample-font"></p></div>
        <p>マーケティング</p>
      </div>
      <div class="col-xs-3 col-sm-2">
        <div class="icon-block"><p class="sample-font"><i class="fa fa-users"></i></p></div>
        <p>頻度</p>
      </div>
      <div class="col-xs-3 col-sm-2">
        <?php
          if($events['Event']['reward'] == 0){
          	echo '<div class="icon-block"><p class="sample-font"><i class="fa fa-jpy"></i></p></div><p>報酬無し</p>';
          }else{
            echo '<div class="icon-block"><p class="sample-font"><i class="fa fa-jpy"></i></p></div><p>報酬有り</p>';
          }
        ?>
      </div>
      <div class="col-xs-3 col-sm-2">
        <div class="icon-block"><p class="sample-font"><i class="fa fa-calendar"></i></p></div>
        <p>
          <?php
            if($events['Event']['period'] == 0){
            	echo '1ヶ月未満';
            }elseif($events['Event']['period'] == 1){
              echo '1-2ヶ月';
            }elseif($events['Event']['period'] == 2){
              echo '3-6ヶ月';
            }elseif($events['Event']['period'] == 3){
              echo '6-12ヶ月';
            }elseif($events['Event']['period'] == 4){
              echo '1年以上';
            }
          ?>
        </p>
      </div>
    </div>
    <!--　サマリーヘッダー1 右側終　-->
  </div>
  <!-- サマリーヘッダー1 下側 -->
  <div class="row">
    <div class="col-sm-12 ev-sm-lower hidden-lg">
      <div class="row col-label" style="padding-top:15px; padding-left:20px;">
        <h2 style="padding:0;margin:0;color:#f3f3f3;font-size:18px;">このインターンに関して</h2>
      </div>
      <div class="row">
        <div class="col-sm-12" style="padding:20px 35px">
          <div style="height:auto;min-height:75px;">
            <p style="font-size:15px;padding-bottom:10px;">
              <? echo $events['Event']['about']?>
            </p>
          </div>
          <button type="button" class="btn btn-primary btn-lg btn-block" data-remodal-target="modal">申し込む</button>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12 ev-sm-lower2 hidden-xs">
      <div class="row">
        <div class="col-sm-2" style="text-align:center;">
          <div class="person-in-charge" style="background-image:url('img/gagamaru.jpg');"></div>
          <p class="person-in-charge-name hidden-lg">担当者より</p>
        </div>
        <div class="col-sm-10">
          <div class="question_Box">
            <div class="arrow_question">
                 <p style="margin-bottom:0;">プログラム担当者からの一言コメントを掲載します。文字数は140字までです。プログラム担当者からの一言コメントを掲載します。文字数は140字までです。プログラム担当者からの一言コメントを掲載します。文字数は140字までです。この文章が終わる頃、それはちょうど140字となっております</p>

            </div><!-- /.arrow_question -->

            </div><!-- /.question_Box -->

        </div>
      </div>
    </div>
  </div>
</div>