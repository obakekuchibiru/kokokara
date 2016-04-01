<?php
if(empty($_GET['hash'])):
?>

<h2>メールアドレスを入力してください</h2>

<?php
echo $this->Form->create('Student');
echo $this->Form->input('email');
echo $this->Form->end('送信する');
?>

<?php
else:
?>

	<h2>新しいパスワードを設定してください</h2>
	<?php
	debug($params);
	?>
	<?php
	echo $this->Form->create('Student', array('action' => 'updatePassword'));
	echo $this->Form->input('password');
	echo $this->Form->end('変更する');
	?>

	<?php
	endif;
	?>
