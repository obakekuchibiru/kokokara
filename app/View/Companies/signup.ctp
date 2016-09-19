<? $this->Html->css('user-page.min', null, array('inline' => false)); ?>
<? echo $this->Html->script("validator.js");?>
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
                      <p>企業アカウントの作成</p>
                    </div>
                    <div class="col-xs-12 dash-article form-field">
                      <?php
                        echo $this->Html->para(null, '初めまして。この度はkokokara Universityをご利用頂き誠に有り難う御座います。
                        こちらのページにご登録される企業・団体様の情報をご入力下さい。必須項目が多く恐縮では御座いますが、よろしくお願い致します。<br>
                        また何かご不明な点が御座いましたら、<a href="#">メールより</a>お問い合わせ頂けます。');
                        echo $this->Html->link(
                          'プライバシーポリシー',
                          array(
                              'controller' => 'stage1',
                              'action' => 'target',
                              'full_base' => true
                              )
                          );
                          echo $this->Html->link(
                            '個人情報取り扱い',
                            array(
                                'controller' => 'stage1',
                                'action' => 'target',
                                'full_base' => true
                                )
                            );
                      ?>
                      <!--
                      <form class="row form-row" data-toggle="validator" role="form">
                        <div class="col-sm-3">
                          <label for="CompanyName">企業・団体名 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label>
                        </div>
                        <div class="col-sm-9 form-group">
                          <div class="row">
                            <div class="col-sm-12">

                              <div class="help-block with-errors"></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                          <p>ご登録される企業・団体名をご入力下さい</p>
                        </div>
                      </form>
                      -->
                        <div class="row form-row" data-toggle="validator" role="form">
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
                        </div>

                        <div class="row form-row" data-toggle="validator" role="form">
                          <div class="col-sm-3"><label for="companyEmail">メールアドレス <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
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
                        </div>
                        <div class="row form-row" data-toggle="validator" role="form">
                          <div class="col-sm-3"><label for="CompanyPass">パスワード <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-9 form-group">
                            <div class="row">
                              <div class="col-sm-6">
                                <?php echo $this->Form->input('Company.password', array('type'=>'password', 'data-minlength'=>'6','class'=>'form-control','id'=>'inputPassword','label' => false, 'required'));?>
                              </div>
                              <div class="col-sm-6">
                              <!--
                                <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="パスワードが一致しておりません" placeholder="パスワード確認" required>
                                -->
                                 <?php echo $this->Form->input('Company.password_confirm'); ?>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <!-- 必須項目終了 -->
                  <?php echo $this->Form->input('Company.kokokara_pass'); ?>

                  <div class="raw clearfix dash-elm">
                    <div class="col-sm-4 col-sm-offset-4">
                      <?php echo $this->Form->end('登録する', array('class' => 'btn btn-primary btn-lg btn-block')); ?>
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
