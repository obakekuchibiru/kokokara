<h2>企業様情報編集ページ</h2>

<?php

debug($company_data);


echo $this->Form->create('Company', array('url'=>'edit'));
echo $this->Form->input('Company.id',array('type'=>'hidden','value'=>$company_data['Company']['id']));
echo $this->Form->input('Company.name', array('label'=>'企業名'));
echo $this->Form->input('Company.email', array('label'=>'メールアドレス'));
echo $this->Form->input('Company.member_num', array('label'=>'従業員数'));
echo $this->Form->input('Company.country', array('label'=>'場所（国名）'));
echo $this->Form->input('Company.state', array('label'=>'場所（都市名）'));
echo $this->Form->input('Company.duties', array('label'=>'会社概要（事業内容）'));
echo $this->Form->input('Company.phone', array('label'=>'電話番号'));
echo $this->Form->input('Company.url', array('label'=>'サイトURL'));
echo $this->Form->input('Company.industry_type', array('label'=>'サービスの業種'));
echo $this->Form->input('Company.thumbnail', array('label'=>'企業ロゴ'));
echo $this->Form->input('Company.facebook', array('label'=>'Facebookページのurl'));
echo $this->Form->input('Company.twitter', array('label'=>'twitterアカウント'));
echo $this->Form->end('内容更新');

?>
