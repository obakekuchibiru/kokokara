<div class="col-sm-6 col-lg-4 list-box">
    <!-- リスト内 -->
        <div class="raw">
           <div class="col-xs-12 list-box-img"></div>
        </div>
        <div class="raw">
          <div class="col-xs-9 nopadding">
              <h3>タイトルタイトルタイトルタイトルタイトル一定以上省略</h3>
          </div>
          <div class="col-xs-3">
            <div class="list-box-circle list-comp-name" data-toggle="popover" data-placement="top"></div>
          </div>
        </div>
        <div class="raw">
          <div class="col-xs-12 nopadding">
             <p>「ではみなさんは、そういうふうに川だと云いわれたり、乳の流れたあとだと云われたりしていたこのぼんやりと白い...</p>
          </div>
        </div>
  <!-- リスト内 終-->
  <a href="#"></a>
</div>
<script type="text/javascript">
      $(function() {
        // ポップオーバー文言
        $('.list-comp-name').attr('data-content','comp-name');
       
        // ポップオーバーアクション
        $("[data-toggle=popover]").popover({
          trigger: 'hover', // click,hover,focus,manualを選択出来る
          html: true,       // HTMLタグを含めるか
        });
      });
</script>