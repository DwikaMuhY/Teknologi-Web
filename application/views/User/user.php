<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home : User</title>
	<link rel="stylesheet" href="<?php echo site_url('../assets/css/style/user.css')?>">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
	<nav class="navbar">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a href="<?php echo site_url("User")?>" class="nav-link">
					<svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"/></svg>
					<span class="link-text">Halaman Utama</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo site_url("Vote")?>" class="nav-link">
					<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="48px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><g><rect fill="none" height="24" width="24"/></g><g><path d="M14,4v5c0,1.12,0.37,2.16,1,3H9c0.65-0.86,1-1.9,1-3V4H14 M17,2H7C6.45,2,6,2.45,6,3c0,0.55,0.45,1,1,1c0,0,0,0,0,0l1,0v5 c0,1.66-1.34,3-3,3v2h5.97v7l1,1l1-1v-7H19v-2c0,0,0,0,0,0c-1.66,0-3-1.34-3-3V4l1,0c0,0,0,0,0,0c0.55,0,1-0.45,1-1 C18,2.45,17.55,2,17,2L17,2z"/></g></svg>
					<span class="link-text">Coblos</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo site_url("Live")?>" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm7.93 9H13V4.07c3.61.45 6.48 3.32 6.93 6.93zM4 12c0-4.07 3.06-7.44 7-7.93v15.86c-3.94-.49-7-3.86-7-7.93zm9 7.93V13h6.93c-.45 3.61-3.32 6.48-6.93 6.93z"/></svg>
					<span class="link-text">Live Count</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?php echo site_url('User/logout');?>" class="nav-link">
					<svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10.09 15.59L11.5 17l5-5-5-5-1.41 1.41L12.67 11H3v2h9.67l-2.58 2.59zM19 3H5c-1.11 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"/></svg>
					<span class="link-text">Logout</span>
				</a>
			</li>
		</ul>
	</nav>

	<main>
		<br>
		<h1 align="center">Selamat Datang!</h1>
		<br>
		<?php
		echo "<center><h2>".$nama."<br>";

		echo "<center><h4>".$nik."<br>";

		echo "<center><h5>".$email;
		?>
	</main>
</body>
</html>
