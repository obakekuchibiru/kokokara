<?php
echo $this->Form->select('Event.country', array(
  '1'=>'インド',
  '2' =>'インドネシア',
  '3'=>'オーストラリア',
  '4'=>'カンボジア',
  '5'=>'シンガポール',
  '6'=>'タイ',
  '7'=>'ニュージーランド',
  '8'=>'フィリピン',
  '9'=>'ベトナム',
  '10'=>'マレーシア',
  '11'=>'ミャンマー',
  '12'=>'ラオス',
  '13'=>'韓国',
  '14'=>'香港',
  '15'=>'台湾',
  '16'=>'中国',
  ),
  array(
    'label'=>false,
    'empty'=>'選択して下さい(50音順)',
    'class'=>'form-control',
    'style'=>'margin-bottom:10px;'
  )
);
?>
