<script>
jQuery( function($) {
	$('tbody tr[data-href]').addClass('clickable').click( function() {
		window.location = $(this).attr('data-href');
	}).find('a').hover( function() {
		$(this).parents('tr').unbind('click');
	}, function() {
		$(this).parents('tr').click( function() {
			window.location = $(this).attr('data-href');
		});
	});
});
</script>
<table class="table">
  <thead>
    <tr>
      <th style="font-weight:light;">イベント名</th>
    </tr>
  </thead>
  <tbody class="dashboard-lists">
    <?
    foreach ($events as $event){
      echo $this->element('lists/inside-foreach-eventlist');
    }
    ?>
  </tbody>
</table>
