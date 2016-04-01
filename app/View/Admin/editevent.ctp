<?php
debug($event);
debug($state);

?>


<?echo $this->Html->script("jquery-1.11.2.js");?>
<?echo $this->Html->css("kai.css");?>








<div id="event_form1" class="event_original_form">
	<?

		echo $this->Form->create('Event',
    		array('type' => 'file','url' =>
        		array('controller' => 'admin', 'action' => 'goEditEvent')));
		echo $this->Form->input("title",array("value"=>$event["Event"]["title"]));
		echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'メイン画像'));
		echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.1.attachment', array('type' => 'file', 'label' => '本文１'));
		echo $this->Form->input('Image.1.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.2.attachment', array('type' => 'file', 'label' => '本文2'));
		echo $this->Form->input('Image.2.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.3.attachment', array('type' => 'file', 'label' => '本文3'));
		echo $this->Form->input('Image.3.model', array('type' => 'hidden', 'value' => 'Event'));


		echo $this->Form->input("body",array("value"=>$event["Event"]["body"],"label"=>"概要"));
		echo $this->Form->input("detail",array("value"=>$event["Event"]["detail"],"label"=>"詳細"));
		echo $this->Form->input("period",array("value"=>$event["Event"]["period"],"label"=>"期間"));
		echo $this->Form->input("location",array("value"=>$event["Event"]["location"],"label"=>"場所"));
		echo $this->Form->input("date",array("value"=>$event["Event"]["date"],"label"=>"日時"));
		echo $this->Form->input("id",array("value"=>$event["Event"]["id"],"type"=>"hidden"));
		echo $this->Form->input("state",array("value"=>$event["Event"]["state"],"type"=>"hidden"));

		
		echo $this->Form->input("Intern.target",array("value"=>$event["Intern"]["target"],"label"=>"対象"));
		echo $this->Form->input("Intern.limit_num",array("value"=>$event["Intern"]["limit_num"],"label"=>'募集人数'));
		echo $this->Form->input("Intern.skill",array("value"=>$event["Intern"]["skill"],"label"=>"身に付くスキル"));
		echo $this->Form->input("Intern.payment",array("value"=>$event["Intern"]["payment"],"label"=>"給与"));
		echo $this->Form->input("Intern.conditions",array("value"=>$event["Intern"]["conditions"],"label"=>"応募条件"));
		echo $this->Form->input("Intern.treatment",array("value"=>$event["Intern"]["treatment"],"label"=>"待遇"));

		echo $this->Form->input("Intern.id",array("value"=>$event["Intern"]["id"],"type"=>"hidden"));

		echo $this->Form->end("送信");
	?>


</div>


