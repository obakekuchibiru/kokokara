

<?php
echo $this->Form->create('Company', array('url' => 'signup'));

echo $this->Form->input('Company.name', array('label' => '企業名'));
echo $this->Form->input('Company.email', array('label' => 'メールアドレス'));
echo $this->Form->input('Company.password', array('label' => 'パスワード'));
echo $this->Form->end('Save Company');

?>
