<?php
//echo $this->Html->script('bootstrap-tagsinput-angular.js');
echo $this->Html->script('bootstrap-tagsinput.js');
echo $this->Html->css('bootstrap-tagsinput.css');
?>
<h2><?php echo h($student['Student']['name']); ?></h2>

<h3>ユーザータグ</h3>
<ul>
	<?php foreach($student['Stag'] as $stag): ?>
		<li><?php echo h($stag['name']); ?></li>
	<?php endforeach; ?>
</ul>

<h3>新規タグ付け</h3>

<?php echo $this->Form->create('StagsStudent', array('url' => array('controller' => 'admin', 'action' => 'student_tag'))); ?>
	<fieldset>
		<?php echo $this->Form->input('StagsStudent.student_id',  array('type' => 'hidden', 'value' => $student['Student']['id'])); ?>
		<?php echo $this->BootstrapForm->input('Stag.name', array('type'=>'text', 'label' => 'タグ', 'data-role' => 'tagsinput')); ?>
	</fieldset>
<?php echo $this->Form->end('投稿する'); ?>