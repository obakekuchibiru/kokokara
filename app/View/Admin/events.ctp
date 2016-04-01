<?$this->Html->link("イベント追加",array("action"=>"eventAdd"))?>



<table>
	<tr>
		<th>イベント名</th>
		<th>PV数</th>
		<th>参加数</th>
		<th>企業</th>
		<th>編集,削除</th>
	</tr>
		



	<?foreach($events as $event):?>
		<tr id="<?echo 'event'.$event['Event']['id']?>">
			<td><?echo $this->Html->link($event["Event"]["title"],
			array("controller"=>"Events","?"=>array("id"=>$event["Event"]["id"])))?></td>

			<td><?echo $event["logs"]."pv";?></td>
			<td><?echo $event["applies"]."回";?></td>
			<td><?echo $event["Event"]["company_info"];?></td>

			<td>
				<button onclick="location.href='<?php echo $this->html->url('/Admin/editevent?id=' . $event['Event']['id']);?>';">編集</button>
				<button onclick="location.href='<?php echo $this->html->url('/Admin/deleteevent?id=' . $event['Event']['id']);?>';">削除</button>
			</td>
		</tr>
		
	<?endforeach;?>

<table>