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
      <th style="font-weight:light;">ユーザー</th>
      <th style="font-weight:light;">イベント名</th>
    </tr>
  </thead>
  <tbody class="dashboard-lists">
    <tr data-href="http://www.webantena.net/">
      <td>Taro Suzuki</td>
      <td>
        新会社設立!! IoT・機械学習など先端技術領域で共同創業者を募集！
        <p style="margin:0;padding:0;padding-top:5px;font-size:12px;">投稿日：2016-07-24</p>
      </td>
    </tr>
    <tr>
      <td>Jacob Poyken Thornton</td>
      <td>
        新会社設立!! IoT・機械学習など先端技術領域で共同創業者を募集！
        <p style="margin:0;padding:0;padding-top:5px;font-size:12px;">投稿日：2016-07-22</p>
      </td>
    </tr>
    <tr>
      <td>Jacob Poyken Thornton</td>
      <td>
        新会社設立!! IoT・機械学習など先端技術領域で共同創業者を募集！
        <p style="margin:0;padding:0;padding-top:5px;font-size:12px;">投稿日：2016-07-20</p>
      </td>
    </tr>
  </tbody>
</table>
