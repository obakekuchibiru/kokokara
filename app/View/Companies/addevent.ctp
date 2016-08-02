<? $this->Html->css('user-page.min', null, array('inline' => false)); ?>
<? echo $this->Html->script("validator.js");?>
<? echo $this->Html->script("jquery.add-input-area.min.js");?>
<? echo $this->Html->script("dropzone.js");?>
<? echo $this->Html->script("app.js");?>


<?
// echo $this->Form->create('Event', array('url' => 'addevent', 'type'=>'file'));
  echo $this->form->create(array('url'=>'addevent_preview', 'type'=>'post'));
?>


<script type="text/javascript">
  function entryChange1(){
    radio = document.getElementsByName('location')
    if(radio[0].checked) {
      //フォーム
      document.getElementById('location-domestic').style.display = "";
      document.getElementById('location-foreign').style.display = "none";
      //特典
      document.getElementById('locatoin-domestic-info').style.display = "";
    }else if(radio[1].checked) {
      //フォーム
      document.getElementById('location-domestic').style.display = "none";
      document.getElementById('location-foreign').style.display = "";
      //特典
      document.getElementById('location-domestic-info').style.display = "none";
    }
  }
  //オンロードさせ、リロード時に選択を保持
  window.onload = entryChange1;
</script>
<script>
$(document).ready(function(){
  $('.btn1').on('click', function () {
    $("#neededlicense").slideToggle();
  });
  $('.btn2').on('click', function () {
    $("#videoattach").slideToggle();
  });
});
</script>

