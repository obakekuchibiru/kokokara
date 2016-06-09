<h2>新規イベント登録テスト</h2>

<?php 
echo $this->Form->create('Event', array('url' => 'addevent'));

echo $this->Form->input('Event.title', array('label' => 'タイトル'));
echo $this->Form->input('Event.about', array('label' => '概要'));
echo $this->Form->input('Event.detail', array('label' => '本文'));
echo $this->Form->input('Event.period', array('label' => '期間'));
echo $this->Form->input('Event.job_type', array('label' => '職務系統'))
echo $this->Form->input('Event.thumbnail', array('label' => 'サムネイル'));
echo $this->Form->input('Event.frequency', array('label' => '頻度'));
echo $this->Form->input('Event.reward', array('label' => '報酬'));
echo $this->Form->input('Event.residence', array('label' => '住居'));
echo $this->Form->input('Event.transportation_expense', array('label' => '交通費'));
echo $this->Form->input('Event.salary', array('label' => '1か月あたりの給料'));
echo $this->Form->input('Event.skill1', array('label' => '身につくスキル１'));
echo $this->Form->input('Event.skill2', array('label' => '身につくスキル２'));
echo $this->Form->input('Event.skill3', array('label' => '身につくスキル３'));
echo $this->Form->input('Event.skill4', array('label' => '身につくスキル４'));
echo $this->Form->input('Event.skill_required', array('label' => '必要スキル'));
echo $this->Form->input('Event.recruit1', array('label' => '募集対象１'));
echo $this->Form->input('Event.recruit2', array('label' => '募集対象２'));
echo $this->Form->input('Event.recruit3', array('label' => '募集対象３'));
echo $this->Form->input('Event.recruit4', array('label' => '募集対象４'));
echo $this->Form->input('Event.contents', array('label' => '業務内容'));
echo $this->Form->input('Event.profile', array('label' => '経営者プロフィール'));
echo $this->Form->input('Event.staff_photo', array('label' => '担当者様の写真'));
echo $this->Form->input('Event.staff_message', array('label' => '担当者様からの一言'));
echo $this->Form->input('Event.companies_id', array('type'=>'hidden', 'value'=>$company));
echo $this->Form->end('Save Event');