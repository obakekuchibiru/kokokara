<?echo $this->Html->script("jquery-1.11.2.js");?>
<?echo $this->Html->css("kai.css");?>

<?debug($state)?>


<div id="event_form1" class="event_original_form">
	<?
		echo $this->Form->create('Intern',array(
			'url' => array('controller' => 'Admin', 'action' => 'goaddoriginal'),"class"=>""));
		echo $this->Form->input("target",array("label"=>"対象"));
		echo $this->Form->input("limit_num",array("label"=>'募集人数'));
		echo $this->Form->input("skill",array("label"=>"身に付くスキル"));
		echo $this->Form->input("payment",array("label"=>"給与"));
		echo $this->Form->input("conditions",array("label"=>"応募条件"));
		echo $this->Form->input("treatment",array("label"=>"待遇"));
		echo $this->Form->input("event_id",array("value"=>$id,"type"=>"hidden"));
		echo $this->Form->input("State.state",array("value"=>$state,"type"=>"hidden"));

	//追加分2015/04/07 by Mark///////////////////////////
	echo $this->Form->select('country_name', array(
		"1"=>"北海道","2"=>'青森県',"3"=>'岩手県',"4"=>'宮城県',"5"=>'秋田県',"6"=>'山形県',"7"=>'福島県',"8"=>'茨城県',"9"=>'栃木県',"10"=>'群馬県',"11"=>'埼玉県',"12"=>'千葉県',"13"=>'東京都',"14"=>'神奈川県',"15"=>'新潟県',"16"=>'富山県',"17"=>'石川県',"18"=>'福井県',"19"=>'山梨県',"20"=>'長野県',"21"=>'岐阜県',"22"=>'静岡県',"23"=>'愛知県',"24"=>'三重県',"25"=>'滋賀県',"26"=>'京都府',"27"=>'大阪府',"28"=>'兵庫県',"29"=>'奈良県',"30"=>'和歌山県',"31"=>'鳥取県',"32"=>'島根県',"33"=>'岡山県',"34"=>'広島県',"35"=>'山口県',"36"=>'徳島県',"37"=>'香川県',"38"=>'愛媛県',"39"=>'高知県',"40"=>'福岡県',"41"=>'佐賀県',"42"=>'長崎県',"43"=>'熊本県',"44"=>'大分県',"45"=>'宮崎県',"46"=>'鹿児島県',"47"=>'沖縄県'
	));
	////////////////////////////////////////////////////

		echo $this->Form->end("送信");
	?>



</div>


<div id="event_form5" class="event_original_form">
	<?
		echo $this->Form->create('StudyAbroad',array(
			'url' => array('controller' => 'Admin', 'action' => 'goaddoriginal'),"class"=>""));
		echo $this->Form->input("cost",array("label"=>"費用"));
		echo $this->Form->input("class",array("label"=>'時間割サンプル'));
		echo $this->Form->input("stay_type",array("label"=>"滞在の種類"));
		echo $this->Form->input("conditions",array("label"=>"応募条件"));
		echo $this->Form->input("environment",array("label"=>"環境"));
		echo $this->Form->input("deadline",array("label"=>"締め切り"));
		echo $this->Form->input("event_id",array("value"=>$id,"type"=>"hidden"));
		echo $this->Form->input("State.state",array("value"=>$state,"type"=>"hidden"));

	//追加分2015/04/07 by Mark///////////////////////////
		echo $this->Form->select('country_name', array(
			"1"=>"アメリカ","2"=>"フランス","3"=>"イギリス", "4"=>"イタリア",
			"5"=>"ドイツ","6"=>"中国","7"=>"韓国","8"=>"台湾","9"=>"マレーシア", "10"=>"ベトナム", "11" => "フィリピン"
		));
	////////////////////////////////////////////////////

		echo $this->Form->end("送信する");
	?>

</div>







<div id="event_form6" class="event_original_form">

