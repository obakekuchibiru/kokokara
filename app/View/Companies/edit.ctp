<? $this->Html->css('user-page.min', null, array('inline' => false)); ?>
<? echo $this->Html->script("validator.js");?>
<? echo $this->Html->script("jquery.add-input-area.min.js");?>

<?php
debug($company_data);
?>
<?
echo $this->Form->create('Company', array('url'=>'edit', 'type'=>'file'));
echo $this->Form->input('Company.id',array('type'=>'hidden','value'=>$company_data['Company']['id']));
//echo $this->Form->input('Company.name', array('label'=>'企業名'));
//echo $this->Form->input('Company.email', array('label'=>'メールアドレス'));
//echo $this->Form->input('Company.member_num', array('label'=>'従業員数'));
//echo $this->Form->input('Company.country', array('label'=>'場所（国名）'));
//echo $this->Form->input('Company.state', array('label'=>'場所（都市名）'));
//echo $this->Form->input('Company.duties', array('label'=>'会社概要（事業内容）'));
//echo $this->Form->input('Company.phone', array('label'=>'電話番号'));
//echo $this->Form->input('Company.url', array('label'=>'サイトURL'));
//echo $this->Form->input('Company.industry_type', array('label'=>'サービスの業種'));
//echo $this->Form->input('Logo.0.attachment', array('type'=>'file', 'label'=>'企業ロゴ'));
//echo $this->Form->input('Logo.0.model', array('type'=>'hidden', 'value'=>'Company'));
//echo $this->Form->input('Company.facebook', array('label'=>'Facebookページのurl'));
//echo $this->Form->input('Company.twitter', array('label'=>'twitterアカウント'));
//echo $this->Form->end('内容更新');

?>

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
                      <p>企業プロフィール</p>
                    </div>
                    <div class="col-xs-12 dash-article form-field">
                        <p>
                          こんにちは。kokokara Universityをご利用頂き誠に有り難う御座います。
                          こちらのページ上で御社のプロフィールを編集頂けます。<br>
                          また何かご不明な点が御座いましたら、<a href="#">メールより</a>お問い合わせ頂けます。</p>
                        </p>
                        <div class="row form-row" data-toggle="validator" role="form">
                          <div class="col-sm-3"><label for="title">企業名 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-9 form-group">
                            <div class="row">
                              <div class="col-sm-12">
                                <? echo $this->Form->input('Company.name', array('label'=>false));?>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>こちらが企業名として表示されます。</p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="comment">メール</label></div>
                          <div class="col-sm-9 form-group">
                            <? echo $this->Form->input('Company.email', array('label'=>false));?>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>ご登録されるメールアドレスを記載して下さい。<br>こちらのメールアドレスには、ユーザーからの応募などといった重要な情報も送られる可能性がありますので、その旨ご理解下さい。</p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="comment">お電話番号</label></div>
                          <div class="col-sm-9 form-group">
                            <? echo $this->Form->input('Company.phone', array('label'=>false)); ?>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>お電話番号を記載して下さい。</p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="user-gender">業界 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-3 form-group">
                            <?
                            echo $this->Form->select('Company.industry_type', array(
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
                          <div class="col-sm-3"><label for="comment">従業員数</label></div>
                          <div class="col-sm-9 form-group">
                            <? echo $this->Form->input('Company.member_num', array('label'=>false)); ?>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>お電話番号を記載して下さい。</p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="comment">事業内容</label></div>
                          <div class="col-sm-9 form-group">
                            <? echo $this->Form->input('Company.duties', array('label'=>false,'class'=>'form-control', 'style'=>'height:200px;'));?>

                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>プログラム内容に関して自由にご記入下さい。</p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="user-gender">会社所在地 <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-9 form-group" style="margin-bottom:10px;">
                            <? echo $this->Form->input('Company.country', array('label'=>'場所（国名）'));?>
                            <? echo $this->Form->input('Company.state', array('label'=>'場所（都市名）'));?>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="user-gender">企業ロゴ <i class="fa fa-star info-private" data-toggle="popover" data-placement="top"></i></label></div>
                          <div class="col-sm-3 form-group">
                            <?
                            echo $this->Form->input('Logo.0.attachment', array('type'=>'file', 'label'=>false));
                            echo $this->Form->input('Logo.0.model', array('type'=>'hidden', 'value'=>'Company'));
                            echo $this->Form->input('Logo.0.purpose', array('type'=>'hidden', 'value'=>'Logo'));
                            ?>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>こちらの画像はプログラムページのだけでなく、プログラム一覧ページでは御社のサムネイルとしても活用されます。</p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="comment">サイトURL</label></div>
                          <div class="col-sm-9 form-group">
                            <? echo $this->Form->input('Company.url', array('label'=>'サイトURL'));?>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>会社のホームページやそれに該当するサイトがあれば、URLをご記入下さい。</p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="comment">Facebook</label></div>
                          <div class="col-sm-9 form-group">
                          <? echo $this->Form->input('Company.facebook', array('label'=>false));?>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>※https://www.facebook.com/以下をご記入下さい。例)https://www.facebook.com/<i><b>kokokaragroup</b></i></p>
                          </div>
                        </div>
                        <div class="row form-row">
                          <div class="col-sm-3"><label for="comment">Twitter</label></div>
                          <div class="col-sm-9 form-group">
                            <?echo $this->Form->input('Company.twitter', array('label'=>false));?>
                          </div>
                          <div class="col-sm-9 col-sm-offset-3 user-edit-info">
                            <p>※https://twitter.com/以下をご記入下さい。例)https://twitter.com/<i><b>miraikara_news</b></i></p>
                          </div>
                        </div>





                        <div class="raw clearfix dash-elm">
                          <div class="col-sm-4 col-sm-offset-4">
                            <? echo $this->Form->end('内容更新'); ?>
                          </div>
                        </div>
                      </div>
                  </div>
                  <!-- 必須項目終了 -->
                  <!-- 任意項目開始-->



                </div>
                 <!-- メインバー終了 -->
              </div>
            </div>
          </div>

        </div>
    </div>
</div>
