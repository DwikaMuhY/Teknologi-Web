<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pendaftaran</title>
    <link rel="stylesheet" href="<?php echo site_url('../assets/css/bootstrap.css')?>">
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
	<table border="1" align="center" class="table">
			<tr class="thead-dark">
				<th>NIK</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Akses</th>
			</tr>
			<?php
			foreach($user->result() as $row){
			echo "<tr>";
			echo "<td>$row->NIK</td>";
			echo "<td>$row->Nama</td>";
			echo "<td>$row->Email</td>";
			if($row->Akses == 0){
				$terima = '<a href="'.site_url("Home/terima/".$row->NIK).'">Terima</a>';
				$hapus = '<a href="'.site_url("Home/hapus/".$row->NIK).'">Tolak</a>';
				echo "<td>".$terima;
				echo $hapus."</td>";
			}else{
				echo "<td>Akses Diterima</td>";
			}
			echo "</tr>";
			}	
			?>
		</table>
</body>
</html>
