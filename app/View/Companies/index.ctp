<?php echo $this->Session->flash('auth'); ?>
<h2>企業様マイページ<h2>

<?php 
echo $this->Html->link('企業情報編集',array('action'=>'edit', $company['Company']['id'])); 
echo $this->Html->link('新規イベント登録','/companies/addevent'); ?>
<br><a href="#">イベント編集</a><br>
<a href="#">口コミ確認</a><br>
<?php echo $this->Html->link('ログアウト', '/companies/logout/'); ?>
