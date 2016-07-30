<?echo $this->Html->script("user.js");?>
<? $this->Html->css('event.min', null, array('inline' => false)) ?>

<div id="main_container">
  <div id="event-container">
    <div id="event-picture">
      <div class="container-fluid nopadding">
        <div class="row">
          <div class="col-xs-12 event-img" style="background-image:url('img/urban.jpg')">
            <div class="row">
              <div class="col-sm-10 col-sm-offset-1 review-title" style="text-align:center;">
                <div style="background-color: rgba(0,0,0,0.5);">
                  <h3>イベントタイトルイベントタイトルイベントタイトル</h3><br>
                  <p>にレビューを投稿する</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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



<?php
debug($events);
debug($user);
echo $this->Form->create('Review', array('url'=>'addreview'));

echo $this->Form->input('Review.body',array('label'=>'本文'));
echo $this->Form->select('Review.period', array('0'=>'1か月未満'));

echo $this->Form->input('Review.event_id', array('type'=>'hidden','value'=>$events['Event']['id']));
echo $this->Form->input('Review.student_id', array('type'=>'hidden','value'=>$user));
echo $this->Form->input('Review.company_id', array('type'=>'hidden','value'=>$events['Event']['company_id']));
echo $this->Form->input('Review.active', array('type'=>'hidden', 'value'=>'0'));
echo $this->Form->end('レビュー投稿！');

?>
