<div id="mypage-tabs" class="hidden-xs">
    <div class="container nopadding-vw" style="background:#565a5c;">
        <div class="raw">
            <div class="container">
                <div class="raw">
                    <ul>
                        <li class="col-sm-2"><a href="#">ダッシュボード</a></li>
                        <li class="col-sm-2"><?echo $this->Html->link('プロフィール管理',array('action'=>'edit', $company['id']));?></li>
                        <li class="col-sm-2"><a href="#">応募状況</a></li>
                        <li class="col-sm-2"><? echo $this->Html->link('口コミ確認','/companies/reviewindex'); ?></li>
                        <li class="col-sm-2"><? echo $this->Html->link('イベント管理','/companies/editevent'); ?></li>
                    </ul>
                </div>
            </div>
         </div>
    </div>
</div>