<div id="event_form5" class="event_original_form">
	<?
		echo $this->Form->create('Event',
		    array('type' => 'file','url' =>
		        array('controller' => 'admin', 'action' => 'goEditEvent')));
		echo $this->Form->input("title",array("value"=>$event["Event"]["title"]));
		echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'メイン画像'));
		echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.1.attachment', array('type' => 'file', 'label' => '本文１'));
		echo $this->Form->input('Image.1.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.2.attachment', array('type' => 'file', 'label' => '本文2'));
		echo $this->Form->input('Image.2.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.3.attachment', array('type' => 'file', 'label' => '本文3'));
		echo $this->Form->input('Image.3.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input("id",array("value"=>$event["Event"]["id"],"type"=>"hidden"));
		echo $this->Form->input("state",array("value"=>$event["Event"]["state"],"type"=>"hidden"));


		echo $this->Form->input("body",array("value"=>$event["Event"]["body"],"label"=>"概要"));
		echo $this->Form->input("detail",array("value"=>$event["Event"]["detail"],"label"=>"詳細"));
		echo $this->Form->input("period",array("value"=>$event["Event"]["period"],"label"=>"期間"));
		echo $this->Form->input("location",array("value"=>$event["Event"]["location"],"label"=>"場所"));
		echo $this->Form->input("date",array("value"=>$event["Event"]["date"],"label"=>"日時"));
		echo $this->Form->input("id",array("value"=>$event["Event"]["id"],"type"=>"hidden"));
		echo $this->Form->input("state",array("value"=>$event["Event"]["state"],"type"=>"hidden"));
		
		echo $this->Form->input("StudyAbroad.class",array("value"=>$event["StudyAbroad"]["class"],"label"=>'時間割サンプル'));
		echo $this->Form->input("StudyAbroad.stay_type",array("label"=>"滞在の種類"));
		echo $this->Form->input("StudyAbroad.cost",array("value"=>$event["StudyAbroad"]["cost"],"label"=>"費用"));
		echo $this->Form->input("StudyAbroad.conditions",array("value"=>$event["StudyAbroad"]["conditions"],"label"=>"応募条件"));
		echo $this->Form->input("StudyAbroad.environment",array("value"=>$event["StudyAbroad"]["environment"],"label"=>"環境"));
		echo $this->Form->input("StudyAbroad.deadline",array("value"=>$event["StudyAbroad"]["deadline"],"label"=>"締め切り"));
		echo $this->Form->input("StudyAbroad.id",array("value"=>$event["StudyAbroad"]["id"],"type"=>"hidden"));

	?>
	
	<input type="submit" value="送信">

	<?echo $this->Form->end()?>

</div>







<div id="event_form6" class="event_original_form">

<?

		echo $this->Form->create('Event',
		    array('type' => 'file','url' =>
		        array('controller' => 'admin', 'action' => 'goEditEvent')));
		echo $this->Form->input("title",array("value"=>$event["Event"]["title"]));
		echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'メイン画像'));
		echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.1.attachment', array('type' => 'file', 'label' => '本文１'));
		echo $this->Form->input('Image.1.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.2.attachment', array('type' => 'file', 'label' => '本文2'));
		echo $this->Form->input('Image.2.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.3.attachment', array('type' => 'file', 'label' => '本文3'));
		echo $this->Form->input('Image.3.model', array('type' => 'hidden', 'value' => 'Event'));



		echo $this->Form->input("body",array("value"=>$event["Event"]["body"],"label"=>"概要"));
		echo $this->Form->input("detail",array("value"=>$event["Event"]["detail"],"label"=>"詳細"));
		echo $this->Form->input("period",array("value"=>$event["Event"]["period"],"label"=>"期間"));
		echo $this->Form->input("location",array("value"=>$event["Event"]["location"],"label"=>"場所"));
		echo $this->Form->input("date",array("value"=>$event["Event"]["date"],"label"=>"日時"));
		echo $this->Form->input("id",array("value"=>$event["Event"]["id"],"type"=>"hidden"));
		echo $this->Form->input("state",array("value"=>$event["Event"]["state"],"type"=>"hidden"));
				
		echo $this->Form->input("Camp.fromwhere",array("value"=>$event["Camp"]["fromwhere"],"label"=>"発着地"));
		echo $this->Form->input("Camp.limit_num",array("value"=>$event["Camp"]["limit_num"],"label"=>'募集人数'));
		echo $this->Form->input("Camp.stay_type",array("value"=>$event["Camp"]["stay_type"],"label"=>"滞在の種類"));
		echo $this->Form->input("Camp.cost",array("value"=>$event["Camp"]["cost"],"label"=>"費用"));
		echo $this->Form->input("Camp.shedule",array("value"=>$event["Camp"]["schedule"],"label"=>"スケジュール"));
		echo $this->Form->input("Camp.withmen",array("value"=>$event["Camp"]["withmen"],"label"=>"添乗員"));
		echo $this->Form->input("Camp.tuition",array("value"=>$event["Camp"]["tuition"],"label"=>"授業料"));
		echo $this->Form->input("Camp.food",array("value"=>$event["Camp"]["food"],"label"=>"滞在中の食事"));
		echo $this->Form->input("Camp.id",array("value"=>$event["Camp"]["id"],"type"=>"hidden"));
		
	?>
	
	<input type="submit" value="送信">

	<?echo $this->Form->end()?>



</div>


