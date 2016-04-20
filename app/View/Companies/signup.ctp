<h2>企業様データ登録テスト<h2>

<?php 
echo $this->Form->create('Company');
if($myData['Company']['id']){
			echo $this->Form->input('id', array('type' => 'hidden', 'value' => $myData['Company']['id']));
		}
echo $this->Form->input('name');
echo $this->Form->input('email');
echo $this->Form->input('password');
echo $this->Form->end('Save Company');