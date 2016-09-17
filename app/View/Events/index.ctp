<h1>検索テスト</h1>

<?php foreach ($event as $event) : ?>
<li>
<?php echo h($event['Event']['id']); ?><br>
<?php echo h($event['Event']['title']); ?>
</li>
<?php endforeach; ?>
</ul>