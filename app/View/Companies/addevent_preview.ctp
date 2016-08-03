<h2>プレビューテスト</h2>

<? echo h($this->Form->value('Event.title')); ?>
<? debug($this->request->data); ?>

<? echo $this->Form->create('Event', array('url'=>'addevent_complete', 'type'=>'file'));

  echo $this->Form->input('Event.title',array('type'=>'hidden', 'value'=>$this->Form->value('Event.title')));
  echo $this->Form->input('Event.about',array('type'=>'hidden', 'value'=>$this->Form->value('Event.about')));
  echo $this->Form->input('Event.detail',array('type'=>'hidden', 'value'=>$this->Form->value('Event.detail')));
  echo $this->Form->input('Event.job_type1',array('type'=>'hidden', 'value'=>$this->Form->value('Event.job_type1')));
  echo $this->Form->input('Event.job_type2',array('type'=>'hidden', 'value'=>$this->Form->value('Event.job_type2')));
  echo $this->Form->input('Event.period',array('type'=>'hidden', 'value'=>$this->Form->value('Event.period')));
  echo $this->Form->input('Event.frequency',array('type'=>'hidden', 'value'=>$this->Form->value('Event.frequency')));
  echo $this->Form->input('Event.country',array('type'=>'hidden', 'value'=>$this->Form->value('Event.country')));
  echo $this->Form->input('Event.location',array('type'=>'hidden', 'value'=>$this->Form->value('Event.location')));
  echo $this->Form->input('Event.prefecture',array('type'=>'hidden', 'value'=>$this->Form->value('Event.prefecture')));  
  echo $this->Form->input('Event.skill1',array('type'=>'hidden', 'value'=>$this->Form->value('Event.skill1')));
  echo $this->Form->input('Event.skill2',array('type'=>'hidden', 'value'=>$this->Form->value('Event.skill2')));
  echo $this->Form->input('Event.skill3',array('type'=>'hidden', 'value'=>$this->Form->value('Event.skill3')));
  echo $this->Form->input('Event.skill4',array('type'=>'hidden', 'value'=>$this->Form->value('Event.skill4')));
  echo $this->Form->input('Event.reqruit1',array('type'=>'hidden', 'value'=>$this->Form->value('Event.reqruit1')));
  echo $this->Form->input('Event.reqruit2',array('type'=>'hidden', 'value'=>$this->Form->value('Event.reqruit2')));
  echo $this->Form->input('Event.reqruit3',array('type'=>'hidden', 'value'=>$this->Form->value('Event.reqruit3')));
  echo $this->Form->input('Event.reqruit4',array('type'=>'hidden', 'value'=>$this->Form->value('Event.reqruit4')));
  echo $this->Form->input('Thumbnail.0.attachment',array('type'=>'hidden', 'value'=>$this->Form->value('Thumbnail.0.attachment')));
  echo $this->Form->input('Thumbnail.0.model',array('type'=>'hidden', 'value'=>$this->Form->value('Thumbnail.0.model')));
  echo $this->Form->input('Thumbnail.0.purpose',array('type'=>'hidden', 'value'=>$this->Form->value('Thumbnail.0.purpose')));
  echo $this->Form->input('Event.skill_required1',array('type'=>'hidden', 'value'=>$this->Form->value('Event.skill_required1')));
  echo $this->Form->input('Event.skill_required2',array('type'=>'hidden', 'value'=>$this->Form->value('Event.skill_required2')));
  echo $this->Form->input('Event.skill_required3',array('type'=>'hidden', 'value'=>$this->Form->value('Event.skill_required3')));
  echo $this->Form->input('Event.skill_required4',array('type'=>'hidden', 'value'=>$this->Form->value('Event.skill_required4')));
  echo $this->Form->input('Event.reward',array('type'=>'hidden', 'value'=>$this->Form->value('Event.reward')));
  echo $this->Form->input('Event.residence',array('type'=>'hidden', 'value'=>$this->Form->value('Event.residence')));
  echo $this->Form->input('Event.transportation_expense',array('type'=>'hidden', 'value'=>$this->Form->value('Event.transportation_expense')));
  echo $this->Form->input('Event.salary',array('type'=>'hidden', 'value'=>$this->Form->value('Eventsalary')));
  echo $this->Form->input('Event.profile',array('type'=>'hidden', 'value'=>$this->Form->value('Event.profile')));
  echo $this->Form->input('Event.company_id',array('type'=>'hidden', 'value'=>$this->Form->value('Event.company_id')));
  echo $this->Form->input('Event.staff_message',array('type'=>'hidden', 'value'=>$this->Form->value('Event.staff_message')));
  echo $this->Form->input('Photo.0.attachment',array('type'=>'hidden', 'value'=>$this->Form->value('Photo.0.attachment')));
  echo $this->Form->input('Photo.0.model',array('type'=>'hidden', 'value'=>$this->Form->value('Photo.0.model')));
  echo $this->Form->input('Photo.0.purpose',array('type'=>'hidden', 'value'=>$this->Form->value('Photo.0.purpose')));
  echo $this->Form->input('Album.0.attachment',array('type'=>'hidden', 'value'=>$this->Form->value('Album.0.attachment')));
  echo $this->Form->input('Album.0.model',array('type'=>'hidden', 'value'=>$this->Form->value('Album.0.model')));
  echo $this->Form->input('Album.0.purpose',array('type'=>'hidden', 'value'=>$this->Form->value('Album.0.purpose')));
  


  echo $this->Form->end('登録');

?>