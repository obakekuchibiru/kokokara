<? $this->Html->css('style', null, array('inline' => false)) ?>
<script type="text/javascript">
    jQuery(function($) {
        $('#top-1').bgSwitcher({
            images: ['img/sample6.jpg','img/sample3.jpg', 'img/sample4.jpg', 'img/sample5.jpg','img/sample2.jpg'],
            interval: 7000,
            effect: "fade"
        });
    });
</script>


<div id="main_container">
      <div id="top-1">
        <div class="container-fluid top-1-cnts">
          <div class="raw">
            <div class="col-sm-8 col-sm-offset-2" style="text-align:center;">
              <h1>おかえりっす。</h1>
              <h3>ちょっと、ラッコかわいい。いってらっしゃい。</h3>
              <p><button type="button" class="btn btn-secondary btn-on-img">ご利用方法</button></p>
            </div>
          </div>
          <div class="raw">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
              
            </div>
          </div>
        </div>
      </div>
      <div id="top-2">
        <div class="container-fluid nopadding">
          <div class="raw">
            <div class="col-sm-10 col-sm-offset-1 top-cnt-1">
            </div>
          </div>
        </div>
      </div>
      <div id="top-3">
        <div class="container-fluid">
          <div class="raw" style="margin:40px 0;">
            <div class="col-sm-7 col-sm-offset-1">
              <? echo $this->Html->image("urban.jpg", array('class' => 'img-obfit img-responsive')); ?>
              <p class="visible-xs">kokokara開く、世界への扉。</p>
              <p class="visible-xs subtext">空部屋を活用してみませんか？　子どもが巣立った後の部屋に世界中を旅する人を迎えたり。新しい毎日が始まります。</p>
            </div>
            <div class="col-sm-3 hidden-xs">
              <div class="raw">
                <div class="col-sm-12">
                  <p><b>kokokara開く、<br>世界への扉。</b></p>
                  <p class="subtext">空部屋を活用してみませんか？　子どもが巣立った後の部屋に世界中を旅する人を迎えたり。新しい毎日が始まります。</p>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
      <div id="top-4">
        <div class="container-fluid nopadding">
          <div class="raw" style="margin:30px 0;">
            <h1>世界を探検</h1>
            <h3>みんな世界のどこを旅してるの？ 見てみよう。</h3>
            <div class="col-sm-12 col-md-8 col-lg-6 top-conts">
              <div class="top-conts-inside" style="background-image:url('img/sample1.jpg')">
                <p>カンボジア</p>
              </div>
              <a href="#"></a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 top-conts">
              <div class="top-conts-inside" style="background-image:url('img/sample2.jpg')">
                <p>マケドニア</p>
              </div>
              <a href="#"></a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 top-conts">
              <div class="top-conts-inside" style="background-image:url('img/sample3.jpg')">
                <p>モンゴル</p>
              </div>
              <a href="#"></a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 top-conts">
              <div class="top-conts-inside" style="background-image:url('img/sample4.jpg')">
                <p>ベラルーシ</p>
              </div>
              <a href="#"></a>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 top-conts">
              <div class="top-conts-inside" style="background-image:url('img/sample5.jpg')">
                <p>モルドバ</p>
              </div>
              <a href="#"></a>
            </div>
          </div>
        </div>
      </div>
      <div id="top-5">
        <div class="container-fluid top-5-cnts" style="background-image:url('img/sample9.jpg')">
          <div class="raw">
            <div class="col-sm-8 col-sm-offset-2">
              <h1>勤務地、世界</h1>
              <h3>働きながら暮らす。働きながら旅する</h3>
            </div>
          </div>
          <div class="raw">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div>