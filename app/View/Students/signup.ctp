<h2>入学のご案内</h2>

<div class="row" style="border-bottom:3px dotted #c0c0c0;margin-bottom:60px;">
	<div class="col-xs-6 col-xs-offset-3 login-fb-btn">
		<?php
		echo $this->Html->link('', array("controller" => "fbconnect", "action" => "facebook"));
		?>
		<h1><i class="fa fa-facebook-square"></i><br><font style="font-size:18px;">まずFacebookで登録！</font></h1>
	</div>
</div>
<div class="row">
	<div class="col-sm-10 col-sm-offset-1">
		<?php
		debug($myData);
		echo $this->Form->create('Student');
		//Student ID
		if($myData['Student']['id']){
			echo $this->Form->input('id', array('type' => 'hidden', 'value' => $myData['Student']['id']));
		}
		//名前
		if($myData['FacebookUser']['name']){
			echo $this->Form->input('name', array('value' => $myData['FacebookUser']['name']));
		}else{
			echo $this->Form->input('name');
		}
		//性別
		$gender = array(
			'male' => '男性',
			'female' => '女性',
		);
		if($myData['FacebookUser']['gender']){
			if($myData['FacebookUser']['gender'] == '男性'){
				$gender_default = 'male';
			}
			elseif($myData['FacebookUser']['gender'] == '女性'){
				$gender_default = 'female';
			}
			echo $this->Form->input('gender', array('type' => 'radio', 'options' => $gender, 'value' => $gender_default));
		}else{
			echo $this->Form->input('gender', array('type' => 'radio', 'options' => $gender));
		}
		//誕生日
		if($myData['FacebookUser']['birthday']){
			$array_birthday = explode('/', $myData['FacebookUser']['birthday']);
			//debug($array_birthday);
			echo $this->Form->input('birthday',  array('dateFormat' => 'YMD', 'maxYear' => date('Y'), 'minYear' => date('Y')-100, 'monthNames' => false, 'label' => array('text' => '誕生日'), 'default' => array('day' => $array_birthday[0], 'month' => $array_birthday[1], 'year' => $array_birthday[2])));
		} else{
			echo $this->Form->input('birthday',  array('dateFormat' => 'YMD', 'maxYear' => date('Y'), 'minYear' => date('Y')-100, 'monthNames' => false, 'label' => array('text' => '誕生日')));
		}
		//大学名
		if($myData['FacebookUser']['university']){
			echo $this->Form->input('university', array('value' => $myData['FacebookUser']['university']));
		} else{
			echo $this->Form->input('university');
		}
		//学部
		if($myData['FacebookUser']['faculty']){
			echo $this->Form->input('faculty', array('value' => $myData['FacebookUser']['faculty']));
		} else{
			echo $this->Form->input('faculty');
		}
		//年度
		$years = array(
			'1' => '1回生',
			'2' => '2回生',
			'3' => '3回生',
			'4' => '4回生'
		);
		echo $this->Form->input('year', array('type' => 'select', 'options' => $years));

		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('email_accept', array('type' => 'checkbox', 'value' => 1));
		echo $this->Form->end('入学する！');
		?>
	</div>
</div>