<?
		echo $this->Form->create('Camp',array(
			'url' => array('controller' => 'Admin', 'action' => 'goaddoriginal'),"class"=>""));
		echo $this->Form->input("fromwhere",array("label"=>"発着地"));
		echo $this->Form->input("limit_num",array("label"=>'募集人数'));
		echo $this->Form->input("stay_type",array("label"=>"滞在の種類"));
		echo $this->Form->input("cost",array("label"=>"費用"));
		echo $this->Form->input("shedule",array("label"=>"スケジュール"));
		echo $this->Form->input("withmen",array("label"=>"添乗員"));
		echo $this->Form->input("tuition",array("label"=>"授業料"));
		echo $this->Form->input("food",array("label"=>"滞在中の食事"));
		echo $this->Form->input("event_id",array("value"=>$id,"type"=>"hidden"));
		echo $this->Form->input("State.state",array("value"=>$state,"type"=>"hidden"));

		//追加分2015/04/07 by Mark///////////////////////////
		echo $this->Form->select('pref', array(
			"1"=>"北海道","2"=>'青森県',"3"=>'岩手県',"4"=>'宮城県',"5"=>'秋田県',"6"=>'山形県',"7"=>'福島県',"8"=>'茨城県',"9"=>'栃木県',"10"=>'群馬県',"11"=>'埼玉県',"12"=>'千葉県',"13"=>'東京都',"14"=>'神奈川県',"15"=>'新潟県',"16"=>'富山県',"17"=>'石川県',"18"=>'福井県',"19"=>'山梨県',"20"=>'長野県',"21"=>'岐阜県',"22"=>'静岡県',"23"=>'愛知県',"24"=>'三重県',"25"=>'滋賀県',"26"=>'京都府',"27"=>'大阪府',"28"=>'兵庫県',"29"=>'奈良県',"30"=>'和歌山県',"31"=>'鳥取県',"32"=>'島根県',"33"=>'岡山県',"34"=>'広島県',"35"=>'山口県',"36"=>'徳島県',"37"=>'香川県',"38"=>'愛媛県',"39"=>'高知県',"40"=>'福岡県',"41"=>'佐賀県',"42"=>'長崎県',"43"=>'熊本県',"44"=>'大分県',"45"=>'宮崎県',"46"=>'鹿児島県',"47"=>'沖縄県'
		));
		////////////////////////////////////////////////////

		echo $this->Form->end("送信する");

	?>


</div>


<div id="event_form7" class="event_original_form">
<?
		echo $this->Form->create('Lesson',array(
			'url' => array('controller' => 'Admin', 'action' => 'goaddoriginal'),"class"=>""));
		
		echo $this->Form->input("skill",array("label"=>"学べること"));
		echo $this->Form->input("cost",array("label"=>"費用"));
		echo $this->Form->input("event_id",array("value"=>$id,"type"=>"hidden"));
		echo $this->Form->input("State.state",array("value"=>$state,"type"=>"hidden"));

		//追加分2015/04/07 by Mark///////////////////////////
		echo $this->Form->select('pref', array(
			"1"=>"北海道","2"=>'青森県',"3"=>'岩手県',"4"=>'宮城県',"5"=>'秋田県',"6"=>'山形県',"7"=>'福島県',"8"=>'茨城県',"9"=>'栃木県',"10"=>'群馬県',"11"=>'埼玉県',"12"=>'千葉県',"13"=>'東京都',"14"=>'神奈川県',"15"=>'新潟県',"16"=>'富山県',"17"=>'石川県',"18"=>'福井県',"19"=>'山梨県',"20"=>'長野県',"21"=>'岐阜県',"22"=>'静岡県',"23"=>'愛知県',"24"=>'三重県',"25"=>'滋賀県',"26"=>'京都府',"27"=>'大阪府',"28"=>'兵庫県',"29"=>'奈良県',"30"=>'和歌山県',"31"=>'鳥取県',"32"=>'島根県',"33"=>'岡山県',"34"=>'広島県',"35"=>'山口県',"36"=>'徳島県',"37"=>'香川県',"38"=>'愛媛県',"39"=>'高知県',"40"=>'福岡県',"41"=>'佐賀県',"42"=>'長崎県',"43"=>'熊本県',"44"=>'大分県',"45"=>'宮崎県',"46"=>'鹿児島県',"47"=>'沖縄県'
		));
		////////////////////////////////////////////////////

		echo $this->Form->end("送信する");

	?>