<div id="main-container" style="background:#f3f3f3;">

    <?php echo $this->element('header/mypage-tags'); ?>
    <div id="mypage-cnts-dashboard">
        <div class="container nopadding-vw">
          <div class="raw">
            <div class="container">
              <div class="raw">
                <!-- サイドバー開始 -->
                <div class="col-sm-3 dashboard-sidebar hidden-xs nopadding">
                  <div class="raw clearfix dash-elm">

                  </div>
                </div>
                <!-- サイドバー終了 -->

                <!--　メインバー開始 -->
                <div class="col-sm-9 dashboard-mainbar">

                  <!-- 必須項目開始 -->
                  <div class="raw clearfix dash-elm">
                    <div class="col-xs-12 title-bar">
                      <p>プログラム基本項目</p>
                    </div>
                    <div class="col-xs-12 dash-article form-field">
                        <p>
                          こんにちは。kokokara Universityをご利用頂き誠に有り難う御座います。
                          こちらのページ上でプログラムに関する記事を作成して頂けます。必須項目が多く恐縮では御座いますが、よろしくお願い致します。<br>
                          また何かご不明な点が御座いましたら、<a href="#">メールより</a>お問い合わせ頂けます。</p>
                        </p>
                        <div class="row form-row" data-toggle="validator" role="form">
                          <div class="col-sm-3"><label for="title">タイトル <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-9 form-group">
                            <div class="row">
                              <div class="col-sm-12">
                                <?echo $this->Form->input('Event.title', array('label' => false));?>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>こちらが記事のタイトルとなります。</p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="comment">プログラム概要</label></div>
                          <div class="col-sm-9 form-group">
                            <? echo $this->Form->input('Event.about', array('label' => false, 'class'=>'form-control', 'style'=>'height:100px;')); ?>

                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>プログラムの見所やキャッチコピーなどをご記入下さい。なおプログラム詳細は下の「プログラム内容」にご記入頂けます。</p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="comment">プログラム内容 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-9 form-group">
                            <? echo $this->Form->input('Event.detail', array('label' => false, 'class'=>'form-control', 'style'=>'height:200px;')); ?>

                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>プログラムの詳細や事業内容について、心意気や求める人物像など自由にご記入下さい。</p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="user-gender">職種 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-3 form-group">
                            <?
                            echo $this->Form->select('Event.job_type1', array(
                              '0'=>'マーケティング',
                              '1'=>'営業',
                              '2'=>'企画',
                              '3'=>'デザイン',
                              '4'=>'プログラミング',
                              '5'=>'サービス',
                              '6'=>'教育'),
                                array(
                                  'label'=>false,
                                  'empty'=>'職種1 (必須)',
                                  'class'=>'form-control',
                                  'required'
                                  ));
                              ?>
                          </div>
                          <div class="col-sm-3 form-group">
                            <?
                            echo $this->Form->select('Event.job_type2', array(
                              '0'=>'マーケティング',
                              '1'=>'営業',
                              '2'=>'企画',
                              '3'=>'デザイン',
                              '4'=>'プログラミング',
                              '5'=>'サービス',
                              '6'=>'教育'),
                                array(
                                  'label'=>false,
                                  'empty'=>'職種2 (任意)',
                                  'class'=>'form-control'
                                  ));
                              ?>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>インターン生はどのようなお仕事をする事になりますか？職種は、2つまでお選び頂けます。</p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="user-gender">雇用期間 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-3 form-group">
                            <?
                            echo $this->Form->select('Event.period', array(
                              '0'=>'1ヶ月未満OK',
                              '1' =>'1ヶ月以上',
                              '2'=>'3ヶ月以上',
                              '3'=>'6ヶ月以上',
                              '4'=>'1年以上'),
                              array(
                                'label'=>false,
                                'empty'=>'選択して下さい',
                                'class'=>'form-control'
                                ));
                            ?>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>インターン生にはどのぐらいの期間働いて欲しいですか？雇用条件の最低期間を選択して下さい。</p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="user-gender">出勤頻度 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-3 form-group">
                            <?
                            echo $this->Form->select('Event.frequency', array(
                              '1'=>'週1-2回',
                              '2' =>'週3~5回',
                              '3'=>'週5回以上'),
                              array(
                                'label'=>false,
                                'empty'=>'選択して下さい',
                                'class'=>'form-control'
                              ));
                            ?>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="user-gender">開催地 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-9 form-group" style="margin-bottom:10px;">
                            <label class="radio-inline"><input type="radio" name="location" value="1" onclick="entryChange1();"checked="checked">国内</label>
                            <label class="radio-inline"><input type="radio" name="location" value="2" onclick="entryChange1();">国外</label>
                          </div>
                          <div id="location-domestic" class="col-sm-7 col-sm-offset-3 form-group">
                              <?php echo $this->element('lists/pref-list'); ?>
                            <div class="help-block with-errors"></div>
                            最寄り駅：
                            <? echo $this->Form->input('Event.location', array('label' => false)); ?>
                            <div class="help-block with-errors"></div>
                          </div>
                          <div id="location-foreign" class="col-sm-7 col-sm-offset-3 form-group">
                              <?php echo $this->element('lists/country-list'); ?>
                              <div class="help-block with-errors"></div>
                              最寄り駅や地域名：
                            <? echo $this->Form->input('Event.location', array('label' => false,'name'=>'location-summary')); ?>
                            <div class="help-block with-errors"></div>
                            <p>ここに、住所の詳細を記載する必要は御座いません。おおよその地区や最寄の駅・バス停などをご記載下さい</p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="user-gender">トップ画 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-7 form-group">
                            <div class="input-group">
                                <label class="input-group-btn" style="padding:0;margin:0;">
                                    <span class="btn btn-primary" style="padding:8px 12px;">
                                        Upload&hellip;
                                        <? echo $this->Form->input('Thumbnail.0.attachment', array('type'=>'file','label'=>false,'style'=>'display:none;')); ?>
                                        <? echo $this->Form->input('Thumbnail.0.model', array('type'=>'hidden','value'=>'Event')); ?>
                                        <? echo $this->Form->input('Thumbnail.0.purpose', array('type'=>'hidden','value'=>'Thumbnail')); ?>
                                    </span>
                                </label>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <div class="col-sm-12 user-edit-info" style="padding-left:0;">
                              <p>こちらの画像はプログラムページのトップ画像としてだけでなく、プログラム一覧ページでは当プログラムのサムネイルとしても活用されます。</p>

                            </div>

                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="user-gender">イメージ <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-7 form-group">
                            <section>
                              <div id="dropzone">
                                <div action="/upload" class="dropzone needsclick" id="demo-upload" style="text-align:center;">
                                  <div class="dz-message needsclick" style="padding:20px;">
                                    画像ファイルをここにドロップするか、<br>ここをクリックして選択して下さい。<br />
                                  </div>
                                </div>
                              </div>
                            </section>

                            <div class="col-sm-12 user-edit-info" style="padding-left:0;">
                              <p>プログラムに関連する画像などをアップロードして頂けます。<br><a class="btn2">YoutubeやVimeoなどの動画サイトのリンクを貼りますか？</a></p>
                            </div>
                            <div id="videoattach" class="col-sm-12 form-group"style="margin-bottom:10px;margin-top:10px;display:none;">
                              <div class="row">
                                <div class="col-sm-12">
                                  <? echo $this->Form->input('Event.video', array('label' => false,'placeholder'=>'e.g.https://www.youtube.com/watch?v=example000000','style'=>'margin-bottom:5px;'));?>
                                </div>
                              </div>
                              <div class="user-edit-info">
                                <p>YoutubeやVimeoの動画リンクをコピー・ペーストして下さい。</p>
                              </div>

                            </div>
                          </div>
                        </div>
                        <div id="form-skill" data-toggle="validator" role="form"  class="row form-row">
                          <div class="col-sm-3">
                            <label for="tel">身につくスキル <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label>
                          </div>
                          <div class="col-sm-9 form-group" style="margin-bottom:10px;">
                            <div class="row">
                              <div class="col-sm-10">
                                <? echo $this->Form->input('Event.skill1', array('label' => false,'class'=>'form-control','placeholder'=>'身につくスキル1','required')); ?>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 form-group" style="margin-bottom:10px;">
                            <div class="row">
                              <div class="col-sm-10">
                                <? echo $this->Form->input('Event.skill2', array('label' => false,'class'=>'form-control','placeholder'=>'身につくスキル2','required')); ?>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 form-group" style="margin-bottom:10px;">
                            <div class="row">
                              <div class="col-sm-10">
                                <? echo $this->Form->input('Event.skill3', array('label' => false,'class'=>'form-control','placeholder'=>'他にもあればご記入下さい')); ?>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 form-group" style="margin-bottom:10px;">
                            <div class="row">
                              <div class="col-sm-10">
                                <? echo $this->Form->input('Event.skill4', array('label' => false,'class'=>'form-control','placeholder'=>'他にもあればご記入下さい')); ?>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>インターンを通してどのようなスキルを得る事ができますか？2個以上記入して下さい</p>
                          </div>


                        </div>
                        <div id="form-skill" data-toggle="validator" role="form"  class="row form-row">
                          <div class="col-sm-3">
                            <label for="tel">募集対象 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label>
                          </div>
                          <div class="col-sm-9 form-group" style="margin-bottom:10px;">
                            <div class="row">
                              <div class="col-sm-10">
                                <? echo $this->Form->input('Event.recruit1', array('label' => false,'placeholder'=>'募集対象1','required'));?>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 form-group"style="margin-bottom:10px;">
                            <div class="row">
                              <div class="col-sm-10">
                                <? echo $this->Form->input('Event.recruit2', array('label' => false,'placeholder'=>'募集対象2','required'));?>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 form-group"style="margin-bottom:10px;">
                            <div class="row">
                              <div class="col-sm-10">
                                <? echo $this->Form->input('Event.recruit3', array('label' => false,'placeholder'=>'もしあればご記入下さい'));?>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 form-group"style="margin-bottom:10px;">
                            <div class="row">
                              <div class="col-sm-10">
                                <? echo $this->Form->input('Event.recruit4', array('label' => false,'placeholder'=>'もしあればご記入下さい'));?>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>どのような人材を求めていますか？また、お仕事をするにあたってどのような条件を満たしている必要がありますか？2個以上記入して下さい。</p>
                            <a class="btn1">資格や検定、TOEICなどのスコアの取得が募集条件にありますか？</a>
                          </div>
                          <div id="neededlicense" class="col-sm-9 col-sm-offset-3 form-group"style="margin-bottom:10px;margin-top:10px;display:none;">
                            <div class="row">
                              <div class="col-sm-5">
                                <? echo $this->Form->input('Event.skill_required1', array('label' => false,'placeholder'=>'資格1','style'=>'margin-bottom:5px;'));?>
                              </div>
                              <div class="col-sm-5">
                                <? echo $this->Form->input('Event.skill_required2', array('label' => false,'placeholder'=>'資格2','style'=>'margin-bottom:5px;'));?>
                              </div>
                              <div class="col-sm-5">
                                <? echo $this->Form->input('Event.skill_required3', array('label' => false,'placeholder'=>'資格3','style'=>'margin-bottom:5px;'));?>
                              </div>
                              <div class="col-sm-5">
                                <? echo $this->Form->input('Event.skill_required4', array('label' => false,'placeholder'=>'資格4','style'=>'margin-bottom:5px;'));?>
                              </div>
                            </div>
                            <div class="col-sm-10 user-edit-info">
                              <p>4つまでご記入頂けます。それ以上ある場合は「プログラム詳細」にご記入下さい。</p>
                            </div>

                          </div>



                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="place">その他手当 </label></div>
                          <div class="col-sm-9 form-group">
                            <?
                            echo $this->Form->input('Event.reward', array(
                              'type'=>'checkbox',
                              'label'=>'報酬',
                              'value'=>0,
                              'onclick'=>'entryChange2()'
                              ));
                            echo $this->Form->input('Event.residence', array('type'=>'checkbox', 'label'=>'住居'));
                            echo $this->Form->input('Event.transportation_expense', array('type'=>'checkbox', 'label'=>'交通費'));
                            ?>
                            <?
                            echo $this->Form->input('Event.salary', array(
                              'label' => false,
                              'id'=>'salary-detail',
                              'class'=>'form-control',
                              'style'=>'display:none;margin-top:10px;',
                              'placeholder'=>'報酬形態や給与額が決まっている場合、ご記入下さい。'));
                              ?>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>報酬にチェックが入っていない場合、「報酬無し」と表示されます。</p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="place">会社概要 </label></div>
                          <div class="col-sm-9 form-group">
                            <? echo $this->Form->input('Event.profile', array('label' => false,'style'=>'height:150px;'));?>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p></p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="place">担当者様のお写真 </label></div>
                          <div class="col-sm-9 form-group">
                            <?
                            echo $this->Form->input('Event.company_id', array('type'=>'hidden', 'value'=>$nowcompany));
                            echo $this->Form->input('Photo.0.attachment', array('type'=>'file','label'=>false));
                            echo $this->Form->input('Photo.0.model', array('type'=>'hidden','value'=>'Event'));
                            echo $this->Form->input('Photo.0.purpose', array('type'=>'hidden','value'=>'staff_photo'));
                            ?>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p></p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="place">担当者様から一言 </label></div>
                          <div class="col-sm-9 form-group">
                            <? echo $this->Form->input('Event.staff_message', array('label' => false,'style'=>'height:100px;')); ?>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                <? echo $this->Form->input('Album.0.attachment', array('type'=>'file','label'=>false,'multiple'=>true)); ?>
                <? echo $this->Form->input('Album.0.model', array('type'=>'hidden','value'=>'Event','multiple'=>true)); ?>
                <? echo $this->Form->input('Album.0.purpose', array('type'=>'hidden','value'=>'Album','multiple'=>true)); ?>
                          </div>
                        </div>
                        <div class="raw clearfix dash-elm">
                          <div class="col-sm-4 col-sm-offset-4">
                            <? echo $this->Form->end('内容確認'); ?>
                          </div>
                        </div>
                      </div>
                  </div>





                  <!-- 必須項目終了 -->
                  <!-- 任意項目開始-->

                  <?
                  //echo $this->Form->create('Event', array('url' => 'addevent'));
                  //echo $this->Form->input('Event.title', array('label' => 'タイトル'));
                  //echo $this->Form->input('Event.about', array('label' => '概要'));
                  //echo $this->Form->input('Event.detail', array('label' => '本文'));
                  //echo $this->Form->select('Event.period', array('1'=>'1ヶ月未満','2' =>'1-2ヶ月','3'=>'3ヶ月以上','4'=>'半年以上','5'=>'1年以上'), array('label'=>'false', 'empty'=>'期間'));
                  //echo $this->Form->select('Event.job_type', array('1'=>'マーケティング','2'=>'営業','3'=>'企画','4'=>'デザイン','5'=>'プログラミング','6'=>'サービス','8'=>'教育'), array('label'=>'false', 'empty'=>'職務系統'));
                  //echo $this->Form->input('Event.thumbnail', array('label' => 'サムネイル'));
                  //echo $this->Form->select('Event.frequency',array('1'=>'週1-2回','2' =>'週3回以上','3'=> '毎日'), array('label'=>'false', 'empty'=>'頻度'));
                  //echo $this->Form->input('Event.reward', array('type'=>'checkbox', 'label'=>'報酬'));
                  //echo $this->Form->input('Event.residence', array('type'=>'checkbox', 'label'=>'住居'));
                  //echo $this->Form->input('Event.transportation_expense', array('type'=>'checkbox', 'label'=>'交通費'));
                  //echo $this->Form->input('Event.salary', array('label' => '1か月あたりの給料'));
                  //echo $this->Form->input('Event.skill1', array('label' => '身につくスキル１'));
                  //echo $this->Form->input('Event.skill2', array('label' => '身につくスキル２'));
                  //echo $this->Form->input('Event.skill3', array('label' => '身につくスキル３'));
                 //echo $this->Form->input('Event.skill4', array('label' => '身につくスキル４'));
                  //echo $this->Form->input('Event.skill_required', array('label' => '必要スキル'));
                  //echo $this->Form->input('Event.recruit1', array('label' => '募集対象１'));
                  //echo $this->Form->input('Event.recruit2', array('label' => '募集対象２'));
                  //echo $this->Form->input('Event.recruit3', array('label' => '募集対象３'));
                  //echo $this->Form->input('Event.recruit4', array('label' => '募集対象４'));
                  //echo $this->Form->input('Event.contents', array('label' => '業務内容'));
                  //echo $this->Form->input('Event.profile', array('label' => '経営者プロフィール'));
                  //echo $this->Form->input('Event.staff_photo', array('type'=>'file', 'label'=>'担当者様のお写真'));
                  //echo $this->Form->input('Event.dir', array('type'=>'hidden',));
                  //echo $this->Form->input('Event.staff_message', array('label' => '担当者様からの一言'));
                  //  echo $this->Form->input('Event.company_id', array('type'=>'hidden', 'value'=>$nowcompany));
                  //  echo $this->Form->input('Photo.0.attachment', array('type'=>'file','label'=>'担当者様のお写真'));
                  //  echo $this->Form->input('Photo.0.model', array('type'=>'hidden','value'=>'Event'));
                  //  echo $this->Form->input('Photo.0.purpose', array('type'=>'hidden','value'=>'staff_photo'));

                  ?>

                </div>
                 <!-- メインバー終了 -->
              </div>
            </div>
          </div>

        </div>
    </div>
