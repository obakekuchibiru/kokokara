<?echo $this->Html->script("user.js");?>
<?echo $this->Html->script("readmore.min.js");?>
<? echo $this->Html->script('remodal.js');?>

<? $this->Html->css('remodal', null, array('inline' => false)) ?>
<? $this->Html->css('remodal-default-theme', null, array('inline' => false)) ?>
<? $this->Html->css('event.min', null, array('inline' => false)) ?>

<script type="text/javascript">
      $(function () {
        $('article').readmore({
          speed: 400,
          collapsedHeight: 200,
          moreLink: '<a href="#">続きを読む</a>',
          lessLink: '<a href="#">閉じる</a>'
        });
      });
</script>
<div id="main_container">
  <div id="event-container">
    <div id="event-picture">
      <div class="container-fluid nopadding">
        <div class="row">
          <div class="col-xs-12 event-img" style="background-image:url('img/urban.jpg')">

          </div>
        </div>
      </div>
    </div>
    <div id="event-summary">
      <div class="container">
        <!-- サマリーヘッダー1 大枠 -->
        <div class="row">
          <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-0">
            <div class="row" style="padding-top:40px;">
              <!--　サマリーヘッダー1 左側 -->
              <div class="col-sm-3 col-sm-offset-0 col-xs-12">
                <div class="event-sm-suppier-thumb" style="background-image:url('img/cmp-sample.jpg');">
                </div>
                <p style="text-align:center;padding-top:10px;font-size:14px;">株式会社kokokara Group</p>
              </div>
              <!--　サマリーヘッダー1 左側終 -->
              <!--　サマリーヘッダー1 右側　-->
              <div class="col-sm-9 col-sm-offset-0 col-xs-12">
                <div class="ev-sm-title">
                  <h1>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h1>
                </div>
              </div>
              <div class="row ev-sm-icons">
                <div class="col-xs-3 col-sm-2">
                  <div class="icon-block"><p class="sample-font"></p></div>
                  <p></p>
                </div>
                <div class="col-xs-3 col-sm-2">
                  <div class="icon-block"><p class="sample-font"><i class="fa fa-users"></i></p></div>
                  <p>社員数</p>
                </div>
                <div class="col-xs-3 col-sm-2">
                  <div class="icon-block"><p class="sample-font"><i class="fa fa-jpy"></i></p></div>
                  <p>給与有り</p>
                </div>
                <div class="col-xs-3 col-sm-2">
                  <div class="icon-block"><p class="sample-font"><i class="fa fa-calendar"></i></p></div>
                  <p>3ヶ月以上</p>
                </div>
              </div>
              <!--　サマリーヘッダー1 右側終　-->
            </div>
            <!-- サマリーヘッダー1 下側 -->
            <div class="row">
              <div class="col-sm-12 ev-sm-lower hidden-lg">
                <div class="row col-label" style="padding-top:15px; padding-left:20px;">
                  <h2 style="padding:0;margin:0;color:#f3f3f3;font-size:18px;">このインターンに関して</h2>
                </div>
                <div class="row">
                  <div class="col-sm-12" style="padding:20px 35px">
                    <div style="height:auto;min-height:75px;">
                      <p style="font-size:15px;padding-bottom:10px;">ご提供頂けるインターンプログラムの概要やアピールポイントなどをこちらで表示致します。なければ、後述の「インターン詳細」の最初の200文字が掲載されます。ご提供頂けるインターンプログラムの概要やアピールポイントなどををこちらで表示致します。なければ、後述の「インターン詳細」の最初の200文字が掲載されます。</p>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg btn-block" data-remodal-target="modal">申し込む</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 ev-sm-lower2 hidden-xs">
                <div class="row">
                  <div class="col-sm-2" style="text-align:center;">
                    <div class="person-in-charge" style="background-image:url('img/gagamaru.jpg');"></div>
                    <p class="person-in-charge-name hidden-lg">担当者より</p>
                  </div>
                  <div class="col-sm-10">
                    <div class="question_Box">
                      <div class="arrow_question">
                           <p style="margin-bottom:0;">プログラム担当者からの一言コメントを掲載します。文字数は140字までです。プログラム担当者からの一言コメントを掲載します。文字数は140字までです。プログラム担当者からの一言コメントを掲載します。文字数は140字までです。この文章が終わる頃、それはちょうど140字となっております</p>

                      </div><!-- /.arrow_question -->

                      </div><!-- /.question_Box -->

                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- lg用サイドシフト -->
          <div id="sticker">
            <div class="col-lg-3 col-lg-offset-8 visible-lg ev-sm-lg-side">
              <div class="row col-label" style="background:#555555;text-align:center;">
                <h2 style="padding:10px 0;margin:0;color:#f3f3f3;font-size:18px;">このインターンに関して</h2>
              </div>
              <div class="row">
                <div class="col-sm-12" style="padding:20px">
                  <div style="height:auto;">
                    <p style="font-size:15px;padding-bottom:10px;">ご提供頂けるインターンプログラムの概要やアピールポイントなどをこちらで表示致します。なければ、後述の「インターン詳細」の最初の200文字が掲載されます。ご提供頂けるインターンプログラムの概要やアピールポイントなどををこちらで表示致します。なければ、後述の「インターン詳細」の最初の200文字が掲載されます。</p>
                  </div>
                  <button type="button" class="btn btn-primary btn-lg btn-block" data-remodal-target="modal">申し込む</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container ev-details"><div class="row">
        <div class="container">
           <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-0">
              <h3>このプログラムについて</h3>
              <!--
              <p>
                ではみなさんは、そういうふうに川だと云いわれたり、乳の流れたあとだと云われたりしていたこのぼんやりと白いものがほんとうは何かご承知ですか。<br><br>
                先生は、黒板に吊つるした大きな黒い星座の図の、上から下へ白くけぶった銀河帯のようなところを指さしながら、みんなに問といをかけました。<br>