</div>



<div id="event_form8" class="event_original_form">
	<?
		echo $this->Form->create('FunnyEvent',array(
			'url' => array('controller' => 'Admin', 'action' => 'goaddoriginal'),"class"=>""));
		
		echo $this->Form->input("limit_num",array("label"=>"募集人数"));
		echo $this->Form->input("limit_min",array("label"=>"最小人数"));
		echo $this->Form->input("deadline",array("label"=>"締め切り日時"));
		echo $this->Form->input("cost",array("label"=>"費用"));
		echo $this->Form->input("schedule",array("label"=>"スケジュール"));


		echo $this->Form->input("event_id",array("value"=>$id,"type"=>"hidden"));
		echo $this->Form->input("State.state",array("value"=>$state,"type"=>"hidden"));

		//追加分2015/04/07 by Mark///////////////////////////
		echo $this->Form->select('pref', array(
			"1"=>"北海道","2"=>'青森県',"3"=>'岩手県',"4"=>'宮城県',"5"=>'秋田県',"6"=>'山形県',"7"=>'福島県',"8"=>'茨城県',"9"=>'栃木県',"10"=>'群馬県',"11"=>'埼玉県',"12"=>'千葉県',"13"=>'東京都',"14"=>'神奈川県',"15"=>'新潟県',"16"=>'富山県',"17"=>'石川県',"18"=>'福井県',"19"=>'山梨県',"20"=>'長野県',"21"=>'岐阜県',"22"=>'静岡県',"23"=>'愛知県',"24"=>'三重県',"25"=>'滋賀県',"26"=>'京都府',"27"=>'大阪府',"28"=>'兵庫県',"29"=>'奈良県',"30"=>'和歌山県',"31"=>'鳥取県',"32"=>'島根県',"33"=>'岡山県',"34"=>'広島県',"35"=>'山口県',"36"=>'徳島県',"37"=>'香川県',"38"=>'愛媛県',"39"=>'高知県',"40"=>'福岡県',"41"=>'佐賀県',"42"=>'長崎県',"43"=>'熊本県',"44"=>'大分県',"45"=>'宮崎県',"46"=>'鹿児島県',"47"=>'沖縄県'
		));
		////////////////////////////////////////////////////

		echo $this->Form->end("送信する");

	?>


</div>


<div id="event_form9" class="event_original_form">
	<?
		echo $this->Form->create('StudentGroup',array(
			'url' => array('controller' => 'Admin', 'action' => 'goaddoriginal'),"class"=>""));

		echo $this->Form->input("limit_num",array("label"=>"募集人数"));
		echo $this->Form->input("cost",array("label"=>"費用"));


		echo $this->Form->input("event_id",array("value"=>$id,"type"=>"hidden"));
		echo $this->Form->input("State.state",array("value"=>$state,"type"=>"hidden"));

		//追加分2015/04/07 by Mark///////////////////////////
		echo $this->Form->select('pref', array(
			"1"=>"北海道","2"=>'青森県',"3"=>'岩手県',"4"=>'宮城県',"5"=>'秋田県',"6"=>'山形県',"7"=>'福島県',"8"=>'茨城県',"9"=>'栃木県',"10"=>'群馬県',"11"=>'埼玉県',"12"=>'千葉県',"13"=>'東京都',"14"=>'神奈川県',"15"=>'新潟県',"16"=>'富山県',"17"=>'石川県',"18"=>'福井県',"19"=>'山梨県',"20"=>'長野県',"21"=>'岐阜県',"22"=>'静岡県',"23"=>'愛知県',"24"=>'三重県',"25"=>'滋賀県',"26"=>'京都府',"27"=>'大阪府',"28"=>'兵庫県',"29"=>'奈良県',"30"=>'和歌山県',"31"=>'鳥取県',"32"=>'島根県',"33"=>'岡山県',"34"=>'広島県',"35"=>'山口県',"36"=>'徳島県',"37"=>'香川県',"38"=>'愛媛県',"39"=>'高知県',"40"=>'福岡県',"41"=>'佐賀県',"42"=>'長崎県',"43"=>'熊本県',"44"=>'大分県',"45"=>'宮崎県',"46"=>'鹿児島県',"47"=>'沖縄県'
		));
		////////////////////////////////////////////////////

		echo $this->Form->end("送信する");

	?>


