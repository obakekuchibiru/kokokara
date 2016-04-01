<table>
<?foreach($event["Event"] as $element):?>
	<tr>
		<th>要素</th>
		<td><?echo $element?></td>
	</tr>
<?endforeach;?>


<script>
	var data=["","Intern","Intern","Intern","Intern",
	"StudyAbroad","Camp","Lesson","FunnyEvent","StudentGroup"];
	var t=data[<?echo $event["Event"]["state"]?>];
	console.log(t);
</script>


<?echo $s."fdsfds"."<script>t</script>"?>

