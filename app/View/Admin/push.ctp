<h2>ユーザー検索</h2>

<p>メールしたいユーザーをチェックしてください</p>
<table>
		<tr>
			<th>名前</th>
			<th>PV数</th>
			<th>参加数</th>
			<th>最終ログイン</th>
			<th>Fb</th>
		</tr>
	

	<? $lastid=0;?>
	<script>var add=new Array();</script>
	<?foreach($students as $student):?>
		<script>
			add["<?echo $student['Student']['id']?>"]="<?echo $student['Student']['email']?>";
		</script>
		<tr>

		<td>
			<input type="checkbox" value="checked"id="<?echo 'check'. $student["Student"]["id"];?>">
			<?php
			$lastid=$student["Student"]["id"];
			echo $this->Form->postLink($student["Student"]["name"], array("controller"=>"admin", "action" => "student", $student["Student"]["id"]));
			?>
		</td>
		<td>
			<?echo $student["logs"]."pv";?>
		</td>
		<td><?echo $student["applies"]."回";?></td>
		<td><?echo $student["Student"]["modified"];?></td>
		<td><a href="<?echo $student['FacebookUser']['link']?>"　target="_blank">FBlink</a></td>
		
		</tr>
		
	<?endforeach;?>
	



</table>



<button onclick="mail(<?echo $lastid?>)">アドレス一覧作成</button>
<div class="hidebox"></div>
<textarea id="clipboad"></textarea>
<script>
	function mail(size){
		a="";
		count=0;
		for(i=1;i<=size;i++){
			if($("#check"+i).prop("checked")){
				a+=add[i]+"\n";
				count++;
			}

		}
		count+="人のユーザーのアドレスをコピー\n";
		$(".hidebox").css("display","block");
		$(".hidebox").html("<h3>"+count+"</h3>");

		
		$("#clipboad").val(a);

	
	}

	$(document).ready(function(){
	$('#clipboad')
		.focus(function(){
			$(this).select();
		})
		.click(function(){
			$(this).select();
			return false;
		});
	}); 
	


</script>
