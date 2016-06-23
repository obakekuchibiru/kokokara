<? $this->Html->css('user-page.min', null, array('inline' => false)); ?>
<?echo $this->Html->script("validator.js");?>

<?php
echo $this->Form->create('Company', array('url' => 'signup'));
?>

<div id="main-container" style="background:#f3f3f3;">
    <!--
    <div id="mypage-tabs" class="hidden-xs">
        <div class="container nopadding-vw" style="background:#565a5c;">
            <div class="raw">
                <div class="container">
                    <div class="raw">
                        <ul>
                            <li class="col-sm-2"><a href="#">ダッシュボード</a></li>
                            <li class="col-sm-2"><a href="#">プロフィール</a></li>
                            <li class="col-sm-2"><a href="#">メッセージ</a></li>
                            <li class="col-sm-2"><a href="#">お友達を招待</a></li>
                            <li class="col-sm-2"><a href="#">おきにいり</a></li>
                        </ul>
                    </div>
                </div>
             </div>
        </div>
    </div>
    -->
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
                      <p>必須項目</p>
                    </div>
                    <div class="col-xs-12 dash-article form-field">
                        <p>
                          初めまして。この度はkokokara Universityをご利用頂き誠に有り難う御座います。
                          こちらのページにご登録される企業・団体様の情報をご入力下さい。必須項目が多く恐縮では御座いますが、よろしくお願い致します。<br>
                          また何かご不明な点が御座いましたら、<a href="#">メールより</a>お問い合わせ頂けます。</p>
                          <a href="#">プライバシーポリシー</a><a href="#">利用規約</a>
                        </p>
                        <form class="row form-row" data-toggle="validator" role="form">
                          <div class="col-sm-3">
                            <label for="CompanyName">企業・団体名 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label>
                          </div>
                          <div class="col-sm-9 form-group">
                            <div class="row">
                              <div class="col-sm-12">
                                <?php echo $this->Form->input('Company.name', array('class' => 'form-control','label' => false));?>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>ご登録される企業・団体名をご入力下さい</p>
                          </div>
                        </form>
                        <form class="row form-row" data-toggle="validator" role="form">
                          <div class="col-sm-3"><label for="email">メールアドレス <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-9 form-group">
                            <div class="row">
                              <div class="col-sm-6">
                                <?php echo $this->Form->input('Company.email', array('class' => 'form-control','label' => false));?>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>本メールアドレスはkokokaraと企業様間の連絡他、ログイン時などに用いられます。他のユーザーに一般公開される事はありません。</p>
                          </div>
                        </form>
                        <form class="row form-row" data-toggle="validator" role="form">
                          <div class="col-sm-3"><label for="email">パスワード <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-9 form-group">
                            <div class="row">
                              <div class="col-sm-6">
                                <? echo $this->Form->input('Company.password', array('type'=>'password', 'data-minlength'=>'6','class'=>'form-control','id'=>'inputPassword','label' => false, 'required'));?>

                              </div>
                              <div class="col-sm-6">
                                <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="パスワードが一致しておりません" placeholder="パスワード確認" required>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>

                        </form>


                        <form class="row form-row">
                          <div class="col-sm-3"><label for="comment">会社概要</label></div>
                          <div class="col-sm-9 form-group">
                            <textarea class="form-control" style="height:100px;" id="comment"></textarea>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>事業内容などについて自由にご記入下さい。</p>
                          </div>
                        </form>
                        <form class="row form-row">
                          <div class="col-sm-3"><label for="user-gender">所在地 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-9 form-group" style="margin-bottom:10px;">
                            <label class="radio-inline"><input type="radio" name="location" value="1" onclick="entryChange1();"checked="checked">国内</label>
                            <label class="radio-inline"><input type="radio" name="location" value="2" onclick="entryChange1();">国外</label>
                          </div>
                          <div id="location-domestic" class="col-sm-7 col-sm-offset-3 form-group">
                            <select class="form-control" id="" name="term" style="margin-bottom:10px; required">
                              <option value="" selected>都道府県
                                <optgroup label="北海道・東北">
                                  <option value="1">北海道
                                  <option value="2">青森県
                                  <option value="3">岩手県
                                  <option value="4">宮城県
                                  <option value="5">秋田県
                                  <option value="6">山形県
                                  <option value="7">福島県
                                </optgroup>
                                <optgroup label="関東">
                                  <option value="8">茨城県
                                  <option value="9">栃木県
                                  <option value="10">群馬県
                                  <option value="11">埼玉県
                                  <option value="12">千葉県
                                  <option value="13">東京都
                                  <option value="14">神奈川県
                                </optgroup>
                                <optgroup label="中部">
                                  <option value="15">新潟県
                                  <option value="16">富山県
                                  <option value="17">石川県
                                  <option value="18">福井県
                                  <option value="19">山梨県
                                  <option value="20">長野県
                                  <option value="21">岐阜県
                                  <option value="22">静岡県
                                  <option value="23">愛知県
                                </optgroup>
                                <optgroup label="関西">
                                  <option value="24">三重県
                                  <option value="25">滋賀県
                                  <option value="26">京都府
                                  <option value="27">大阪府
                                  <option value="28">兵庫県
                                  <option value="29">奈良県
                                  <option value="30">和歌山県
                                </optgroup>
                                <optgroup label="中国・四国">
                                  <option value="31">鳥取県
                                  <option value="32">島根県
                                  <option value="33">岡山県
                                  <option value="34">広島県
                                  <option value="35">山口県
                                  <option value="36">徳島県
                                  <option value="37">香川県
                                  <option value="38">愛媛県
                                  <option value="39">高知県
                                </optgroup>
                                <optgroup label="九州・沖縄">
                                  <option value="40">福岡県
                                  <option value="41">佐賀県
                                  <option value="42">長崎県
                                  <option value="43">熊本県
                                  <option value="44">大分県
                                  <option value="45">宮崎県
                                  <option value="46">鹿児島県
                                  <option value="47">沖縄県
                                </optgroup>
                            </select>
                            <div class="help-block with-errors"></div>
                            都市名：
                            <input type="text" class="form-control" name="skill" placeholder="" required="">
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
                            都市名：
                            <input type="text" class="form-control" name="location-summary" placeholder="" required="">
                            <div class="help-block with-errors"></div>
                            <p>ここに、住所の詳細を記載する必要は御座いません。おおよその地区や最寄のバス停などをご記載下さい</p>
                          </div>
                        </form>
                        <form class="row form-row">
                          <div class="col-sm-3"><label for="user-gender">職務系統 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-3 form-group">
                                <select class="form-control" id="user-gender">
                                  <option>- (指定無し)</option>
                                  <option>マーケティング</option>
                                  <option>営業</option>
                                  <option>企画</option>
                                  <option>デザイン</option>
                                  <option>プログラミング</option>
                                  <option>サービス</option>
                                  <option>教育</option>
                                </select>
                          </div>
                        </form>
                        <form class="row form-row">
                          <div class="col-sm-3"><label for="user-gender">期間 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-3 form-group">
                                <select class="form-control" id="user-gender" name="term">
                                  <option>選択して下さい</option>
                                  <option>1ヶ月未満</option>
                                  <option>1-2ヶ月</option>
                                  <option>3ヶ月以上</option>
                                  <option>6ヶ月以上</option>
                                  <option>1年以上</option>
                                </select>
                          </div>
                        </form>

                        <form class="row form-row">
                          <div class="col-sm-3"><label for="user-gender">トップ画 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-3 form-group">
                            <input type="file" name="example" size="30" style="margin-top:8px;">
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>こちらの画像はプログラムページのトップ画像としてだけでなく、プログラム一覧ページでは当プログラムのサムネイルとしても活用されます。</p>
                          </div>
                        </form>
                        <form id="form-skill" data-toggle="validator" role="form"  class="row form-row">
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
                        </form>
                        <form id="form-skill" data-toggle="validator" role="form"  class="row form-row">
                          <div class="col-sm-3">
                            <label for="tel">募集対象</label>
                          </div>
                          <div class="col-sm-9 form-group" style="margin-bottom:10px;">
                            <div class="row">
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="skill" placeholder="" required="">
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 form-group">
                            <div class="row">
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="skill" placeholder="" required="">
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
                            <p></p>
                          </div>
                        </form>
                        <form class="row form-row">
                          <div class="col-sm-3"><label for="comment">必要スキル</label></div>
                          <div class="col-sm-9 form-group">
                            <textarea class="form-control" style="height:100px;" id="comment"></textarea>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>プログラムへの参加にあたって、応募者に求めるスキルや必要条件などが御座いましたら自由にご記入下さい。</p>
                          </div>
                        </form>
                        <form class="row form-row">
                          <div class="col-sm-3"><label for="place">その他手当 </label></div>
                          <div class="col-sm-9 form-group">
                            <label class="checkbox-inline"><input type="checkbox" value="">報酬</label>
                            <label class="checkbox-inline"><input type="checkbox" value="">給与</label>
                            <label class="checkbox-inline"><input type="checkbox" value="">交通費</label>
                            <label class="checkbox-inline"><input type="checkbox" value="">住居支援</label>
                          </div>
                        </form>
                      </div>
                  </div>
                  <!-- 必須項目終了 -->










                  <!-- 任意項目開始 -->
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

                  <!--任意項目終了 -->
                  <div class="raw clearfix dash-elm">
                    <div class="col-sm-4 col-sm-offset-4">
                      <?echo $this->Form->end('保存する', array('class' => 'btn btn-primary btn-lg btn-block'));?>
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
