<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting</title>
    <link rel="stylesheet" href="<?php echo site_url('../assets/css/bootstrap.css')?>">
    <style>
        .login-page{
            display: flex;
            align-items: stretch;
            justify-content: left;
            height: 100vh;
        }
        .card{
            border-radius: 0;
            color: #0061a8;
            height: 100vh;
            width: 30%;
        }

        .card img{
            height: 100vh;
            width: 100%;
        }

        .card{
            width: 100%;
        }
        
        .login{
            width: 40%;
            padding: 0 40px;
            display: flex;
            justify-content: center;
        }

        .login p{
            font-size: 20px;
            font-weight: lighter; 
        }

        form label{
            margin-top: 20px;
        }

        .tombol{
            margin-top: 40px;
            display: flex;
            justify-content: center;
        }

        .login h4{
            margin-bottom: 20px;
        }

        .btn-daftar{
            border: 1px solid #0061a8;
            color: #0061a8;
            margin-left: 20px;
        }

        .btn-daftar:hover{
            background-color: #0061a8;
            color: white;
        }

        .btn-login{
            background-color: #0061a8;
            color: white;
        }

        .btn-login:hover{
            background-color: #0061a9;
            color: white;
        }
    </style>
</head>
<body>   
    <?php
    echo "<h2>Selamat Datang ".$Nama."</h2>";
    ?>
    <h1>Pilih Presiden</h1>
 
</body>
</html>