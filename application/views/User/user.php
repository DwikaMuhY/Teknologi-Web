<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url('../assets/css/bootstrap.css')?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Home : User</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?php echo site_url("User"); ?>">Halaman User</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">

				<ul class="navbar-nav mr-auto">
				<li>
					<?php
					$calon = '<a class="nav-link" href="#">Vote</a>';
					echo $calon;
					?>
				</li>
				<li class="nav-item">
				<?php
					$calon = '<a class="nav-link" href="#">Live Count</a>';
					echo $calon;
					?>
				</li>
				</ul>
				<ul class="nav navbar-nav ml-auto">
					<li class="nav-item">
						<a href="<?php echo site_url('User/logout');?>" class="logout">Logout</a>
					</li>
				</ul>

			</div>
		</div>
	</nav>
</body>
</html>