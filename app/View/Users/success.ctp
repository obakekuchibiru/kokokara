<p>ようこそ！<?php echo $user_data['User']['username']; ?>さん</p>
<img src="<?php echo $user_data['User']['user_image']; ?>">
<?php echo $this->Html->link('ログアウト', '/users/logout'); ?>
