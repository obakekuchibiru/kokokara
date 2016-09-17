<h1>検索テスト</h1>
<?php 
	echo $this->Form->create('Search',array('action'=>'index', 'url'=>'index'));
	echo $this->Form->input('title');
	echo $this->Form->end('検索');
	?>	
