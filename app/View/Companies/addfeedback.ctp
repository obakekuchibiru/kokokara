<h2>フィードバック投稿テスト</h2>

<?php
	debug($review);
	debug($company);

	echo $this->Form->create('Feedback', array('url'=>'addfeedback'));
	echo $this->Form->input('Feedback.good',array('label'=>'良かった点/助かった点'));
	echo $this->Form->input('Feedback.improvement',array('label'=>'課題だと感じた点'));
	echo $this->Form->input('Feedback.message',array('label'=>'今後に向けてのメッセージ'));
	echo $this->Form->input('Feedback.company_id',array('type'=>'hidden','value'=>$company));
	echo $this->Form->input('Feedback.review_id',array('type'=>'hidden','value'=>$review));
	echo $this->Form->End('送信する');

?>