</div>

<!-- album用

                <? echo $this->Form->input('Album.0.attachment', array('type'=>'file','label'=>false)); ?>
                <? echo $this->Form->input('Album.0.model', array('type'=>'hidden','value'=>'Event')); ?>
                <? echo $this->Form->input('Album.0.purpose', array('type'=>'hidden','value'=>'Album')); ?>

                <? echo $this->Form->input('Album.1.attachment', array('type'=>'file','label'=>false)); ?>
                <? echo $this->Form->input('Album.1.model', array('type'=>'hidden','value'=>'Event')); ?>
                <? echo $this->Form->input('Album.1.purpose', array('type'=>'hidden','value'=>'Album')); ?>

                <? echo $this->Form->input('Album.2.attachment', array('type'=>'file','label'=>false)); ?>
                <? echo $this->Form->input('Album.2.model', array('type'=>'hidden','value'=>'Event')); ?>
                <? echo $this->Form->input('Album.2.purpose', array('type'=>'hidden','value'=>'Album')); ?>

-->


<!-- 任意項目開始 -->
<!--
<div class="raw clearfix dash-elm">
  <div class="col-xs-12 title-bar">
    <p>任意項目</p>
  </div>
  <div class="col-xs-12 dash-article form-field">
      <div class="row form-row">
        <div class="col-sm-3"><label for="family-name">hoge</label></div>
        <div class="col-sm-9 form-group">
          <div class="row">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="family-name" placeholder="">
            </div>
          </div>
        </div>
      </div>
      <div class="row form-row">
        <div class="col-sm-3"><label for="name">hoge</label></div>
        <div class="col-sm-9 form-group">
          <div class="row">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="name" placeholder="">
            </div>
          </div>
        </div>
      </div>
      <div class="row form-row">
        <div class="col-sm-3"><label for="user-gender">hoge <i class="fa fa-lock info-private" data-toggle="popover" data-placement="top"></i></label></div>
        <div class="col-sm-3 form-group">
              <select class="form-control" id="user-gender">
                <option>性別</option>
                <option>男性</option>
                <option>女性</option>
                <option>その他</option>
              </select>
        </div>
        <div class="col-sm-9 col-sm-offset-3 user-edit-info">
          <p>この情報は解析用です。他ユーザーに共有されることはありません。</p>
        </div>
      </div>
      <div class="row form-row">
        <div class="col-sm-3"><label for="tel">hoge <i class="fa fa-lock info-private" data-toggle="popover" data-placement="top"></i></label></div>
        <div class="col-sm-4 form-group">
          <div class="row">
            <div class="col-sm-12">
              <input type="text" class="form-control" id="tel" placeholder="">
            </div>
          </div>
        </div>
        <div class="col-sm-9 col-sm-offset-3 user-edit-info">
          <p>この情報は関係者同士の連絡手段。申し込み「後」まで秘密にされます。 </p>
        </div>
      </div>
      <div class="row form-row">
        <div class="col-sm-3"><label for="email">hoge <i class="fa fa-lock info-private" data-toggle="popover" data-placement="top"></i></label></div>
        <div class="col-sm-9 form-group">
          <div class="row">
            <div class="col-sm-6">
              <input type="text" class="form-control" id="email" placeholder="">
            </div>
          </div>
        </div>
        <div class="col-sm-9 col-sm-offset-3 user-edit-info">
          <p>メールアドレスが他のkokokaraユーザーに一般公開される事はありません。<a href="#">詳しくはこちら</a></p>
        </div>
      </div>
      <div class="row form-row">
        <div class="col-sm-3"><label for="place">hoge </label></div>
        <div class="col-sm-9 form-group">
          <div class="row">
            <div class="col-sm-6">
              <input type="text" class="form-control" id="place" placeholder="例：京都市、東京都">
            </div>
          </div>
        </div>
        <div class="col-sm-9 col-sm-offset-3 user-edit-info">
          <p>ここに住所を書く必要はありません。例：京都市、東京都</p>
        </div>
      </div>
      <div class="row form-row">
        <div class="col-sm-3"><label for="comment">hoge</label></div>
        <div class="col-sm-9 form-group">
          <textarea class="form-control validate[required]" rows="3" id="comment"></textarea>
        </div>
        <div class="col-sm-9 col-sm-offset-3 user-edit-info">
          <p>自分の人柄を知ってもらいましょう。得意な事は？何が好き？自分の流儀は？</p>
        </div>
      </div>
    </div>
</div>
-->
<!--任意項目終了 -->
