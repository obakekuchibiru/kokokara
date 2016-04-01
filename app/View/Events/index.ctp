<?echo $this->Html->script("user.js");?>
<?echo $this->Html->script("readmore.min.js");?>
<? $this->Html->css('event', null, array('inline' => false)) ?>
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
            <div class="raw">
              <div class="col-xs-12 event-img" style="background-image:url('img/urban.jpg')">

              </div>
            </div>
          </div>
        </div>
        <div id="event-summary">
          <div class="container">
            <!-- サマリーヘッダー1 大枠 -->
            <div class="raw"> 
              <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-0">
                <div class="raw" style="padding-top:40px;">
                  <!--　サマリーヘッダー1 左側 -->
                  <div class="col-sm-3 col-sm-offset-0 col-xs-12">
                    <div class="event-sm-suppier-thumb" style="background-image:url('img/cmp-sample.jpg');">
                    </div>
                    <p style="text-align:center;padding-top:10px;font-size:14px;">株式会社kokokara Group</p>
                  </div>
                  <!--　サマリーヘッダー1 左側終 -->
                  <!--　サマリーヘッダー1 右側　-->
                  <div class="raw">
                    <div class="col-sm-9 col-sm-offset-0 col-xs-12">
                      <div class="ev-sm-title">
                        <h1>タイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトルタイトル</h1>
                      </div>
                    </div>
                  </div>
                  <div class="raw ev-sm-icons">
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
                      <p>おかね</p>
                    </div>
                    <div class="col-xs-3 col-sm-2"> 
                      <div class="icon-block"><p class="sample-font"><i class="fa fa-calendar"></i></p></div>
                      <p>期間</p>
                    </div>
                  </div>
                  <!--　サマリーヘッダー1 右側終　-->
                </div>
                <!-- サマリーヘッダー1 下側 -->
                <div class="raw">
                  <div class="col-sm-12 ev-sm-lower hidden-xs hidden-lg">
                    <div class="raw col-label">

                    </div>
                    <div class="raw">
                      <div class="col-sm-12">
                        <div style="height:75px"></div>
                        <button type="button" class="btn btn-primary btn-lg btn-block">申し込む</button>
                      </div>
                    </div>
                  </div>  
                </div>
                <div class="raw">
                  <div class="col-sm-12 ev-sm-lower2 hidden-xs hidden-lg">
                
                  </div>  
                </div>
              </div>

              <!-- lg用サイドシフト -->
              <div class="col-lg-3 visible-lg ev-sm-lg-side">

              </div>
            </div>
          </div>

          <div class="container-fluid ev-details"><div class="raw">
            <div class="container">
               <div class="raw">
                <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-0"> 
                  <h3>このリスティングについて</h3>
                  <p>Have you heard about Váci street in Budapest? That's in the middle of the city. The apartment is located here in a modern Budapest style building. The flat is lovely, renovated, has a kitchen, a bathroom, a living room and in it a bed on the gallery.
                  </p>
                  
                  <div class="raw ev-detail-table">
                    <hr>
                    <div class="col-sm-4 left"><p class="table-subtitle">サブタイトル</p></div>
                    <div class="col-sm-8 left">
                      <div class="raw">
                        <div class="col-sm-6 left"><p class="table-text">文字列：<b>13</b></p></div>
                        <div class="col-sm-6 left"><p class="table-text">もじれつ：<b>もじーー</b></p></div>
                      </div>
                      <div class="raw">
                        <div class="col-sm-6 left"><p class="table-text">文字：<b>アンサー</b></p></div>
                        <div class="col-sm-6 left"><p class="table-text">texts：<b>hello</b></p></div>
                      </div>
                    </div>
                  </div>
                  <div class="raw ev-detail-table">
                    <hr>
                    <div class="col-sm-4 left"><p class="table-subtitle">サブタイトル</p></div>
                    <div class="col-sm-8 left">
                      <div class="raw">
                        <div class="col-sm-6 left"><p class="table-text">文字列：<b>13</b></p></div>
                        <div class="col-sm-6 left"><p class="table-text">もじれつ：<b>もじーー</b></p></div>
                      </div>
                      <div class="raw">
                        <div class="col-sm-6 left"><p class="table-text">文字：<b>アンサー</b></p></div>
                        <div class="col-sm-6 left"><p class="table-text">texts：<b>hello</b></p></div>
                      </div>
                    </div>
                  </div>
                  <div class="raw ev-detail-table">
                    <hr>
                    <div class="col-sm-4 left"><p class="table-subtitle">サブタイトル</p></div>
                    <div class="col-sm-8 left">
                      <div class="raw">
                        <div class="col-sm-6 left"><p class="table-text">文字列：<b>13</b></p></div>
                        <div class="col-sm-6 left"><p class="table-text">もじれつ：<b>もじーー</b></p></div>
                      </div>
                      <div class="raw">
                        <div class="col-sm-6 left"><p class="table-text">文字：<b>アンサー</b></p></div>
                        <div class="col-sm-6 left"><p class="table-text">texts：<b>hello</b></p></div>
                      </div>
                    </div>
                  </div>
                  <div class="raw ev-detail-table">
                    <hr>
                    <div class="col-sm-4 left"><p class="table-subtitle">サブタイトル(詳細)</p></div>
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
              <div class="raw"> <!-- 上側 -->
                <div class="ev-album-pic col-xs-12 col-sm-6 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-0">
                  <a href="#">
                    <img src="http://placehold.it/800x600" class="img-responsive">
                  </a>
                </div>
                <div class="ev-album-pic hidden-xs col-sm-6 col-md-5 col-lg-4">
                  <a href="#">
                    <img src="http://placehold.it/800x600" class="img-responsive">
                  </a>
                </div>
                <div class="col-lg-4 visible-lg"></div>
              </div>
              <div class="raw hidden-xs"> <!-- 下側 -->
                <div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-0" style="padding:0;">
                  <div class="raw">
                     <div class="ev-album-pic col-sm-4">
                       <a href="#">
                         <img src="http://placehold.it/800x600" class="img-responsive">
                       </a>
                     </div>
                     <div class="ev-album-pic col-sm-4">
                       <a href="#">
                         <img src="http://placehold.it/800x600" class="img-responsive">
                       </a>
                     </div>
                     <div class="ev-album-pic col-sm-4">
                       <a href="#">
                         <img src="http://placehold.it/800x600" class="img-responsive">
                       </a>
                     </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div></div>

        <div id="ev-review">
          <div class="container">
            <!-- サマリーヘッダー1 大枠 -->
            <div class="raw"> 
              <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-0">
                <div class="raw" style="padding-top:40px;">
                  
                </div>
              <div class="col-lg-3 visible-lg"></div>
            </div>
          </div>

        </div>
      </div>
    </div>
</div>  