<div id="event_form7" class="event_original_form">
<?

			echo $this->Form->create('Event',
		    array('type' => 'file','url' =>
		        array('controller' => 'admin', 'action' => 'goEditEvent')));
		echo $this->Form->input("title",array("value"=>$event["Event"]["title"]));
		echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'メイン画像'));
		echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.1.attachment', array('type' => 'file', 'label' => '本文１'));
		echo $this->Form->input('Image.1.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.2.attachment', array('type' => 'file', 'label' => '本文2'));
		echo $this->Form->input('Image.2.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.3.attachment', array('type' => 'file', 'label' => '本文3'));
		echo $this->Form->input('Image.3.model', array('type' => 'hidden', 'value' => 'Event'));


		echo $this->Form->input("body",array("value"=>$event["Event"]["body"],"label"=>"概要"));
		echo $this->Form->input("detail",array("value"=>$event["Event"]["detail"],"label"=>"詳細"));
		echo $this->Form->input("period",array("value"=>$event["Event"]["period"],"label"=>"期間"));
		echo $this->Form->input("location",array("value"=>$event["Event"]["location"],"label"=>"場所"));
		echo $this->Form->input("date",array("value"=>$event["Event"]["date"],"label"=>"日時"));
		echo $this->Form->input("id",array("value"=>$event["Event"]["id"],"type"=>"hidden"));
		echo $this->Form->input("state",array("value"=>$event["Event"]["state"],"type"=>"hidden"));
		
		
		echo $this->Form->input("Lesson.skill",array("value"=>$event["Lesson"]["skill"],"label"=>"学べること"));
		echo $this->Form->input("Lesson.cost",array("value"=>$event["Lesson"]["cost"],"label"=>"費用"));
		echo $this->Form->input("Lesson.id",array("value"=>$event["Lesson"]["id"],"type"=>"hidden"));

	?>
	
	<input type="submit" value="送信">

	<?echo $this->Form->end()?>


</div>



<div id="event_form8" class="event_original_form">
	<?

			echo $this->Form->create('Event',
		    array('type' => 'file','url' =>
		        array('controller' => 'admin', 'action' => 'goEditEvent')));
		echo $this->Form->input("title",array("value"=>$event["Event"]["title"]));
		echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'メイン画像'));
		echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.1.attachment', array('type' => 'file', 'label' => '本文１'));
		echo $this->Form->input('Image.1.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.2.attachment', array('type' => 'file', 'label' => '本文2'));
		echo $this->Form->input('Image.2.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.3.attachment', array('type' => 'file', 'label' => '本文3'));
		echo $this->Form->input('Image.3.model', array('type' => 'hidden', 'value' => 'Event'));


		echo $this->Form->input("body",array("value"=>$event["Event"]["body"],"label"=>"概要"));
		echo $this->Form->input("detail",array("value"=>$event["Event"]["detail"],"label"=>"詳細"));
		echo $this->Form->input("period",array("value"=>$event["Event"]["period"],"label"=>"期間"));
		echo $this->Form->input("location",array("value"=>$event["Event"]["location"],"label"=>"場所"));
		echo $this->Form->input("date",array("value"=>$event["Event"]["date"],"label"=>"日時"));
		echo $this->Form->input("id",array("value"=>$event["Event"]["id"],"type"=>"hidden"));
		echo $this->Form->input("state",array("value"=>$event["Event"]["state"],"type"=>"hidden"));


		echo $this->Form->input("FunnyEvent.limit_num",array("value"=>$event["FunnyEvent"]["limit_num"],"label"=>"募集人数"));
		echo $this->Form->input("FunnyEvent.limit_min",array("value"=>$event["FunnyEvent"]["limit_min"],"label"=>"最小人数"));
		echo $this->Form->input("FunnyEvent.deadline",array("value"=>$event["FunnyEvent"]["deadline"],"label"=>"締め切り日時"));
		echo $this->Form->input("FunnyEvent.cost",array("value"=>$event["FunnyEvent"]["cost"],"label"=>"費用"));
		echo $this->Form->input("FunnyEvent.schedule",array("value"=>$event["FunnyEvent"]["schedule"],"label"=>"スケジュール"));
		echo $this->Form->input("FunnyEvent.id",array("value"=>$event["FunnyEvent"]["id"],"type"=>"hidden"));

	?>
	
	<input type="submit" value="送信">

	<?echo $this->Form->end()?>


</div>


