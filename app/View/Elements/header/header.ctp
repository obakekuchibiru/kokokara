<header>
	<?php
		$current = Router::url();
		if ($current == '/kokokara/events/news') {
			echo '<nav class="navbar navbar-default navbar-fixed-top">';
		}else{
			echo '<nav class="navbar navbar-default">';
		}
	?>
	    <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header"style="border-right:solid 1px #dce0e0;">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="/kokokara/"><i class="fa fa-caret-square-o-right"></i>　kokokara</a>
	        </div>

	        <!-- Collect the nav links, forms, and other content for toggling -->
	        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	          <form class="navbar-form navbar-left" role="search" style="margin-top:12px;">
	            <div class="form-group">
	              <div class="input-group">
	                <span class="input-group-addon header-search-icon" id="sizing-addon2" style="">@</span>
	                <input type="text" class="form-control header-search-input" style="-webkit-box-shadow:none;"placeholder="今何したい？">
	              </div>
	            </div>
	            <button type="submit" class="btn btn-default">さがす</button>
	          </form>
	          <ul class="nav navbar-nav navbar-right">
	              
	          </ul>
	        </div><!-- /.navbar-collapse -->
	    </div><!-- /.container-fluid -->
	</nav>
</header>