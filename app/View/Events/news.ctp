<? $this->Html->css('event-list', null, array('inline' => false)); ?>
<?php 
  $list_image = $this->Html->webroot.IMAGES_URL . "urban.jpg";
  $list_thumb = $this->Html->webroot.IMAGES_URL . "face-sample.jpeg";
?>
<script type="text/javascript">
      $(function() {
        // ポップオーバー文言
        $('.info-search').attr('data-content','フィルター検索');
       
        // ポップオーバーアクション
        $("[data-toggle=popover]").popover({
          trigger: 'hover', // click,hover,focus,manualを選択出来る
          html: true,       // HTMLタグを含めるか
        });
      });
</script>
<script type="text/javascript">
function showMoreJq(btn) {
   var targetId = btn.getAttribute("href"); // 表示対象のid名をhref属性値から得る
   $(targetId).slideDown("fast");           // 表示対象をアニメーション効果と共に表示
   $(btn.parentNode).slideUp("slow");       // 続きを読むボタンをアニメーション効果と共に消す
   return false;                            // リンクとして機能しないようfalseを返す
}
// ▼ページ読み込み直後に実行するスクリプト
$(function(){
   // ▽「続きのコンテンツ」ボックスを非表示にする
   $("#sb-form-more").hide();
   // ▽「続きを読む」ボタンがクリックされた際の処理を割り当てる
   $(".sb-form-motto a").click( function() {return showMoreJq(this); } );
});
</script>
<script type="text/javascript">
$(window).resize(function(){
    var w = $(window).width();
});
</script>

<style>
.list-box-img{
	background-image:url('<? echo $list_image ?>');
}
.list-box-circle{
  background-image:url('<? echo $list_thumb ?>');
}
</style>
    <div id="main" style="padding-top:62px;">
      <div id="lists-container">
        <div id="lists-search">
          <div class="container-fluid nopadding">
            <div class="raw">
              <div class="col-sm-3 visible-sm nopadding show" style="height:300px;overflow:scroll;"> 
              <script type="text/javascript">document.write(w);</script>
              
              </div>
              <div class="col-xs-12 col-sm-9 col-md-12 lists-search-area map_canvas nopadding">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d12638578.77386511!2d138.2286848874999!3d39.34286198780445!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1456821884580" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
        <div id="event-lists">
          <div class="container sp-nopadding lg-nopadding">
            <div class="raw">
              <div class="col-md-3 col-lg-2 hidden-xs hidden-sm list-sidebar">
                <?php echo $this->element('sidebar/eventlists-sb'); ?>
              </div>
              <div class="col-md-9 col-lg-10 col-xs-12 list-main nopadding">
                <div class="raw">
                  <?php
                    $i = 1;
                    while ($i <= 10) {
                        echo $this->element('lists/event_inlist');
                        $i++;
                    }
                  ?>  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  