<div id="event_form9" class="event_original_form">
	<?


			echo $this->Form->create('Event',
		    array('type' => 'file','url' =>
		        array('controller' => 'admin', 'action' => 'goEditEvent')));
		echo $this->Form->input("title",array("value"=>$event["Event"]["title"]));
		echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'メイン画像'));
		echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.1.attachment', array('type' => 'file', 'label' => '本文１'));
		echo $this->Form->input('Image.1.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.2.attachment', array('type' => 'file', 'label' => '本文2'));
		echo $this->Form->input('Image.2.model', array('type' => 'hidden', 'value' => 'Event'));
		echo $this->Form->input('Image.3.attachment', array('type' => 'file', 'label' => '本文3'));
		echo $this->Form->input('Image.3.model', array('type' => 'hidden', 'value' => 'Event'));


		echo $this->Form->input("body",array("value"=>$event["Event"]["body"],"label"=>"概要"));
		echo $this->Form->input("detail",array("value"=>$event["Event"]["detail"],"label"=>"詳細"));
		echo $this->Form->input("period",array("value"=>$event["Event"]["period"],"label"=>"期間"));
		echo $this->Form->input("location",array("value"=>$event["Event"]["location"],"label"=>"場所"));
		echo $this->Form->input("date",array("value"=>$event["Event"]["date"],"label"=>"日時"));
		echo $this->Form->input("state",array("value"=>$event["Event"]["state"],"type"=>"hidden"));
		echo $this->Form->input("id",array("value"=>$event["Event"]["id"],"type"=>"hidden"));
				
		echo $this->Form->input("StudentGroup.limit_num",array("value"=>$event["StudentGroup"]["limit_num"],"label"=>"募集人数"));
		
		echo $this->Form->input("StudentGroup.cost",array("value"=>$event["StudentGroup"]["cost"],"label"=>"費用"));
		echo $this->Form->input("StudentGroup.id",array("value"=>$event["StudentGroup"]["id"],"type"=>"hidden"));
		


	?>
	
	<input type="submit" value="送信">

	<?echo $this->Form->end()?>


</div>

<div id="event_form4" class="event_original_form">
	StudentGroupInfo
	<?
	echo $this->Form->create('Event',
		array('type' => 'file','url' =>
			array('controller' => 'admin', 'action' => 'goEditEvent')));
	echo $this->Form->input("title",array("value"=>$event["Event"]["title"]));
	echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'メイン画像'));
	echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Event'));
	echo $this->Form->input('Image.1.attachment', array('type' => 'file', 'label' => '本文１'));
	echo $this->Form->input('Image.1.model', array('type' => 'hidden', 'value' => 'Event'));
	echo $this->Form->input('Image.2.attachment', array('type' => 'file', 'label' => '本文2'));
	echo $this->Form->input('Image.2.model', array('type' => 'hidden', 'value' => 'Event'));
	echo $this->Form->input('Image.3.attachment', array('type' => 'file', 'label' => '本文3'));
	echo $this->Form->input('Image.3.model', array('type' => 'hidden', 'value' => 'Event'));


	echo $this->Form->input("body",array("value"=>$event["Event"]["body"],"label"=>"概要"));
	echo $this->Form->input("detail",array("value"=>$event["Event"]["detail"],"label"=>"詳細"));
	echo $this->Form->input("period",array("value"=>$event["Event"]["period"],"label"=>"期間"));
	echo $this->Form->input("location",array("value"=>$event["Event"]["location"],"label"=>"場所"));
	echo $this->Form->input("date",array("value"=>$event["Event"]["date"],"label"=>"日時"));
	echo $this->Form->input("state",array("value"=>$event["Event"]["state"],"type"=>"hidden"));
	echo $this->Form->input("id",array("value"=>$event["Event"]["id"],"type"=>"hidden"));


	echo $this->Form->input("universities",array("value"=>$event["StudentGroupInfo"]["universities"],"label"=>"主要大学"));
	echo $this->Form->input("activities",array("value"=>$event["StudentGroupInfo"]["activities"],"label"=>"活動頻度"));


	//追加分2015/04/07 by Mark///////////////////////////
	echo $this->Form->select('pref', array(
		"1"=>"北海道","2"=>'青森県',"3"=>'岩手県',"4"=>'宮城県',"5"=>'秋田県',"6"=>'山形県',"7"=>'福島県',"8"=>'茨城県',"9"=>'栃木県',"10"=>'群馬県',"11"=>'埼玉県',"12"=>'千葉県',"13"=>'東京都',"14"=>'神奈川県',"15"=>'新潟県',"16"=>'富山県',"17"=>'石川県',"18"=>'福井県',"19"=>'山梨県',"20"=>'長野県',"21"=>'岐阜県',"22"=>'静岡県',"23"=>'愛知県',"24"=>'三重県',"25"=>'滋賀県',"26"=>'京都府',"27"=>'大阪府',"28"=>'兵庫県',"29"=>'奈良県',"30"=>'和歌山県',"31"=>'鳥取県',"32"=>'島根県',"33"=>'岡山県',"34"=>'広島県',"35"=>'山口県',"36"=>'徳島県',"37"=>'香川県',"38"=>'愛媛県',"39"=>'高知県',"40"=>'福岡県',"41"=>'佐賀県',"42"=>'長崎県',"43"=>'熊本県',"44"=>'大分県',"45"=>'宮崎県',"46"=>'鹿児島県',"47"=>'沖縄県'
	));
	////////////////////////////////////////////////////
	echo $this->Form->input("StudentGroupInfo.id",array("value"=>$event["StudentGroupInfo"]["id"],"type"=>"hidden"));

	echo $this->Form->end("送信する");

	?>

