<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calon</title>
    <link rel="stylesheet" href="<?php echo site_url('../assets/css/bootstrap.css')?>">
    <style>
		  .header {
		  padding: 60px;
		  text-align: center;
		  background: #1abc9c;
		  color: white;
		  font-size: 30px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	  <a class="navbar-brand" href="#">Halaman Admin</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarText">
	    <ul class="navbar-nav mr-auto">
	      <li>
	        <?php
	      	$calon = '<a class="nav-link" href="'.site_url("Home/pindahKonfirm/").'">Konfirmasi</a>';
	        echo $calon;
	        ?>
	      </li>
	      <li class="nav-item">
	      <?php
	      	$calon = '<a class="nav-link" href="'.site_url("Home/pindahCalon/").'">Calon</a>';
	        echo $calon;
	        ?>
	      </li>
	    </ul>
	  </div>
	</nav>
	Isi dari Calon Disini
</body>
</html>