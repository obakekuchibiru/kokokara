<? $this->Html->css('index-style', null, array('inline' => false)); ?>
<div class="container" style="margin-top:90px;margin-bottom:40px;">
	<div class="row">
			<?php 
			if($this->here == '/events/category/1'){
			echo '<div class="col-xs-12 incnts-belt" style="background:#d16b9a;"><h1>長期インターン</h1></div>';
			}elseif($this->here == '/events/category/2'){
			echo '<div class="col-xs-12 incnts-belt" style="background:#d1a16b;"><h1>短期インターン</h1></div>';
			}elseif($this->here == '/events/category/3'){
			echo '<div class="col-xs-12 incnts-belt" style="background:#ced16b;"><h1>海外インターン</h1></div>';
			}elseif($this->here == '/events/category/5'){
			echo '<div class="col-xs-12 incnts-belt" style="background:#9ad16b;"><h1>留学</h1></div>';
			}elseif($this->here == '/events/category/6'){
			echo '<div class="col-xs-12 incnts-belt" style="background:#6bd16e;"><h1>合宿</h1></div>';
			}elseif($this->here == '/events/category/7'){
			echo '<div class="col-xs-12 incnts-belt" style="background:#6bd1a1;"><h1>習い事</h1></div>';
			}elseif($this->here == '/events/category/8'){
			echo '<div class="col-xs-12 incnts-belt" style="background:#6bcad1;"><h1>おもしろイベント</h1></div>';
			}elseif($this->here == '/events/category/4'){
			echo '<div class="col-xs-12 incnts-belt" style="background:#6b97d1;"><h1>学生団体</h1></div>';
			}elseif($this->here == '/events/category/9'){
			echo '<div class="col-xs-12 incnts-belt" style="background:#6e6bd1;"><h1>学生団体イベント</h1></div>';
			}	
			?>
	</div>
	<div class="row" >
		<div class="col-sm-4 hidden-xs" style="margin-top:35px;border-right:1px solid #ededed; padding-bottom:20px;">
			<? echo $this->element('event-pg-sidebar')?>
		</div>
		<div class="col-sm-8">
		<?
			$i = 0;
			$kiji = 10;
			rsort($events);
			foreach ($events as $event){ 
			if($i >= $kiji){
			break;
		}else{ ?>
		<a href="/events?id=<?echo $event['Event']['id']?>" target="_blank">
			<div class="row ctg-row">
				<div class="col-sm-2 ctg-row-comp-thumb" style="padding-right:0;">
					<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][3]['dir'] . '/' . $event['Image'][3]['attachment'])?>
				</div>
				<div class="col-sm-10 art-list-comp">
					<h2><?echo $event['Event']['company_name']?></h2>
					<h1><?echo $event['Event']['title']?></h1>
					<p class="text-overflow"><?echo $event['Event']['body']?></p>
					<?echo $this->Html->image('../files/image/attachment/'. $event['Image'][0]['dir'] . '/' . $event['Image'][0]['attachment'], array('class' => 'art-list-thumb img-obfit-list'))?>
					<div class="col-xs-12" style="border:1px solid #ededed;">
						<div class="row art-list-info">
							<div class="col-xs-6" style="border-right:1px solid #ededed;">
								<!--
								<p>場所:<font style="">
									<?php 
										if($event['Event']['state'] == 5){
											echo $this->element('StudyAbroad_country');
										}elseif($event['Event']['state'] == 3){
											echo $this->element('Intern_country');
										}elseif($event['Event']['state'] == 1){
											echo $event['Intern']['pref'];
										}elseif($event['Event']['state'] == 2){
											echo $event['Intern']['pref'];
										}elseif($event['Event']['state'] == 4){
											echo $event['StudentGroupInfo']['pref'];
										}elseif($event['Event']['state'] == 6){
											echo $event['camp']['pref'];
										}elseif($event['Event']['state'] == 7){
											echo $event['lesson']['pref'];
										}elseif($event['Event']['state'] == 8){
											echo $event['funny_event']['pref'];
										}elseif($event['Event']['state'] == 9){
											echo $event['student_group']['pref'];
										}
									?>
								</font></p>
							-->
							</div>
							<div class="col-xs-6">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</a>
		<?
		$i++;
		}
		}
		?>
		</div>
		<div class="col-sm-4 hidden-sm hidden-md hidden-lg" style="margin-top:35px;border-right:1px solid #ededed; padding-bottom:20px;">
			<? echo $this->element('event-pg-sidebar')?>
		</div>
	</div>
</div>