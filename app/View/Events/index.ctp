<h2>記事一覧</h2>

<ul>
<?php foreach ($events as $events) : ?>
<li>
<?php
// debug($event);
echo h($events['Event']['title']);
?>
</li>
<?php endforeach; ?>
</ul>