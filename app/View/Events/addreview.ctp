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
                <div>
                  <h3><? echo $events['Event']['title']?></h3><br>
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
            <? echo $this->element('event/add-review-form'); ?>
          </div>
        </div>
      </div> <!-- ev-revew container end -->
    </div>
  </div>
</div>
</div>
