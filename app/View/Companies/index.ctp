<? $this->Html->css('user-page.min', null, array('inline' => false)); ?>



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
                    <div class="col-sm-12 main-profile">
                      <div class="profile-pic" >

                      </div>
                      <div class="main-profile-name">
                        <p><? echo $company['name']?></p>
                        <a href="#">プロフィールを見る</a><br>

                      </div>
                    </div>
                  </div>
                  <div class="raw clearfix dash-elm" style="padding-left:15px;padding-right:15px;">
                    <div class="col-sm-12 title-bar">
                      <p>SNS</p>
                    </div>
                    <div class="col-sm-12 sidebar-point" style="background:#ffffff;height:100px;">
                      <ul class="social-link">
                        <? if($company['facebook'] = null){
                          echo null;
                        }else{
                          echo $this->element('branches/fbbranch');
                        }
                        ?>
                        <?
                        if($company['twitter'] = null){
                          echo null;
                        }else{
                          echo $this->element('branches/twitterbranch');
                        }
                        ?>
                      </ul>
                    </div>

                  </div>
                </div>
                <!-- サイドバー終了 -->

                <!--　メインバー開始 -->
                <div class="col-sm-9 dashboard-mainbar">
                  <div class="raw clearfix dash-elm">
                    <div class="col-xs-12 title-bar">
                      <p><? echo $company['name']?>様、kokokaraへようこそ！</p>
                    </div>
                    <div class="col-xs-12 dash-article">
                      <p>
                        こんにちは。このマイページでは<? echo $company['name']?>様宛のメッセージや、プログラムの新規登録・編集なども行って頂くことができます。でもその前に、まずは次のことを確認して下さい。
                      </p>
                      <p>
                        <a href="#">プロフィールの編集</a>
                        <br>サムネイル写真の登録や、FacebookやTwitterアカウントを追加する事で、多くのユーザーに<? echo $company['name']?>様のことをより深く知ってもらう事ができます。
                      </p>
                      <p>
                        <a href="#">プログラムページの作成</a>
                        <br>実際にプログラムページを作成して頂くことができます。
                      </p>
                      <p>
                        <a href="#">応募状況やレビューの確認</a>
                        <br>投稿したプログラムに対して、ユーザーが応募したり、レビューが投稿されたりすると先ず<? echo $company['name']?>様に通知されます。<br>レビューなどは随時「承認」ボタンを押して頂くことで、プログラムページに反映させることができます。
                      </p>
                    </div>
                  </div>
                  <div class="raw clearfix dash-elm">
                    <div class="col-xs-12 title-bar">
                      <p>承認待ちレビュー</p>
                    </div>
                    <div class="col-xs-12 dash-article">
                      <div style="height:200px;">
                        <p>
                          現在承認待ちのレビューはありません
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="raw clearfix dash-elm">
                    <div class="col-xs-12 title-bar">
                      <p>メッセージ (新着:○件)</p>
                    </div>
                    <div class="col-xs-12 dash-article" style="height:300px;">
                      <p>
                        メッセージとか、届くのでしょうか？
                      </p>
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






<?php
echo $this->Session->flash('auth');
echo debug($company);
echo $this->Html->link('企業情報編集',array('action'=>'edit', $company['id']));
echo $this->Html->link('新規イベント登録','/companies/addevent'); ?>
<br><a href="#">イベント編集</a><br>
<a href="#">口コミ確認</a><br>
<?php echo $this->Html->link('企業情報編集',array('action'=>'edit', $company['id'])); ?><br>
<?php echo $this->Html->link('新規イベント登録','/companies/addevent'); ?><br>
<?php echo $this->Html->link('イベント編集','/companies/editevent'); ?><br>
<?php echo $this->Html->link('口コミ確認','/companies/reviewindex'); ?><br>
<?php echo $this->Html->link('ログアウト', '/companies/logout/'); ?>