　                 カムパネルラが手をあげました。それから四五人手をあげました。ジョバンニも手をあげようとして、急いでそのままやめました。<br>
              たしかにあれがみんな星だと、いつか雑誌で読んだのでしたが、このごろはジョバンニはまるで毎日教室でもねむく、本を読むひまも読む本もないので、なんだかどんなこともよくわからないという気持ちがするのでした。<br>
　                 ところが先生は早くもそれを見附みつけたのでした。<br><br>
                「ジョバンニさん。あなたはわかっているのでしょう。」
              </p>
              -->

              <div class="row ev-detail-table">
                <hr>
                <div class="col-sm-4 left"><p class="table-subtitle">プログラム概要</p></div>
                <div class="col-sm-8 left">
                  <div class="row">
                    <div class="col-sm-6 left"><p class="table-text">期間：<b>3ヶ月間</b></p></div>
                    <div class="col-sm-6 left"><p class="table-text">頻度：<b>週5日</b></p></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 left"><p class="table-text">職務：<b>マーケティング</b></p></div>
                    <div class="col-sm-6 left"><p class="table-text">報酬：<b>あり</b></p></div>
                  </div>
                </div>
              </div>
              <div class="row ev-detail-table">
                <hr>
                <div class="col-sm-4 left"><p class="table-subtitle">身につくスキル</p></div>
                <div class="col-sm-8 left">
                  <div class="row">
                    <div class="col-sm-12 left"><p class="table-text">スキル1：<b>13文字ってどれくらい？</b></p></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 left"><p class="table-text">スキル2：<b>13文字ってこれぐらい。</b></p></div>
                  </div>
                </div>
              </div>
              <div class="row ev-detail-table">
                <hr>
                <div class="col-sm-4 left"><p class="table-subtitle">募集対象</p></div>
                <div class="col-sm-8 left">
                  <div class="row">
                    <div class="col-sm-12 left"><p class="table-text">条件1：<b>やる気のある大学生3回生</b></p></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 left"><p class="table-text">条件2：<b>マーケティングに興味のある人</b></p></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12 left"><p class="table-text">条件3：<b>人とのコミュニケーションが好きな人</b></p></div>
                  </div>
                </div>
              </div>
              <div class="row ev-detail-table">
                <hr>
                <div class="col-sm-4 left"><p class="table-subtitle">プログラム内容</p></div>
                <div class="col-sm-8 left ev-detail-text">
                  <article>
                  <p class="table-text">　吾輩は猫である。名前はまだ無い。