</div>

<div id="event_form3" class="event_original_form">
	<?
	echo $this->Form->create('Event',
		array('type' => 'file','url' =>
			array('controller' => 'admin', 'action' => 'goEditEvent')));
	echo $this->Form->input("title",array("value"=>$event["Event"]["title"]));
	echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'メイン画像'));
	echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Event'));
	echo $this->Form->input('Image.1.attachment', array('type' => 'file', 'label' => '本文１'));
	echo $this->Form->input('Image.1.model', array('type' => 'hidden', 'value' => 'Event'));
	echo $this->Form->input('Image.2.attachment', array('type' => 'file', 'label' => '本文2'));
	echo $this->Form->input('Image.2.model', array('type' => 'hidden', 'value' => 'Event'));
	echo $this->Form->input('Image.3.attachment', array('type' => 'file', 'label' => '本文3'));
	echo $this->Form->input('Image.3.model', array('type' => 'hidden', 'value' => 'Event'));


	echo $this->Form->input("body",array("value"=>$event["Event"]["body"],"label"=>"概要"));
	echo $this->Form->input("detail",array("value"=>$event["Event"]["detail"],"label"=>"詳細"));
	echo $this->Form->input("period",array("value"=>$event["Event"]["period"],"label"=>"期間"));
	echo $this->Form->input("location",array("value"=>$event["Event"]["location"],"label"=>"場所"));
	echo $this->Form->input("date",array("value"=>$event["Event"]["date"],"label"=>"日時"));
	echo $this->Form->input("state",array("value"=>$event["Event"]["state"],"type"=>"hidden"));
	echo $this->Form->input("id",array("value"=>$event["Event"]["id"],"type"=>"hidden"));


	echo $this->Form->input("Intern.target",array("value"=>$event["Intern"]["target"],"label"=>"対象"));
	echo $this->Form->input("Intern.limit_num",array("value"=>$event["Intern"]["limit_num"],"label"=>'募集人数'));
	echo $this->Form->input("Intern.skill",array("value"=>$event["Intern"]["skill"],"label"=>"身に付くスキル"));
	echo $this->Form->input("Intern.payment",array("value"=>$event["Intern"]["payment"],"label"=>"給与"));
	echo $this->Form->input("Intern.conditions",array("value"=>$event["Intern"]["conditions"],"label"=>"応募条件"));
	echo $this->Form->input("Intern.treatment",array("value"=>$event["Intern"]["treatment"],"label"=>"待遇"));

	//追加分2015/04/07 by Mark///////////////////////////
	echo $this->Form->select('country_name', array(
		"1"=>"アメリカ","2"=>"フランス","3"=>"イギリス", "4"=>"イタリア",
		"5"=>"ドイツ","6"=>"中国","7"=>"韓国","8"=>"台湾","9"=>"マレーシア", "10"=>"ベトナム"
	));
	////////////////////////////////////////////////////
	echo $this->Form->input("Intern.id",array("value"=>$event["Intern"]["id"],"type"=>"hidden"));

	echo $this->Form->end("送信");
	?>



</div>



<script type>
	var state=<?echo $state?>;
	var s="#event_form";
	for(i=1;i<10;i++){
		$(s+i).css("display", "none");
	}
	console.log($(s+state));

	if(state>2){
		console.log($(s+state));
		$(s+state).css("display", "block");
	}else{
		$(s+1).css("display", "block");
	}
</script>


