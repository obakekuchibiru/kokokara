<h2>新規イベント登録テスト</h2>

<?php 
echo $this->Form->create('Event', array('url' => 'addevent'));

echo $this->Form->input('Event.title', array('label' => 'タイトル'));
echo $this->Form->input('Event.body', array('label' => '本文'));
echo $this->Form->input('Event.companies_id', array('type'=>'hidden', 'value'=>$company));
echo $this->Form->end('Save Event');