</div>

<div id="event_form4" class="event_original_form">
	<?
		echo $this->Form->create('StudentGroupInfo',array(
			'url' => array('controller' => 'Admin', 'action' => 'goaddoriginal'),"class"=>""));
		
		echo $this->Form->input("universities",array("label"=>"主要大学"));
		
		echo $this->Form->input("activities",array("label"=>"活動頻度"));
		

		echo $this->Form->input("event_id",array("value"=>$id,"type"=>"hidden"));
		echo $this->Form->input("State.state",array("value"=>$state,"type"=>"hidden"));

		//追加分2015/04/07 by Mark///////////////////////////
		echo $this->Form->select('pref', array(
			"1"=>"北海道","2"=>'青森県',"3"=>'岩手県',"4"=>'宮城県',"5"=>'秋田県',"6"=>'山形県',"7"=>'福島県',"8"=>'茨城県',"9"=>'栃木県',"10"=>'群馬県',"11"=>'埼玉県',"12"=>'千葉県',"13"=>'東京都',"14"=>'神奈川県',"15"=>'新潟県',"16"=>'富山県',"17"=>'石川県',"18"=>'福井県',"19"=>'山梨県',"20"=>'長野県',"21"=>'岐阜県',"22"=>'静岡県',"23"=>'愛知県',"24"=>'三重県',"25"=>'滋賀県',"26"=>'京都府',"27"=>'大阪府',"28"=>'兵庫県',"29"=>'奈良県',"30"=>'和歌山県',"31"=>'鳥取県',"32"=>'島根県',"33"=>'岡山県',"34"=>'広島県',"35"=>'山口県',"36"=>'徳島県',"37"=>'香川県',"38"=>'愛媛県',"39"=>'高知県',"40"=>'福岡県',"41"=>'佐賀県',"42"=>'長崎県',"43"=>'熊本県',"44"=>'大分県',"45"=>'宮崎県',"46"=>'鹿児島県',"47"=>'沖縄県'
		));
		////////////////////////////////////////////////////

		echo $this->Form->end("送信する");

	?>

</div>

<div id="event_form3" class="event_original_form">
	<?
	echo $this->Form->create('Intern',array(
		'url' => array('controller' => 'Admin', 'action' => 'goaddoriginal'),"class"=>""));
	echo $this->Form->input("target",array("label"=>"対象"));
	echo $this->Form->input("limit_num",array("label"=>'募集人数'));
	echo $this->Form->input("skill",array("label"=>"身に付くスキル"));
	echo $this->Form->input("payment",array("label"=>"給与"));
	echo $this->Form->input("conditions",array("label"=>"応募条件"));
	echo $this->Form->input("treatment",array("label"=>"待遇"));
	echo $this->Form->input("event_id",array("value"=>$id,"type"=>"hidden"));
	echo $this->Form->input("State.state",array("value"=>$state,"type"=>"hidden"));

	//追加分2015/04/07 by Mark///////////////////////////
	echo $this->Form->select('country_name', array(
		"1"=>"アメリカ","2"=>"フランス","3"=>"イギリス", "4"=>"イタリア",
		"5"=>"ドイツ","6"=>"中国","7"=>"韓国","8"=>"台湾","9"=>"マレーシア", "10"=>"ベトナム"
	));
	////////////////////////////////////////////////////

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


