<? $this->Html->css('user-page.min.css', null, array('inline' => false)) ?>
<div id="main-container" style="background:#f3f3f3;">
    <div id="mypage-tabs" class="hidden-xs">
        <div class="container nopadding-vw" style="background:#565a5c;">
            <div class="raw">
                <div class="container">
                    <div class="raw">
                        <ul>
                            <li class="col-sm-2"><a href="#">ダッシュボード</a></li>
                            <li class="col-sm-2"><a href="#">プロフィール</a></li>
                            <li class="col-sm-2"><a href="#">メッセージ</a></li>
                            <li class="col-sm-2"><a href="#">お気に入り</a></li>
                            <li class="col-sm-2"><a href="#">お友達を招待</a></li>
                        </ul>
                    </div>
                </div>
             </div>
        </div>
    </div>
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
                        <p>名前 太郎</p>
                        <a href="#">プロフィールを見る</a><br>

                      </div>
                    </div>
                  </div>
                  <div class="raw clearfix dash-elm" style="padding-left:15px;padding-right:15px;">
                    <div class="col-sm-12 title-bar">
                      <p>ポイント</p>
                    </div>
                    <div class="col-sm-12 sidebar-point" style="background:#ffffff;height:100px;">
                      <p>○○さんのポイントは、</p>
                    </div>

                  </div>
                </div>
                <!-- サイドバー終了 -->

                <!--　メインバー開始 -->
                <div class="col-sm-9 dashboard-mainbar">
                  <div class="raw clearfix dash-elm">
                    <div class="col-xs-12 title-bar">
                      <p>○○さん、Kokokaraにようこそ！</p>
                    </div>
                    <div class="col-xs-12 dash-article">
                      <p>
                        こんにちは。このマイページでは○○さんへのメッセージや、kokokaraと歩んだ軌跡など、あらゆる事を管理することができます。でもその前に、まずは次のことを確認して下さい。
                      </p>
                      <p>
                        <a href="#">プロフィールをつくろう</a>
                        <br>写真をアップロードしたり、略歴を書いて、たくさんの人達に自分のことを知ってもらおう。
                      </p>
                      <p>
                        <a href="#">二人の若い紳士が</a>
                        <br>すっかりイギリスの兵隊のかたちをして、ぴかぴかする鉄砲をかついで、白熊のような犬を二疋ひきつれて
                      </p>
                      <p>
                        <a href="#">ポイントについて</a>
                        <br>知っておこう。
                      </p>
                    </div>
                  </div>
                  <div class="raw clearfix dash-elm">
                    <div class="col-xs-12 title-bar">
                      <p>通知</p>
                    </div>
                    <div class="col-xs-12 dash-article">
                      <div style="height:200px;">
                        <p>
                          通知とか、来るのでしょうか？
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
