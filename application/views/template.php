<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MikroTik Control Panel</title>
<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url().'assets/css/navbar-fixed-top.css'; ?>">
<script src="<?php echo base_url().'assets/js/jquery.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>
</head>
<body>
<?php
	$this->load->view('navigation');
?>
<div class="container">
<?php
	$this->load->view($container);
?>
</div>
<?php
	$this->load->view('footer');
?>
</body>
</html>