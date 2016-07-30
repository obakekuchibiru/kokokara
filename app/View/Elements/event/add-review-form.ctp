<?php
debug($events);
debug($user);
echo $this->Form->create('Review', array('url'=>'addreview'));


echo $this->Form->select('Review.period', array('0'=>'1か月未満'));

echo $this->Form->input('Review.event_id', array('type'=>'hidden','value'=>$events['Event']['id']));
echo $this->Form->input('Review.student_id', array('type'=>'hidden','value'=>$user));
echo $this->Form->input('Review.company_id', array('type'=>'hidden','value'=>$events['Event']['company_id']));
echo $this->Form->input('Review.active', array('type'=>'hidden', 'value'=>'0'));

?>

<div class="row">
  <div class="col-sm-2 col-xs-3" style="text-align:center;">
    <div class="person-in-charge" style="background-image:url('img/face-sample2.jpg');"></div>
    <p>経験者より</p>
  </div>
  <div class="col-sm-10 col-xs-9">
    <div class="question_Box">
      <div class="arrow_question">
        <? echo $this->Form->input('Review.body',array('label'=>false,'style'=>'height:200px;border:1px solid #e0e0e0;','placeholder'=>'このプログラムでどんな経験をしましたか？レビューしよう！')); ?>
          <hr>
            <div class="row">
              <div class="col-sm-4">
                <p><i class="fa fa-calendar" aria-hidden="true"></i> 期間：約3ヶ月</p>
              </div>
              <div class="col-sm-8">
                <p><i class="fa fa-jpy" aria-hidden="true"></i> 1ヶ月の生活費：約6万円</p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <p>忙しさ：
                  <i class="fa fa-check-square-o" aria-hidden="true"></i>
                  <i class="fa fa-check-square-o" aria-hidden="true"></i>
                  <i class="fa fa-check-square-o" aria-hidden="true"></i>
                  <i class="fa fa-square-o" aria-hidden="true"></i>
                  <i class="fa fa-square-o" aria-hidden="true"></i>
                </p>
              </div>
              <div class="col-sm-4">
                <p>厳しさ：
                  <i class="fa fa-check-square-o" aria-hidden="true"></i>
                  <i class="fa fa-check-square-o" aria-hidden="true"></i>
                  <i class="fa fa-square-o" aria-hidden="true"></i>
                  <i class="fa fa-square-o" aria-hidden="true"></i>
                  <i class="fa fa-square-o" aria-hidden="true"></i>
                </p>
              </div>
              <div class="col-sm-4">
                <p>なにか：
                  <i class="fa fa-check-square-o" aria-hidden="true"></i>
                  <i class="fa fa-check-square-o" aria-hidden="true"></i>
                  <i class="fa fa-square-o" aria-hidden="true"></i>
                  <i class="fa fa-square-o" aria-hidden="true"></i>
                  <i class="fa fa-square-o" aria-hidden="true"></i>
                </p>
              </div>
              <div style="text-align:center;margin-top:50px;">
                <p>こちらに書かれたレビューは一度プログラム主催企業に送信され、その後イベントページに反映されます。<br>レビュー削除・編集は、<a>マイページ</a>で行う事ができます。</p>
                <? echo $this->Form->end('レビューを投稿する'); ?>
              </div>
            </div>
      </div><!-- /.arrow_question -->

      </div><!-- /.question_Box -->

  </div>
</div>
