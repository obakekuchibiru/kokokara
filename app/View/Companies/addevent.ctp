<h2>新規イベント登録テスト</h2>

<?php 
echo $this->Form->create('Event', array('url' => 'addevent'));

echo $this->Form->input('Event.title', array('label' => 'タイトル'));
echo $this->Form->input('Event.about', array('label' => '概要'));
echo $this->Form->input('Event.detail', array('label' => '本文'));
echo $this->Form->select('Event.period', array('1'=>'1ヶ月未満','2' =>'1-2ヶ月','3'=>'3ヶ月以上','4'=>'半年以上','5'=>'1年以上'), array('label'=>'false', 'empty'=>'期間'));
echo $this->Form->select('Event.job_type', array('1'=>'マーケティング','2'=>'営業','3'=>'企画','4'=>'デザイン','5'=>'プログラミング','6'=>'サービス','8'=>'教育'), array('label'=>'false', 'empty'=>'職務系統'));
echo $this->Form->input('Event.thumbnail', array('label' => 'サムネイル'));
echo $this->Form->select('Event.frequency',array('1'=>'週1-2回','2' =>'週3回以上','3'=> '毎日'), array('label'=>'false', 'empty'=>'頻度'));
echo $this->Form->select('Event.reward', array('1'=>'あり','2'=>'なし'), array('label'=>'false', 'empty'=>'報酬'));
echo $this->Form->select('Event.residence', array('1'=>'あり','2'=>'なし'), array('label'=>'false', 'empty'=>'住居'));
echo $this->Form->select('Event.transportation_expense', array('1'=>'あり','2'=>'なし'), array('label'=>'false', 'empty'=>'交通費'));
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
echo $this->Form->input('Event.companies_id', array('type'=>'hidden', 'value'=>$nowcompany));
echo $this->Form->end('Save Event');