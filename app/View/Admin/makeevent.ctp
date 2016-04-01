
<?echo $this->Html->script("jquery-1.11.2.js");?>
<?echo $this->Html->css("kai.css");?>


<h2>イベント作成</h2>

<h3>基本情報</h3>

<?php

echo $this->Form->create('Event',
    array('type' => 'file','url' =>
        array('controller' => 'admin', 'action' => 'addEvent')));
echo $this->Form->input("title");
echo '<p class="form_p">*こちらがイベントページのタイトルとなります。およそ30字程度でご記入下さい。</p><br><br>';

echo $this->Form->input('Image.0.attachment', array('type' => 'file', 'label' => 'メイン画像'));
echo '<p class="form_p">*こちらが1)イベントページのトップに表示される画像及び、2)その他ページにおけるサムネイル画像となります。</p><br>';

echo $this->Form->input('Image.0.model', array('type' => 'hidden', 'value' => 'Event'));
echo $this->Form->input('Image.1.attachment', array('type' => 'file', 'label' => '本文中画像１'));
echo '<p class="form_p">*こちらが本文中に挿入できる画像です。</p><br>';
echo $this->Form->input('Image.1.model', array('type' => 'hidden', 'value' => 'Event'));
echo $this->Form->input('Image.2.attachment', array('type' => 'file', 'label' => '本文中画像2'));
echo '<p class="form_p">*こちらが本文中に挿入できる画像です。</p><br>';

echo $this->Form->input('Image.2.model', array('type' => 'hidden', 'value' => 'Event'));
echo $this->Form->input('Image.3.attachment', array('type' => 'file', 'label' => '企業ロゴ・企業イメージ画像'));

echo $this->Form->input('Image.3.model', array('type' => 'hidden', 'value' => 'Event'));

//追加分2015/04/07 by Mark///////////////////////////
echo $this->Form->input("company_name", array("div"=>"aaa","label"=>"企業名"));
echo $this->Form->input("company_info", array("div"=>"aaa","label"=>"企業紹介"));
////////////////////////////////////////////////////

echo $this->Form->input("body",array("class"=>"","div"=>"aaa","label"=>"概要"));
echo '<p class="form_p">*ご登録頂けるイベントの概要やアピールポイントなどを70文字程度でご要説下さいませ。<br>こちらは記事一覧リストなどでイベントの紹介文として表示されます。</p><br>';

echo $this->Form->input("detail",array("class"=>"",'div'=>"aaa","label"=>"詳細"));
echo '<p class="form_p">*イベントに関する情報を自由にご記入下さい。</p><br>';

echo $this->Form->input("period",array("class"=>"",'div'=>"aaa","label"=>"期間"));
echo '<p class="form_p">*イベントを行う期間をご記入下さい。（例：2015年5月6日 10:00~16:00や2015年5月6日~2015年5月8日）。</p><br><br><br>';

echo '<h1>本件に関するお問い合わせ先</h1>';



/**
echo $this->Form->input("pref",array("class"=>"",'div'=>"aaa","label"=>"場所","type"==>"select",
	"options" =>array('北海道','青森県','岩手県','宮城県','秋田県','山形県', '福島県', '茨城県','栃木県','群馬県','埼玉県','千葉県','東京都','神奈川県','新潟県','富山県','石川県','福井県','山梨県','長野県','岐阜県','静岡県','愛知県','三重県','滋賀県','京都府','大阪府','兵庫県','奈良県','和歌山県','鳥取県','島根県','岡山県','広島県','山口県','徳島県','香川県','愛媛県','高知県','福岡県','佐賀県','長崎県','熊本県','大分県','宮崎県','鹿児島県','沖縄県')
	));
echo $this->Form->input("location",array("class"=>"",'div'=>"aaa","label"=>"場所"));
echo $this->Form->input("date",array("class"=>"",'div'=>"aaa","label"=>"日時"));
**/

?>
<h3>カテゴリー</h3>
<p class="form_p">*イベントのカテゴリーを選択して下さい。</p>
<?


echo $this->Form->select('state', array(
	"1"=>"長期インターン","2"=>"短期インターン","3"=>"海外インターン",
	"5"=>"留学","6"=>"合宿","7"=>"習い事","8"=>"面白い","9"=>"学生団体","4"=>"学生団体info"
	));

?>




<?
echo $this->Form->end("次へ");
?>
<p class="form_p">*「次へ」を押すと、イベントの詳細情報をご入力頂けます。</p>










