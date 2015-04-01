<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<style>
	.red{
		background:red;width:100%;height:100px;
	}
	.blue{
		background:blue;width:100%;height:100px;
	}
	.white{
		background:white;width:100%;height:100px;
	}
</style>
</head>
<body>
<div class="container">

<div class="row">
	<div class="col-md-12">
		<div class="red">
			
		</div>
	</div>
</div>
	<div class="row">
		<div class="col-md-12">
			<div class="blue">
				<?php 
					$this->load->view($module.'/'.$view_file);
				 ?>
			</div>
		</div>
	</div>
</div>
	
</body>
</html>