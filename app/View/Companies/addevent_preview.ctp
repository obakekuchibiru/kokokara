<h2>プレビューテスト</h2>

<? echo h($this->Form->value('Event.title')); ?>

<? echo $this->Form->create('Event', array('url'=>'addevent_complete', 'type'=>'post'));

  echo $this->Form->input('Event.title',array('type'=>'hidden', 'value'=>$this->Form->value('Event.title')));

  echo $this->Form->end('登録');

?>