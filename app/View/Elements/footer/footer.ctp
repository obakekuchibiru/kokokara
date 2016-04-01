<footer>
	<div class="container">
	  <div class="row" style="padding-top:40px;">
	    <div class="col-sm-4">
	      <div style="height:200px;width:200px;background:#f3f3f3;margin:0 auto;"></div>
	    </div>
        <div class="col-sm-4">
	        <ul>
	        <h4 style="font-weight:bold;">kokokaraについて</h4>
	         <li>
	          <?php echo $this->Html->link(
	        	'kokokara Groupとは',
					array('controller'=>'pages/about',
						 'action'=>'about-us')
					)
				?>
	         </li>
	         <li><a href="#">ポリシー</a></li>
	         <li><a href="#">利用規約</a></li>
	         <li><a href="#">プライバシー</a></li>
	         <li><a href="#">サイトマップ</a></li>
	         <li>
	          <?php echo $this->Html->link(
	        	'ヘルプセンター',
				array('controller'=>'pages/help',
					'action'=>'main')
					)
			   ?>
			  </li>
	         </ul>
	    </div>
	    <div class="col-sm-4"></div>
	    </div>
	</div>
</footer>