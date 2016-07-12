<h2>レビュー投稿テスト</h2>

<?php
debug($events);
debug($user);
echo $this->Form->create('Review', array('url'=>'addreview'));

echo $this->Form->input('Review.body',array('label'=>'本文'));
echo $this->Form->select('Review.period', array('0'=>'1か月未満'));

echo $this->Form->input('Review.event_id', array('type'=>'hidden','value'=>$events['Event']['id']));
echo $this->Form->input('Review.student_id', array('type'=>'hidden','value'=>$user));
echo $this->Form->input('Review.active', array('type'=>'hidden', 'value'=>'0'))
echo $this->Form->end('レビュー投稿！');

?>