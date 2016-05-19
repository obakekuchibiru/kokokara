<?php echo $this->Session->flash('auth'); ?>
<h2>企業様ページ<h2>

<?php echo $this->Html->link('新規イベント登録','/companies/addevent'); ?>
<br><a href="#">イベント編集</a><br>
<a href="#">口コミ確認</a><br>
<?php echo $this->Html->link('ログアウト', '/companies/logout/'); ?>
