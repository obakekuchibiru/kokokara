<? $this->Html->css('user-page.min', null, array('inline' => false)); ?>
<? echo $this->Html->script("validator.js");?>
<? echo $this->Html->script("jquery.add-input-area.min.js");?>

<?
echo $this->Form->create('Event', array('url' => 'addevent'));
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
<script type="text/javascript">
  function entryChange2(){
    radio = document.getElementsById('EventReward')
    if(radio[0].checked) {
      //フォーム
      document.getElementById('salary-detail').style.display = "";
    }else{
      //フォーム
      document.getElementById('salary-detail').style.display = "none";
    }
  }
</script>
<script type="text/javascript">
  $(function() {
    // ポップオーバー文言
    $('.info-private').attr('data-content','必須項目です');

    // ポップオーバーアクション
    $("[data-toggle=popover]").popover({
      trigger: 'hover', // click,hover,focus,manualを選択出来る
      html: true,       // HTMLタグを含めるか
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
                            <p>プログラムの見所やキャッチコピーなどをご記入下さい。詳細は後述の「プログラム内容」にご記入頂けます。<br>またこちらの情報は、<a href="hoge">プログラム一覧ページ</a>や<a href="hoge">meta description</a>にも反映されます。</p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="comment">プログラム内容 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-9 form-group">
                            <? echo $this->Form->input('Event.detail', array('label' => false, 'class'=>'form-control', 'style'=>'height:200px;')); ?>

                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>プログラム内容に関して自由にご記入下さい。</p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="user-gender">職務系統 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-3 form-group">
                            <?
                            echo $this->Form->select('Event.job_type', array(
                              '0'=>'マーケティング',
                              '1'=>'営業',
                              '2'=>'企画',
                              '3'=>'デザイン',
                              '4'=>'プログラミング',
                              '5'=>'サービス',
                              '6'=>'教育'),
                                array(
                                  'label'=>false,
                                  'empty'=>'選択して下さい',
                                  'class'=>'form-control'
                                  ));
                              ?>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="user-gender">期間 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-3 form-group">
                            <?
                            echo $this->Form->select('Event.period', array(
                              '0'=>'1ヶ月未満',
                              '1' =>'1-2ヶ月',
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
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="user-gender">出勤頻度 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-3 form-group">
                            <?
                            echo $this->Form->select('Event.frequency', array(
                              '1'=>'週1-2回',
                              '2' =>'週3回以上',
                              '3'=>'毎日'),
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
                            <select class="form-control" id="" name="term" style="margin-bottom:10px;">
                              <option>国名を選択して下さい</option>
                              <option>国1</option>
                              <option>国2</option>
                              <option>国3</option>
                              <option>国4</option>
                              <option>国5</option>
                            </select>
                            <? echo $this->Form->input('Event.location', array('label' => false,'name'=>'location-summary')); ?>
                            <div class="help-block with-errors"></div>
                            <p>ここに、住所の詳細を記載する必要は御座いません。おおよその地区や最寄のバス停などをご記載下さい</p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="user-gender">トップ画 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-3 form-group">
                            <input type="file" name="example" size="30" style="margin-top:8px;">
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>こちらの画像はプログラムページのトップ画像としてだけでなく、プログラム一覧ページでは当プログラムのサムネイルとしても活用されます。</p>
                          </div>
                        </div>
                        <div id="form-skill" data-toggle="validator" role="form"  class="row form-row">
                          <div class="col-sm-3">
                            <label for="tel">身につくスキル <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label>
                          </div>
                          <div class="col-sm-9 form-group" style="margin-bottom:10px;">
                            <div class="row">
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="skill" placeholder="" required="">
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 form-group">
                            <div class="row">
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="skill" placeholder="" required="">
                                <div class="help-block with-errors"></div>
                              </div>
                              <div class="col-sm-2">
                                 <button type="button" class="btn btn-default addButton"><i class="fa fa-plus"></i></button>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 form-group hide" id="optionTemplate">
                            <div class="row">
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="option[]" placeholder="">
                              </div>
                              <div class="col-sm-2">
                                 <button type="button" class="btn btn-default removeButton"><i class="fa fa-minus"></i></button>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>2個以上の記入が必須となります </p>
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

                      </div>
                  </div>
                  <!-- 必須項目終了 -->
                  <?
                  //echo $this->Form->create('Event', array('url' => 'addevent'));
                  //echo $this->Form->input('Event.title', array('label' => 'タイトル'));
                  //echo $this->Form->input('Event.about', array('label' => '概要'));
                  //echo $this->Form->input('Event.detail', array('label' => '本文'));
                  //echo $this->Form->select('Event.period', array('1'=>'1ヶ月未満','2' =>'1-2ヶ月','3'=>'3ヶ月以上','4'=>'半年以上','5'=>'1年以上'), array('label'=>'false', 'empty'=>'期間'));
                  //echo $this->Form->select('Event.job_type', array('1'=>'マーケティング','2'=>'営業','3'=>'企画','4'=>'デザイン','5'=>'プログラミング','6'=>'サービス','8'=>'教育'), array('label'=>'false', 'empty'=>'職務系統'));
                  echo $this->Form->input('Event.thumbnail', array('label' => 'サムネイル'));
                  //echo $this->Form->select('Event.frequency',array('1'=>'週1-2回','2' =>'週3回以上','3'=> '毎日'), array('label'=>'false', 'empty'=>'頻度'));
                  //echo $this->Form->input('Event.reward', array('type'=>'checkbox', 'label'=>'報酬'));
                  //echo $this->Form->input('Event.residence', array('type'=>'checkbox', 'label'=>'住居'));
                  //echo $this->Form->input('Event.transportation_expense', array('type'=>'checkbox', 'label'=>'交通費'));
                  //echo $this->Form->input('Event.salary', array('label' => '1か月あたりの給料'));
                  echo $this->Form->input('Event.skill1', array('label' => '身につくスキル１'));
                  echo $this->Form->input('Event.skill2', array('label' => '身につくスキル２'));
                  echo $this->Form->input('Event.skill3', array('label' => '身につくスキル３'));
                  echo $this->Form->input('Event.skill4', array('label' => '身につくスキル４'));
                  echo $this->Form->input('Event.skill_required', array('label' => '必要スキル'));
                  echo $this->Form->input('Event.recruit1', array('label' => '募集対象１'));
                  echo $this->Form->input('Event.recruit2', array('label' => '募集対象２'));
                  echo $this->Form->input('Event.recruit3', array('label' => '募集対象３'));
                  echo $this->Form->input('Event.recruit4', array('label' => '募集対象４'));
                  echo $this->Form->input('Event.contents', array('label' => '業務内容'));
                  echo $this->Form->input('Event.profile', array('label' => '経営者プロフィール'));
                  echo $this->Form->input('Event.staff_photo', array('label' => '担当者様の写真'));
                  echo $this->Form->input('Event.staff_message', array('label' => '担当者様からの一言'));
                  echo $this->Form->input('Event.company_id', array('type'=>'hidden', 'value'=>$nowcompany));

                  ?>
                  <div class="raw clearfix dash-elm">
                    <div class="col-sm-4 col-sm-offset-4">
                      <? echo $this->Form->end('投稿する'); ?>
                    </div>
                  </div>
                </div>
                 <!-- メインバー終了 -->
              </div>
            </div>
          </div>

        </div>
    </div>
</div>


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
