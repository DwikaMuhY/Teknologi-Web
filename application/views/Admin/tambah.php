<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Calon</title>
    <link rel="stylesheet" href="<?php echo site_url('../assets/css/bootstrap.css')?>">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <style>
        .content-wrapper{
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 50px;
        }
        .pad{
            padding-top: 20px;
        }
        .logout{
            color: grey;
        }

        .logout:hover{
            text-decoration: none;
            color: rgb(200,200,200);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo site_url("Admin"); ?>">Halaman Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">

                <ul class="navbar-nav mr-auto">
                <li>
                    <?php
                    $calon = '<a class="nav-link" href="'.site_url("Admin/pindahKonfirm/").'">Konfirmasi</a>';
                    echo $calon;
                    ?>
                </li>
                <li class="nav-item">
                <?php
                    $calon = '<a class="nav-link" href="'.site_url("Admin/pindahCalon/").'">Calon</a>';
                    echo $calon;
                    ?>
                </li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="<?php echo site_url('Admin/logout');?>" class="logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="padding-top:40px;">
        <h3>Tambah Calon</h3>
    </div>
    <div class="container">
        <form action="<?php site_url('admin/calon/prosestambah'); ?>" method="post">
            <label>Nama Calon</label><br>
            <input type="text" name="nama" required="Nama Calon"><br>
            <label class="pad">Foto</label><br>
            <input type="file" name="fotoo"><br>
            <label class="pad">Visi</label><br>
            <textarea rows="10" cols="100" name="visii" required="Visi"></textarea><br>
            <label class="pad">Misi</label><br>
            <textarea rows="10" cols="100" name="misii" required="Misi"></textarea><br>
            <div class="form-group" style="padding-top:20px;">
                <div>
                    <input type="submit" value="Tambah Calon" class="btn btn-success">
                    <button type="button" onclick="window.history.go(-1)" class="btn btn-danger">Kembali</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>