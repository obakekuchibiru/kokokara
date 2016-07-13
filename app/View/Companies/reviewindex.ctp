<h2>レビュー確認&承認テスト</h2>

<?php debug($review); ?>

<ul>
<?php foreach ($review as $review) : ?>
<li>
<?php echo h($review['Review']['id']); ?>
<?php echo $this->Form->postlink('承認', array('action'=>'reviewconfirm', $review['Review']['id']), array('confirm'=>'承認しますか？')); ?>
</li>
<?php endforeach; ?>
</ul>
