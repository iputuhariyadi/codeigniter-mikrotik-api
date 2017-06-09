    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Mikrotik Control Panel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if ($this->router->fetch_class() == 'login') { echo 'class="active"'; } ?>><a href="<?php echo base_url().'login'; ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			<li <?php if ($this->router->fetch_class() == 'hotspot') { echo 'class="active"'; } ?>><a href="<?php echo base_url().'hotspot'; ?>"><span class="glyphicon glyphicon-user"></span> Hotspot</a></li>
		  </ul> 
		  <?php if ($this->session->userdata('username_mikrotik')) { ?> 
			<ul class="nav navbar-nav navbar-right">
				<?php if ($this->session->userdata('login')){ ?>
				<li><a href="#"> <?php echo "<span class=\"glyphicon glyphicon-user\"></span> Welcome, ". $this->session->userdata('username_mikrotik'); ?></a></li>
				<?php } ?>
				<li><a href="<?php echo base_url().'login/logout'; ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			</ul>
          <?php } ?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>