　どこで生まれたか頓と見當がつかぬ。何ても暗薄いじめじめした所でニャー泣いて居た事丈は記憶して居る。吾輩はこゝで始めて人間といふものを見た。然もあとで聞くとそれは書生といふ人間で一番獰惡な種族であつたさうだ。<br><br>　此書生といふのは時々我々を捕へて煮て食ふといふ話である。然し其當時は何といふ考もなかつたから別段恐しいとも思はなかつた。但彼の掌に載せられてスーと持ち上げられた時何だかフハフハした感じが有つた許りである。掌の上で少し落ち付いて書生の顏を見たが所謂人間といふものゝ見始であらう。此の時妙なものだと思つた感じが今でも殘つて居る。第一毛を以て裝飾されべき筈の顏がつる／＼して丸で藥罐だ。其後猫にも大分逢つたがこんな片輪には一度も出會はした事がない。加之顏の眞中が餘りに突起して居る。そうして其穴の中から時々ぷう／＼と烟を吹く。どうも咽せぽくて實に弱つた。是が人間の飮む烟草といふものである事は漸く此頃知つた。
　此書生の掌の裏でしばらくはよい心持に坐つて居つたが、暫くすると非常な速力で運轉し始めた。書生が動くのか自分丈が動くのか分らないが無暗に眼が廻る。胸が惡くなる。到底助からないと思つて居ると、どさりと音がして眼から火が出た。<br>　夫迄は記憶して居るがあとは何の事やらいくら考へ出さうとしても分らない。
　ふと氣が付いて見ると書生は居ない。澤山居つた兄弟が一疋も見えぬ。肝心の母親さへ姿を隱して仕舞つた。其上今迄の所とは違つて無暗に明るい。眼を明いて居られぬ位だ。果てな何でも容子が可笑いと、のそ這ひ出して見ると非常に痛い。<br><br>　吾輩は藁の上から急に笹原の中へ棄てられたのである。</p>
                  </article>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- 写真集 -->


        <div class="container ev-album">
          <div class="row"> <!-- 上側 -->
            <div class="ev-album-pic-top col-xs-12 col-sm-6 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-0">
              <div class="ev-album-pic-control"style="background-image:url('img/gagamaru.jpg');"></div>
            </div>
            <div class="ev-album-pic-top hidden-xs col-sm-6 col-md-5 col-lg-4">
              <div class="ev-album-pic-control"style="background-image:url('img/sample1.jpg');"></div>
            </div>
            <div class="col-lg-4 visible-lg"></div>
          </div>
          <div class="row hidden-xs"> <!-- 下側 -->
            <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-0">
              <div class="row">
                 <div class="ev-album-pic-bottom col-sm-4">
                   <div class="ev-album-pic-control"style="background-image:url('img/sample3.jpg');"></div>
                 </div>
                 <div class="ev-album-pic-bottom col-sm-4">
                   <div class="ev-album-pic-control"style="background-image:url('img/sample4.jpg');"></div>
                 </div>
                 <div class="ev-album-pic-bottom col-sm-4">
                   <div class="ev-album-pic-control"style="background-image:url('img/face-sample.jpeg');"></div>
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
            <div class="row">
              <div class="col-sm-2 col-xs-3" style="text-align:center;">
                <div class="person-in-charge" style="background-image:url('img/face-sample2.jpg');"></div>
                <p>経験者より</p>
              </div>
              <div class="col-sm-10 col-xs-9">
                <div class="question_Box">
                  <div class="arrow_question">
                    <article>
                       <p style="margin-bottom:0;">カムパネルラ、また僕たち二人きりになったねえ、どこまでもどこまでも一緒に行こう。僕はもうあのさそりのようにほんとうにみんなの幸さいわいのためならば僕のからだなんか百ぺん灼やいてもかまわない。<br>
                      「うん。僕だってそうだ。」カムパネルラの眼にはきれいな涙なみだがうかんでいました。
                      「けれどもほんとうのさいわいは一体何だろう。」ジョバンニが云いました。
                      「僕わからない。」カムパネルラがぼんやり云いました。
                      「僕たちしっかりやろうねえ。」ジョバンニが胸いっぱい新らしい力が湧わくようにふうと息をしながら云いました。
                      カムパネルラ、また僕たち二人きりになったねえ、どこまでもどこまでも一緒に行こう。僕はもうあのさそりのようにほんとうにみんなの幸さいわいのためならば僕のからだなんか百ぺん灼やいてもかまわない。<br>
                     「うん。僕だってそうだ。」カムパネルラの眼にはきれいな涙なみだがうかんでいました。
                     「けれどもほんとうのさいわいは一体何だろう。」ジョバンニが云いました。
                     「僕わからない。」カムパネルラがぼんやり云いました。
                     「僕たちしっかりやろうねえ。」ジョバンニが胸いっぱい新らしい力が湧わくようにふうと息をしながら云いました。
                     カムパネルラ、また僕たち二人きりになったねえ、どこまでもどこまでも一緒に行こう。僕はもうあのさそりのようにほんとうにみんなの幸さいわいのためならば僕のからだなんか百ぺん灼やいてもかまわない。<br>
                    「うん。僕だってそうだ。」カムパネルラの眼にはきれいな涙なみだがうかんでいました。
                    「けれどもほんとうのさいわいは一体何だろう。」ジョバンニが云いました。
                    「僕わからない。」カムパネルラがぼんやり云いました。
                    「僕たちしっかりやろうねえ。」ジョバンニが胸いっぱい新らしい力が湧わくようにふうと息をしながら云いました。
                    カムパネルラ、また僕たち二人きりになったねえ、どこまでもどこまでも一緒に行こう。僕はもうあのさそりのようにほんとうにみんなの幸さいわいのためならば僕のからだなんか百ぺん灼やいてもかまわない。<br>
                   「うん。僕だってそうだ。」カムパネルラの眼にはきれいな涙なみだがうかんでいました。
                   「けれどもほんとうのさいわいは一体何だろう。」ジョバンニが云いました。
                   「僕わからない。」カムパネルラがぼんやり云いました。
                   「僕たちしっかりやろうねえ。」ジョバンニが胸いっぱい新らしい力が湧わくようにふうと息をしながら云いました。</p>
                    </article>
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
                        </div>




                  </div><!-- /.arrow_question -->

                  </div><!-- /.question_Box -->

              </div>
            </div>
          </div>
          <div class="col-sm-12 col-lg-8 ev-sm-review">
            <div class="row">
              <div class="col-sm-2 col-xs-3" style="text-align:center;">
                <div class="person-in-charge" style="background-image:url('img/face-sample.jpeg');"></div>
                <p>経験者より</p>
              </div>
              <div class="col-sm-10 col-xs-9">
                <div class="question_Box">
                  <div class="arrow_question">
                    <article>
                       <p style="margin-bottom:0;">ジョバンニはまるで鉄砲丸のように立ちあがりました。そして誰にも聞えないように窓の外へからだを乗り出して力いっぱいはげしく胸をうって叫びそれからもう咽喉のどいっぱい泣きだしました。もうそこらが一ぺんにまっくらになったように思いました。</p>
                     </article>
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
                       </div>
                  </div><!-- /.arrow_question -->

                  </div><!-- /.question_Box -->

              </div>
            </div>
          </div>
          <div class="col-sm-12 col-lg-8 ev-sm-review">
            <div class="row">
              <div class="col-sm-2 col-xs-3" style="text-align:center;">
                <div class="person-in-charge" style="background-image:url('img/face-sample.jpeg');"></div>
                <p>経験者より</p>
              </div>
              <div class="col-sm-10 col-xs-9">
                <div class="question_Box">
                  <div class="arrow_question">
                    <article>
                      <p style="margin-bottom:0;">Moon river, wider than a mile
                      I'm crossing you in style some day
                      Old dream maker, you heart breaker
                      Wherever you're going
                      I'm going your way
                      </p>
                    </article>
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
                        </div>

                  </div><!-- /.arrow_question -->

                  </div><!-- /.question_Box -->

              </div>
            </div>
          </div>
        </div>
      </div> <!-- ev-revew container end -->
    </div>
  </div>
</div>
</div>
<div class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking:false">
<button data-remodal-action="close" class="remodal-close"></button>
<h1>始まらない旅は遂げられない</h1>
<p><i>The only impossible journey is the one you never begin. <br>ーAnthony Robbins</i></p>
  <div class="row" style="text-align:left;">
    <div class="col-sm-6">
      <img src="img/zeppelin.jpg" style="width:100%;padding-bottom:20px;">
    </div>
    <div class="col-sm-6">
      <table>

      </table>
    </div>
  </div>
<button data-remodal-action="cancel" class="remodal-cancel">戻る</button>
<button data-remodal-action="confirm" class="remodal-confirm">ログイン</button>
</div>
