<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kami!</title>
    <style>
        .content{
            padding: 0 50px;
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
        }

        .pp{
            max-height: 150px;
            height: 100%;
        }

        .card{
            text-align: center;
        }

        .icon{
            max-width: 25px;
        }

        nav{
            padding: 10px 20px;
        }

        .back{
            padding: 0 10px;
            top: 2px;
            position: relative;
        }

        nav a{
            color: black;
        }

        nav a:hover{
            color: black;
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="<?php echo site_url('../assets/css/bootstrap.css')?>">
</head>
<body>
    <nav>
        <a href="<?php echo site_url('Home')?>"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNDQ3LjI0MyA0NDcuMjQzIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA0NDcuMjQzIDQ0Ny4yNDM7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNDIwLjM2MSwxOTIuMjI5Yy0xLjgzLTAuMjk3LTMuNjgyLTAuNDM0LTUuNTM1LTAuNDFIOTkuMzA1bDYuODgtMy4yYzYuNzI1LTMuMTgzLDEyLjg0My03LjUxNSwxOC4wOC0xMi44bDg4LjQ4LTg4LjQ4DQoJCQljMTEuNjUzLTExLjEyNCwxMy42MTEtMjkuMDE5LDQuNjQtNDIuNGMtMTAuNDQxLTE0LjI1OS0zMC40NjQtMTcuMzU1LTQ0LjcyNC02LjkxNGMtMS4xNTIsMC44NDQtMi4yNDcsMS43NjQtMy4yNzYsMi43NTQNCgkJCWwtMTYwLDE2MEMtMy4xMTksMjEzLjI2OS0zLjEzLDIzMy41Myw5LjM2LDI0Ni4wMzRjMC4wMDgsMC4wMDgsMC4wMTcsMC4wMTcsMC4wMjUsMC4wMjVsMTYwLDE2MA0KCQkJYzEyLjUxNCwxMi40NzksMzIuNzc1LDEyLjQ1MSw0NS4yNTUtMC4wNjNjMC45ODItMC45ODUsMS44OTktMi4wMzMsMi43NDUtMy4xMzdjOC45NzEtMTMuMzgxLDcuMDEzLTMxLjI3Ni00LjY0LTQyLjQNCgkJCWwtODguMzItODguNjRjLTQuNjk1LTQuNy0xMC4wOTMtOC42NDEtMTYtMTEuNjhsLTkuNi00LjMyaDMxNC4yNGMxNi4zNDcsMC42MDcsMzAuNjg5LTEwLjgxMiwzMy43Ni0yNi44OA0KCQkJQzQ0OS42NTQsMjExLjQ5NCw0MzcuODA2LDE5NS4wNTksNDIwLjM2MSwxOTIuMjI5eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjwvc3ZnPg0K" class="icon"/><span class="back">Kembali</span></a>
    </nav>

    <div class="content">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top pp" src="<?php echo site_url('../assets/image/aboutus/Dwika.jpg')?>" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Dwika Muhammad Yasir</p>
                <p class="card-text">3411181XXX</p>
                <a href="https://www.instagram.com"><img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMnB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0zMDUgMjU2YzAgMjcuMDYyNS0yMS45Mzc1IDQ5LTQ5IDQ5cy00OS0yMS45Mzc1LTQ5LTQ5IDIxLjkzNzUtNDkgNDktNDkgNDkgMjEuOTM3NSA0OSA0OXptMCAwIi8+PHBhdGggZD0ibTM3MC41OTM3NSAxNjkuMzA0Njg4Yy0yLjM1NTQ2OS02LjM4MjgxMy02LjExMzI4MS0xMi4xNjAxNTctMTAuOTk2MDk0LTE2LjkwMjM0NC00Ljc0MjE4Ny00Ljg4MjgxMy0xMC41MTU2MjUtOC42NDA2MjUtMTYuOTAyMzQ0LTEwLjk5NjA5NC01LjE3OTY4Ny0yLjAxMTcxOS0xMi45NjA5MzctNC40MDYyNS0yNy4yOTI5NjgtNS4wNTg1OTQtMTUuNTAzOTA2LS43MDcwMzEtMjAuMTUyMzQ0LS44NTkzNzUtNTkuNDAyMzQ0LS44NTkzNzUtMzkuMjUzOTA2IDAtNDMuOTAyMzQ0LjE0ODQzOC01OS40MDIzNDQuODU1NDY5LTE0LjMzMjAzMS42NTYyNS0yMi4xMTcxODcgMy4wNTA3ODEtMjcuMjkyOTY4IDUuMDYyNS02LjM4NjcxOSAyLjM1NTQ2OS0xMi4xNjQwNjMgNi4xMTMyODEtMTYuOTAyMzQ0IDEwLjk5NjA5NC00Ljg4MjgxMyA0Ljc0MjE4Ny04LjY0MDYyNSAxMC41MTU2MjUtMTEgMTYuOTAyMzQ0LTIuMDExNzE5IDUuMTc5Njg3LTQuNDA2MjUgMTIuOTY0ODQzLTUuMDU4NTk0IDI3LjI5Njg3NC0uNzA3MDMxIDE1LjUtLjg1OTM3NSAyMC4xNDg0MzgtLjg1OTM3NSA1OS40MDIzNDQgMCAzOS4yNS4xNTIzNDQgNDMuODk4NDM4Ljg1OTM3NSA1OS40MDIzNDQuNjUyMzQ0IDE0LjMzMjAzMSAzLjA0Njg3NSAyMi4xMTMyODEgNS4wNTg1OTQgMjcuMjkyOTY5IDIuMzU5Mzc1IDYuMzg2NzE5IDYuMTEzMjgxIDEyLjE2MDE1NiAxMC45OTYwOTQgMTYuOTAyMzQzIDQuNzQyMTg3IDQuODgyODEzIDEwLjUxNTYyNCA4LjY0MDYyNiAxNi45MDIzNDMgMTAuOTk2MDk0IDUuMTc5Njg4IDIuMDE1NjI1IDEyLjk2NDg0NCA0LjQxMDE1NiAyNy4yOTY4NzUgNS4wNjI1IDE1LjUuNzA3MDMyIDIwLjE0NDUzMi44NTU0NjkgNTkuMzk4NDM4Ljg1NTQ2OSAzOS4yNTc4MTIgMCA0My45MDYyNS0uMTQ4NDM3IDU5LjQwMjM0NC0uODU1NDY5IDE0LjMzMjAzMS0uNjUyMzQ0IDIyLjExNzE4Ny0zLjA0Njg3NSAyNy4yOTY4NzQtNS4wNjI1IDEyLjgyMDMxMy00Ljk0NTMxMiAyMi45NTMxMjYtMTUuMDc4MTI1IDI3Ljg5ODQzOC0yNy44OTg0MzcgMi4wMTE3MTktNS4xNzk2ODggNC40MDYyNS0xMi45NjA5MzggNS4wNjI1LTI3LjI5Mjk2OS43MDcwMzEtMTUuNTAzOTA2Ljg1NTQ2OS0yMC4xNTIzNDQuODU1NDY5LTU5LjQwMjM0NCAwLTM5LjI1MzkwNi0uMTQ4NDM4LTQzLjkwMjM0NC0uODU1NDY5LTU5LjQwMjM0NC0uNjUyMzQ0LTE0LjMzMjAzMS0zLjA0Njg3NS0yMi4xMTcxODctNS4wNjI1LTI3LjI5Njg3NHptLTExNC41OTM3NSAxNjIuMTc5Njg3Yy00MS42OTE0MDYgMC03NS40ODgyODEtMzMuNzkyOTY5LTc1LjQ4ODI4MS03NS40ODQzNzVzMzMuNzk2ODc1LTc1LjQ4NDM3NSA3NS40ODgyODEtNzUuNDg0Mzc1YzQxLjY4NzUgMCA3NS40ODQzNzUgMzMuNzkyOTY5IDc1LjQ4NDM3NSA3NS40ODQzNzVzLTMzLjc5Njg3NSA3NS40ODQzNzUtNzUuNDg0Mzc1IDc1LjQ4NDM3NXptNzguNDY4NzUtMTM2LjMxMjVjLTkuNzQyMTg4IDAtMTcuNjQwNjI1LTcuODk4NDM3LTE3LjY0MDYyNS0xNy42NDA2MjVzNy44OTg0MzctMTcuNjQwNjI1IDE3LjY0MDYyNS0xNy42NDA2MjUgMTcuNjQwNjI1IDcuODk4NDM3IDE3LjY0MDYyNSAxNy42NDA2MjVjLS4wMDM5MDYgOS43NDIxODgtNy44OTg0MzcgMTcuNjQwNjI1LTE3LjY0MDYyNSAxNy42NDA2MjV6bTAgMCIvPjxwYXRoIGQ9Im0yNTYgMGMtMTQxLjM2MzI4MSAwLTI1NiAxMTQuNjM2NzE5LTI1NiAyNTZzMTE0LjYzNjcxOSAyNTYgMjU2IDI1NiAyNTYtMTE0LjYzNjcxOSAyNTYtMjU2LTExNC42MzY3MTktMjU2LTI1Ni0yNTZ6bTE0Ni4xMTMyODEgMzE2LjYwNTQ2OWMtLjcxMDkzNyAxNS42NDg0MzctMy4xOTkyMTkgMjYuMzMyMDMxLTYuODMyMDMxIDM1LjY4MzU5My03LjYzNjcxOSAxOS43NDYwOTQtMjMuMjQ2MDk0IDM1LjM1NTQ2OS00Mi45OTIxODggNDIuOTkyMTg4LTkuMzQ3NjU2IDMuNjMyODEyLTIwLjAzNTE1NiA2LjExNzE4OC0zNS42Nzk2ODcgNi44MzIwMzEtMTUuNjc1NzgxLjcxNDg0NC0yMC42ODM1OTQuODg2NzE5LTYwLjYwNTQ2OS44ODY3MTktMzkuOTI1NzgxIDAtNDQuOTI5Njg3LS4xNzE4NzUtNjAuNjA5Mzc1LS44ODY3MTktMTUuNjQ0NTMxLS43MTQ4NDMtMjYuMzMyMDMxLTMuMTk5MjE5LTM1LjY3OTY4Ny02LjgzMjAzMS05LjgxMjUtMy42OTE0MDYtMTguNjk1MzEzLTkuNDc2NTYyLTI2LjAzOTA2My0xNi45NTcwMzEtNy40NzY1NjItNy4zMzk4NDQtMTMuMjYxNzE5LTE2LjIyNjU2My0xNi45NTMxMjUtMjYuMDM1MTU3LTMuNjMyODEyLTkuMzQ3NjU2LTYuMTIxMDk0LTIwLjAzNTE1Ni02LjgzMjAzMS0zNS42Nzk2ODctLjcyMjY1Ni0xNS42Nzk2ODctLjg5MDYyNS0yMC42ODc1LS44OTA2MjUtNjAuNjA5Mzc1cy4xNjc5NjktNDQuOTI5Njg4Ljg4NjcxOS02MC42MDU0NjljLjcxMDkzNy0xNS42NDg0MzcgMy4xOTUzMTItMjYuMzMyMDMxIDYuODI4MTI1LTM1LjY4MzU5MyAzLjY5MTQwNi05LjgwODU5NCA5LjQ4MDQ2OC0xOC42OTUzMTMgMTYuOTYwOTM3LTI2LjAzNTE1NyA3LjMzOTg0NC03LjQ4MDQ2OSAxNi4yMjY1NjMtMTMuMjY1NjI1IDI2LjAzNTE1Ny0xNi45NTcwMzEgOS4zNTE1NjItMy42MzI4MTIgMjAuMDM1MTU2LTYuMTE3MTg4IDM1LjY4MzU5My02LjgzMjAzMSAxNS42NzU3ODEtLjcxNDg0NCAyMC42ODM1OTQtLjg4NjcxOSA2MC42MDU0NjktLjg4NjcxOXM0NC45Mjk2ODguMTcxODc1IDYwLjYwNTQ2OS44OTA2MjVjMTUuNjQ4NDM3LjcxMDkzNyAyNi4zMzIwMzEgMy4xOTUzMTMgMzUuNjgzNTkzIDYuODI0MjE5IDkuODA4NTk0IDMuNjkxNDA2IDE4LjY5NTMxMyA5LjQ4MDQ2OCAyNi4wMzkwNjMgMTYuOTYwOTM3IDcuNDc2NTYzIDcuMzQzNzUgMTMuMjY1NjI1IDE2LjIyNjU2MyAxNi45NTMxMjUgMjYuMDM1MTU3IDMuNjM2NzE5IDkuMzUxNTYyIDYuMTIxMDk0IDIwLjAzNTE1NiA2LjgzNTkzOCAzNS42ODM1OTMuNzE0ODQzIDE1LjY3NTc4MS44ODI4MTIgMjAuNjgzNTk0Ljg4MjgxMiA2MC42MDU0NjlzLS4xNjc5NjkgNDQuOTI5Njg4LS44ODY3MTkgNjAuNjA1NDY5em0wIDAiLz48L3N2Zz4=" class="icon"/></a>
                <a href="https://www.github.com"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNTUuOTY4LDUuMzI5QzExNC42MjQsNS4zMjksMCwxMjAuNDAxLDAsMjYyLjM1M2MwLDExMy41MzYsNzMuMzQ0LDIwOS44NTYsMTc1LjEwNCwyNDMuODcyDQoJCQljMTIuOCwyLjM2OCwxNy40NzItNS41NjgsMTcuNDcyLTEyLjM4NGMwLTYuMTEyLTAuMjI0LTIyLjI3Mi0wLjM1Mi00My43MTJjLTcxLjIsMTUuNTItODYuMjQtMzQuNDY0LTg2LjI0LTM0LjQ2NA0KCQkJYy0xMS42MTYtMjkuNjk2LTI4LjQxNi0zNy42LTI4LjQxNi0zNy42Yy0yMy4yNjQtMTUuOTM2LDEuNzI4LTE1LjYxNiwxLjcyOC0xNS42MTZjMjUuNjk2LDEuODI0LDM5LjIsMjYuNDk2LDM5LjIsMjYuNDk2DQoJCQljMjIuODQ4LDM5LjI2NCw1OS45MzYsMjcuOTM2LDc0LjUyOCwyMS4zNDRjMi4zMDQtMTYuNjA4LDguOTI4LTI3LjkzNiwxNi4yNTYtMzQuMzY4DQoJCQljLTU2LjgzMi02LjQ5Ni0xMTYuNjA4LTI4LjU0NC0xMTYuNjA4LTEyNy4wMDhjMC0yOC4wNjQsOS45ODQtNTEuMDA4LDI2LjM2OC02OC45OTJjLTIuNjU2LTYuNDk2LTExLjQyNC0zMi42NCwyLjQ5Ni02OA0KCQkJYzAsMCwyMS41MDQtNi45MTIsNzAuNCwyNi4zMzZjMjAuNDE2LTUuNjk2LDQyLjMwNC04LjU0NCw2NC4wOTYtOC42NGMyMS43MjgsMC4xMjgsNDMuNjQ4LDIuOTQ0LDY0LjA5Niw4LjY3Mg0KCQkJYzQ4Ljg2NC0zMy4yNDgsNzAuMzM2LTI2LjMzNiw3MC4zMzYtMjYuMzM2YzEzLjk1MiwzNS4zOTIsNS4xODQsNjEuNTA0LDIuNTYsNjhjMTYuNDE2LDE3Ljk4NCwyNi4zMDQsNDAuOTI4LDI2LjMwNCw2OC45OTINCgkJCWMwLDk4LjcyLTU5Ljg0LDEyMC40NDgtMTE2Ljg2NCwxMjYuODE2YzkuMTg0LDcuOTM2LDE3LjM3NiwyMy42MTYsMTcuMzc2LDQ3LjU4NGMwLDM0LjM2OC0wLjMyLDYyLjA4LTAuMzIsNzAuNDk2DQoJCQljMCw2Ljg4LDQuNjA4LDE0Ljg4LDE3LjYsMTIuMzUyQzQzOC43Miw0NzIuMTQ1LDUxMiwzNzUuODU3LDUxMiwyNjIuMzUzQzUxMiwxMjAuNDAxLDM5Ny4zNzYsNS4zMjksMjU1Ljk2OCw1LjMyOXoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" class="icon"/></a>
            </div>
        </div>
        
        <div class="card" style="width: 18rem;">
            <img class="card-img-top pp" src="..." alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Alexander Tommy Kurniawan</p>
                <p class="card-text">3411181XXX</p>
                <a href="https://www.instagram.com"><img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMnB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0zMDUgMjU2YzAgMjcuMDYyNS0yMS45Mzc1IDQ5LTQ5IDQ5cy00OS0yMS45Mzc1LTQ5LTQ5IDIxLjkzNzUtNDkgNDktNDkgNDkgMjEuOTM3NSA0OSA0OXptMCAwIi8+PHBhdGggZD0ibTM3MC41OTM3NSAxNjkuMzA0Njg4Yy0yLjM1NTQ2OS02LjM4MjgxMy02LjExMzI4MS0xMi4xNjAxNTctMTAuOTk2MDk0LTE2LjkwMjM0NC00Ljc0MjE4Ny00Ljg4MjgxMy0xMC41MTU2MjUtOC42NDA2MjUtMTYuOTAyMzQ0LTEwLjk5NjA5NC01LjE3OTY4Ny0yLjAxMTcxOS0xMi45NjA5MzctNC40MDYyNS0yNy4yOTI5NjgtNS4wNTg1OTQtMTUuNTAzOTA2LS43MDcwMzEtMjAuMTUyMzQ0LS44NTkzNzUtNTkuNDAyMzQ0LS44NTkzNzUtMzkuMjUzOTA2IDAtNDMuOTAyMzQ0LjE0ODQzOC01OS40MDIzNDQuODU1NDY5LTE0LjMzMjAzMS42NTYyNS0yMi4xMTcxODcgMy4wNTA3ODEtMjcuMjkyOTY4IDUuMDYyNS02LjM4NjcxOSAyLjM1NTQ2OS0xMi4xNjQwNjMgNi4xMTMyODEtMTYuOTAyMzQ0IDEwLjk5NjA5NC00Ljg4MjgxMyA0Ljc0MjE4Ny04LjY0MDYyNSAxMC41MTU2MjUtMTEgMTYuOTAyMzQ0LTIuMDExNzE5IDUuMTc5Njg3LTQuNDA2MjUgMTIuOTY0ODQzLTUuMDU4NTk0IDI3LjI5Njg3NC0uNzA3MDMxIDE1LjUtLjg1OTM3NSAyMC4xNDg0MzgtLjg1OTM3NSA1OS40MDIzNDQgMCAzOS4yNS4xNTIzNDQgNDMuODk4NDM4Ljg1OTM3NSA1OS40MDIzNDQuNjUyMzQ0IDE0LjMzMjAzMSAzLjA0Njg3NSAyMi4xMTMyODEgNS4wNTg1OTQgMjcuMjkyOTY5IDIuMzU5Mzc1IDYuMzg2NzE5IDYuMTEzMjgxIDEyLjE2MDE1NiAxMC45OTYwOTQgMTYuOTAyMzQzIDQuNzQyMTg3IDQuODgyODEzIDEwLjUxNTYyNCA4LjY0MDYyNiAxNi45MDIzNDMgMTAuOTk2MDk0IDUuMTc5Njg4IDIuMDE1NjI1IDEyLjk2NDg0NCA0LjQxMDE1NiAyNy4yOTY4NzUgNS4wNjI1IDE1LjUuNzA3MDMyIDIwLjE0NDUzMi44NTU0NjkgNTkuMzk4NDM4Ljg1NTQ2OSAzOS4yNTc4MTIgMCA0My45MDYyNS0uMTQ4NDM3IDU5LjQwMjM0NC0uODU1NDY5IDE0LjMzMjAzMS0uNjUyMzQ0IDIyLjExNzE4Ny0zLjA0Njg3NSAyNy4yOTY4NzQtNS4wNjI1IDEyLjgyMDMxMy00Ljk0NTMxMiAyMi45NTMxMjYtMTUuMDc4MTI1IDI3Ljg5ODQzOC0yNy44OTg0MzcgMi4wMTE3MTktNS4xNzk2ODggNC40MDYyNS0xMi45NjA5MzggNS4wNjI1LTI3LjI5Mjk2OS43MDcwMzEtMTUuNTAzOTA2Ljg1NTQ2OS0yMC4xNTIzNDQuODU1NDY5LTU5LjQwMjM0NCAwLTM5LjI1MzkwNi0uMTQ4NDM4LTQzLjkwMjM0NC0uODU1NDY5LTU5LjQwMjM0NC0uNjUyMzQ0LTE0LjMzMjAzMS0zLjA0Njg3NS0yMi4xMTcxODctNS4wNjI1LTI3LjI5Njg3NHptLTExNC41OTM3NSAxNjIuMTc5Njg3Yy00MS42OTE0MDYgMC03NS40ODgyODEtMzMuNzkyOTY5LTc1LjQ4ODI4MS03NS40ODQzNzVzMzMuNzk2ODc1LTc1LjQ4NDM3NSA3NS40ODgyODEtNzUuNDg0Mzc1YzQxLjY4NzUgMCA3NS40ODQzNzUgMzMuNzkyOTY5IDc1LjQ4NDM3NSA3NS40ODQzNzVzLTMzLjc5Njg3NSA3NS40ODQzNzUtNzUuNDg0Mzc1IDc1LjQ4NDM3NXptNzguNDY4NzUtMTM2LjMxMjVjLTkuNzQyMTg4IDAtMTcuNjQwNjI1LTcuODk4NDM3LTE3LjY0MDYyNS0xNy42NDA2MjVzNy44OTg0MzctMTcuNjQwNjI1IDE3LjY0MDYyNS0xNy42NDA2MjUgMTcuNjQwNjI1IDcuODk4NDM3IDE3LjY0MDYyNSAxNy42NDA2MjVjLS4wMDM5MDYgOS43NDIxODgtNy44OTg0MzcgMTcuNjQwNjI1LTE3LjY0MDYyNSAxNy42NDA2MjV6bTAgMCIvPjxwYXRoIGQ9Im0yNTYgMGMtMTQxLjM2MzI4MSAwLTI1NiAxMTQuNjM2NzE5LTI1NiAyNTZzMTE0LjYzNjcxOSAyNTYgMjU2IDI1NiAyNTYtMTE0LjYzNjcxOSAyNTYtMjU2LTExNC42MzY3MTktMjU2LTI1Ni0yNTZ6bTE0Ni4xMTMyODEgMzE2LjYwNTQ2OWMtLjcxMDkzNyAxNS42NDg0MzctMy4xOTkyMTkgMjYuMzMyMDMxLTYuODMyMDMxIDM1LjY4MzU5My03LjYzNjcxOSAxOS43NDYwOTQtMjMuMjQ2MDk0IDM1LjM1NTQ2OS00Mi45OTIxODggNDIuOTkyMTg4LTkuMzQ3NjU2IDMuNjMyODEyLTIwLjAzNTE1NiA2LjExNzE4OC0zNS42Nzk2ODcgNi44MzIwMzEtMTUuNjc1NzgxLjcxNDg0NC0yMC42ODM1OTQuODg2NzE5LTYwLjYwNTQ2OS44ODY3MTktMzkuOTI1NzgxIDAtNDQuOTI5Njg3LS4xNzE4NzUtNjAuNjA5Mzc1LS44ODY3MTktMTUuNjQ0NTMxLS43MTQ4NDMtMjYuMzMyMDMxLTMuMTk5MjE5LTM1LjY3OTY4Ny02LjgzMjAzMS05LjgxMjUtMy42OTE0MDYtMTguNjk1MzEzLTkuNDc2NTYyLTI2LjAzOTA2My0xNi45NTcwMzEtNy40NzY1NjItNy4zMzk4NDQtMTMuMjYxNzE5LTE2LjIyNjU2My0xNi45NTMxMjUtMjYuMDM1MTU3LTMuNjMyODEyLTkuMzQ3NjU2LTYuMTIxMDk0LTIwLjAzNTE1Ni02LjgzMjAzMS0zNS42Nzk2ODctLjcyMjY1Ni0xNS42Nzk2ODctLjg5MDYyNS0yMC42ODc1LS44OTA2MjUtNjAuNjA5Mzc1cy4xNjc5NjktNDQuOTI5Njg4Ljg4NjcxOS02MC42MDU0NjljLjcxMDkzNy0xNS42NDg0MzcgMy4xOTUzMTItMjYuMzMyMDMxIDYuODI4MTI1LTM1LjY4MzU5MyAzLjY5MTQwNi05LjgwODU5NCA5LjQ4MDQ2OC0xOC42OTUzMTMgMTYuOTYwOTM3LTI2LjAzNTE1NyA3LjMzOTg0NC03LjQ4MDQ2OSAxNi4yMjY1NjMtMTMuMjY1NjI1IDI2LjAzNTE1Ny0xNi45NTcwMzEgOS4zNTE1NjItMy42MzI4MTIgMjAuMDM1MTU2LTYuMTE3MTg4IDM1LjY4MzU5My02LjgzMjAzMSAxNS42NzU3ODEtLjcxNDg0NCAyMC42ODM1OTQtLjg4NjcxOSA2MC42MDU0NjktLjg4NjcxOXM0NC45Mjk2ODguMTcxODc1IDYwLjYwNTQ2OS44OTA2MjVjMTUuNjQ4NDM3LjcxMDkzNyAyNi4zMzIwMzEgMy4xOTUzMTMgMzUuNjgzNTkzIDYuODI0MjE5IDkuODA4NTk0IDMuNjkxNDA2IDE4LjY5NTMxMyA5LjQ4MDQ2OCAyNi4wMzkwNjMgMTYuOTYwOTM3IDcuNDc2NTYzIDcuMzQzNzUgMTMuMjY1NjI1IDE2LjIyNjU2MyAxNi45NTMxMjUgMjYuMDM1MTU3IDMuNjM2NzE5IDkuMzUxNTYyIDYuMTIxMDk0IDIwLjAzNTE1NiA2LjgzNTkzOCAzNS42ODM1OTMuNzE0ODQzIDE1LjY3NTc4MS44ODI4MTIgMjAuNjgzNTk0Ljg4MjgxMiA2MC42MDU0NjlzLS4xNjc5NjkgNDQuOTI5Njg4LS44ODY3MTkgNjAuNjA1NDY5em0wIDAiLz48L3N2Zz4=" class="icon"/></a>
                <a href="https://www.github.com"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNTUuOTY4LDUuMzI5QzExNC42MjQsNS4zMjksMCwxMjAuNDAxLDAsMjYyLjM1M2MwLDExMy41MzYsNzMuMzQ0LDIwOS44NTYsMTc1LjEwNCwyNDMuODcyDQoJCQljMTIuOCwyLjM2OCwxNy40NzItNS41NjgsMTcuNDcyLTEyLjM4NGMwLTYuMTEyLTAuMjI0LTIyLjI3Mi0wLjM1Mi00My43MTJjLTcxLjIsMTUuNTItODYuMjQtMzQuNDY0LTg2LjI0LTM0LjQ2NA0KCQkJYy0xMS42MTYtMjkuNjk2LTI4LjQxNi0zNy42LTI4LjQxNi0zNy42Yy0yMy4yNjQtMTUuOTM2LDEuNzI4LTE1LjYxNiwxLjcyOC0xNS42MTZjMjUuNjk2LDEuODI0LDM5LjIsMjYuNDk2LDM5LjIsMjYuNDk2DQoJCQljMjIuODQ4LDM5LjI2NCw1OS45MzYsMjcuOTM2LDc0LjUyOCwyMS4zNDRjMi4zMDQtMTYuNjA4LDguOTI4LTI3LjkzNiwxNi4yNTYtMzQuMzY4DQoJCQljLTU2LjgzMi02LjQ5Ni0xMTYuNjA4LTI4LjU0NC0xMTYuNjA4LTEyNy4wMDhjMC0yOC4wNjQsOS45ODQtNTEuMDA4LDI2LjM2OC02OC45OTJjLTIuNjU2LTYuNDk2LTExLjQyNC0zMi42NCwyLjQ5Ni02OA0KCQkJYzAsMCwyMS41MDQtNi45MTIsNzAuNCwyNi4zMzZjMjAuNDE2LTUuNjk2LDQyLjMwNC04LjU0NCw2NC4wOTYtOC42NGMyMS43MjgsMC4xMjgsNDMuNjQ4LDIuOTQ0LDY0LjA5Niw4LjY3Mg0KCQkJYzQ4Ljg2NC0zMy4yNDgsNzAuMzM2LTI2LjMzNiw3MC4zMzYtMjYuMzM2YzEzLjk1MiwzNS4zOTIsNS4xODQsNjEuNTA0LDIuNTYsNjhjMTYuNDE2LDE3Ljk4NCwyNi4zMDQsNDAuOTI4LDI2LjMwNCw2OC45OTINCgkJCWMwLDk4LjcyLTU5Ljg0LDEyMC40NDgtMTE2Ljg2NCwxMjYuODE2YzkuMTg0LDcuOTM2LDE3LjM3NiwyMy42MTYsMTcuMzc2LDQ3LjU4NGMwLDM0LjM2OC0wLjMyLDYyLjA4LTAuMzIsNzAuNDk2DQoJCQljMCw2Ljg4LDQuNjA4LDE0Ljg4LDE3LjYsMTIuMzUyQzQzOC43Miw0NzIuMTQ1LDUxMiwzNzUuODU3LDUxMiwyNjIuMzUzQzUxMiwxMjAuNDAxLDM5Ny4zNzYsNS4zMjksMjU1Ljk2OCw1LjMyOXoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" class="icon"/></a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top pp" src="<?php echo site_url('../assets/image/aboutus/iman.jpg')?>" alt="Card image cap">
            <div class="card-body">
            <p class="card-text">Iman Muhdi</p>
                <p class="card-text">3411181XXX</p>
                <a href="https://www.instagram.com"><img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMnB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0zMDUgMjU2YzAgMjcuMDYyNS0yMS45Mzc1IDQ5LTQ5IDQ5cy00OS0yMS45Mzc1LTQ5LTQ5IDIxLjkzNzUtNDkgNDktNDkgNDkgMjEuOTM3NSA0OSA0OXptMCAwIi8+PHBhdGggZD0ibTM3MC41OTM3NSAxNjkuMzA0Njg4Yy0yLjM1NTQ2OS02LjM4MjgxMy02LjExMzI4MS0xMi4xNjAxNTctMTAuOTk2MDk0LTE2LjkwMjM0NC00Ljc0MjE4Ny00Ljg4MjgxMy0xMC41MTU2MjUtOC42NDA2MjUtMTYuOTAyMzQ0LTEwLjk5NjA5NC01LjE3OTY4Ny0yLjAxMTcxOS0xMi45NjA5MzctNC40MDYyNS0yNy4yOTI5NjgtNS4wNTg1OTQtMTUuNTAzOTA2LS43MDcwMzEtMjAuMTUyMzQ0LS44NTkzNzUtNTkuNDAyMzQ0LS44NTkzNzUtMzkuMjUzOTA2IDAtNDMuOTAyMzQ0LjE0ODQzOC01OS40MDIzNDQuODU1NDY5LTE0LjMzMjAzMS42NTYyNS0yMi4xMTcxODcgMy4wNTA3ODEtMjcuMjkyOTY4IDUuMDYyNS02LjM4NjcxOSAyLjM1NTQ2OS0xMi4xNjQwNjMgNi4xMTMyODEtMTYuOTAyMzQ0IDEwLjk5NjA5NC00Ljg4MjgxMyA0Ljc0MjE4Ny04LjY0MDYyNSAxMC41MTU2MjUtMTEgMTYuOTAyMzQ0LTIuMDExNzE5IDUuMTc5Njg3LTQuNDA2MjUgMTIuOTY0ODQzLTUuMDU4NTk0IDI3LjI5Njg3NC0uNzA3MDMxIDE1LjUtLjg1OTM3NSAyMC4xNDg0MzgtLjg1OTM3NSA1OS40MDIzNDQgMCAzOS4yNS4xNTIzNDQgNDMuODk4NDM4Ljg1OTM3NSA1OS40MDIzNDQuNjUyMzQ0IDE0LjMzMjAzMSAzLjA0Njg3NSAyMi4xMTMyODEgNS4wNTg1OTQgMjcuMjkyOTY5IDIuMzU5Mzc1IDYuMzg2NzE5IDYuMTEzMjgxIDEyLjE2MDE1NiAxMC45OTYwOTQgMTYuOTAyMzQzIDQuNzQyMTg3IDQuODgyODEzIDEwLjUxNTYyNCA4LjY0MDYyNiAxNi45MDIzNDMgMTAuOTk2MDk0IDUuMTc5Njg4IDIuMDE1NjI1IDEyLjk2NDg0NCA0LjQxMDE1NiAyNy4yOTY4NzUgNS4wNjI1IDE1LjUuNzA3MDMyIDIwLjE0NDUzMi44NTU0NjkgNTkuMzk4NDM4Ljg1NTQ2OSAzOS4yNTc4MTIgMCA0My45MDYyNS0uMTQ4NDM3IDU5LjQwMjM0NC0uODU1NDY5IDE0LjMzMjAzMS0uNjUyMzQ0IDIyLjExNzE4Ny0zLjA0Njg3NSAyNy4yOTY4NzQtNS4wNjI1IDEyLjgyMDMxMy00Ljk0NTMxMiAyMi45NTMxMjYtMTUuMDc4MTI1IDI3Ljg5ODQzOC0yNy44OTg0MzcgMi4wMTE3MTktNS4xNzk2ODggNC40MDYyNS0xMi45NjA5MzggNS4wNjI1LTI3LjI5Mjk2OS43MDcwMzEtMTUuNTAzOTA2Ljg1NTQ2OS0yMC4xNTIzNDQuODU1NDY5LTU5LjQwMjM0NCAwLTM5LjI1MzkwNi0uMTQ4NDM4LTQzLjkwMjM0NC0uODU1NDY5LTU5LjQwMjM0NC0uNjUyMzQ0LTE0LjMzMjAzMS0zLjA0Njg3NS0yMi4xMTcxODctNS4wNjI1LTI3LjI5Njg3NHptLTExNC41OTM3NSAxNjIuMTc5Njg3Yy00MS42OTE0MDYgMC03NS40ODgyODEtMzMuNzkyOTY5LTc1LjQ4ODI4MS03NS40ODQzNzVzMzMuNzk2ODc1LTc1LjQ4NDM3NSA3NS40ODgyODEtNzUuNDg0Mzc1YzQxLjY4NzUgMCA3NS40ODQzNzUgMzMuNzkyOTY5IDc1LjQ4NDM3NSA3NS40ODQzNzVzLTMzLjc5Njg3NSA3NS40ODQzNzUtNzUuNDg0Mzc1IDc1LjQ4NDM3NXptNzguNDY4NzUtMTM2LjMxMjVjLTkuNzQyMTg4IDAtMTcuNjQwNjI1LTcuODk4NDM3LTE3LjY0MDYyNS0xNy42NDA2MjVzNy44OTg0MzctMTcuNjQwNjI1IDE3LjY0MDYyNS0xNy42NDA2MjUgMTcuNjQwNjI1IDcuODk4NDM3IDE3LjY0MDYyNSAxNy42NDA2MjVjLS4wMDM5MDYgOS43NDIxODgtNy44OTg0MzcgMTcuNjQwNjI1LTE3LjY0MDYyNSAxNy42NDA2MjV6bTAgMCIvPjxwYXRoIGQ9Im0yNTYgMGMtMTQxLjM2MzI4MSAwLTI1NiAxMTQuNjM2NzE5LTI1NiAyNTZzMTE0LjYzNjcxOSAyNTYgMjU2IDI1NiAyNTYtMTE0LjYzNjcxOSAyNTYtMjU2LTExNC42MzY3MTktMjU2LTI1Ni0yNTZ6bTE0Ni4xMTMyODEgMzE2LjYwNTQ2OWMtLjcxMDkzNyAxNS42NDg0MzctMy4xOTkyMTkgMjYuMzMyMDMxLTYuODMyMDMxIDM1LjY4MzU5My03LjYzNjcxOSAxOS43NDYwOTQtMjMuMjQ2MDk0IDM1LjM1NTQ2OS00Mi45OTIxODggNDIuOTkyMTg4LTkuMzQ3NjU2IDMuNjMyODEyLTIwLjAzNTE1NiA2LjExNzE4OC0zNS42Nzk2ODcgNi44MzIwMzEtMTUuNjc1NzgxLjcxNDg0NC0yMC42ODM1OTQuODg2NzE5LTYwLjYwNTQ2OS44ODY3MTktMzkuOTI1NzgxIDAtNDQuOTI5Njg3LS4xNzE4NzUtNjAuNjA5Mzc1LS44ODY3MTktMTUuNjQ0NTMxLS43MTQ4NDMtMjYuMzMyMDMxLTMuMTk5MjE5LTM1LjY3OTY4Ny02LjgzMjAzMS05LjgxMjUtMy42OTE0MDYtMTguNjk1MzEzLTkuNDc2NTYyLTI2LjAzOTA2My0xNi45NTcwMzEtNy40NzY1NjItNy4zMzk4NDQtMTMuMjYxNzE5LTE2LjIyNjU2My0xNi45NTMxMjUtMjYuMDM1MTU3LTMuNjMyODEyLTkuMzQ3NjU2LTYuMTIxMDk0LTIwLjAzNTE1Ni02LjgzMjAzMS0zNS42Nzk2ODctLjcyMjY1Ni0xNS42Nzk2ODctLjg5MDYyNS0yMC42ODc1LS44OTA2MjUtNjAuNjA5Mzc1cy4xNjc5NjktNDQuOTI5Njg4Ljg4NjcxOS02MC42MDU0NjljLjcxMDkzNy0xNS42NDg0MzcgMy4xOTUzMTItMjYuMzMyMDMxIDYuODI4MTI1LTM1LjY4MzU5MyAzLjY5MTQwNi05LjgwODU5NCA5LjQ4MDQ2OC0xOC42OTUzMTMgMTYuOTYwOTM3LTI2LjAzNTE1NyA3LjMzOTg0NC03LjQ4MDQ2OSAxNi4yMjY1NjMtMTMuMjY1NjI1IDI2LjAzNTE1Ny0xNi45NTcwMzEgOS4zNTE1NjItMy42MzI4MTIgMjAuMDM1MTU2LTYuMTE3MTg4IDM1LjY4MzU5My02LjgzMjAzMSAxNS42NzU3ODEtLjcxNDg0NCAyMC42ODM1OTQtLjg4NjcxOSA2MC42MDU0NjktLjg4NjcxOXM0NC45Mjk2ODguMTcxODc1IDYwLjYwNTQ2OS44OTA2MjVjMTUuNjQ4NDM3LjcxMDkzNyAyNi4zMzIwMzEgMy4xOTUzMTMgMzUuNjgzNTkzIDYuODI0MjE5IDkuODA4NTk0IDMuNjkxNDA2IDE4LjY5NTMxMyA5LjQ4MDQ2OCAyNi4wMzkwNjMgMTYuOTYwOTM3IDcuNDc2NTYzIDcuMzQzNzUgMTMuMjY1NjI1IDE2LjIyNjU2MyAxNi45NTMxMjUgMjYuMDM1MTU3IDMuNjM2NzE5IDkuMzUxNTYyIDYuMTIxMDk0IDIwLjAzNTE1NiA2LjgzNTkzOCAzNS42ODM1OTMuNzE0ODQzIDE1LjY3NTc4MS44ODI4MTIgMjAuNjgzNTk0Ljg4MjgxMiA2MC42MDU0NjlzLS4xNjc5NjkgNDQuOTI5Njg4LS44ODY3MTkgNjAuNjA1NDY5em0wIDAiLz48L3N2Zz4=" class="icon"/></a>
                <a href="https://www.github.com"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNTUuOTY4LDUuMzI5QzExNC42MjQsNS4zMjksMCwxMjAuNDAxLDAsMjYyLjM1M2MwLDExMy41MzYsNzMuMzQ0LDIwOS44NTYsMTc1LjEwNCwyNDMuODcyDQoJCQljMTIuOCwyLjM2OCwxNy40NzItNS41NjgsMTcuNDcyLTEyLjM4NGMwLTYuMTEyLTAuMjI0LTIyLjI3Mi0wLjM1Mi00My43MTJjLTcxLjIsMTUuNTItODYuMjQtMzQuNDY0LTg2LjI0LTM0LjQ2NA0KCQkJYy0xMS42MTYtMjkuNjk2LTI4LjQxNi0zNy42LTI4LjQxNi0zNy42Yy0yMy4yNjQtMTUuOTM2LDEuNzI4LTE1LjYxNiwxLjcyOC0xNS42MTZjMjUuNjk2LDEuODI0LDM5LjIsMjYuNDk2LDM5LjIsMjYuNDk2DQoJCQljMjIuODQ4LDM5LjI2NCw1OS45MzYsMjcuOTM2LDc0LjUyOCwyMS4zNDRjMi4zMDQtMTYuNjA4LDguOTI4LTI3LjkzNiwxNi4yNTYtMzQuMzY4DQoJCQljLTU2LjgzMi02LjQ5Ni0xMTYuNjA4LTI4LjU0NC0xMTYuNjA4LTEyNy4wMDhjMC0yOC4wNjQsOS45ODQtNTEuMDA4LDI2LjM2OC02OC45OTJjLTIuNjU2LTYuNDk2LTExLjQyNC0zMi42NCwyLjQ5Ni02OA0KCQkJYzAsMCwyMS41MDQtNi45MTIsNzAuNCwyNi4zMzZjMjAuNDE2LTUuNjk2LDQyLjMwNC04LjU0NCw2NC4wOTYtOC42NGMyMS43MjgsMC4xMjgsNDMuNjQ4LDIuOTQ0LDY0LjA5Niw4LjY3Mg0KCQkJYzQ4Ljg2NC0zMy4yNDgsNzAuMzM2LTI2LjMzNiw3MC4zMzYtMjYuMzM2YzEzLjk1MiwzNS4zOTIsNS4xODQsNjEuNTA0LDIuNTYsNjhjMTYuNDE2LDE3Ljk4NCwyNi4zMDQsNDAuOTI4LDI2LjMwNCw2OC45OTINCgkJCWMwLDk4LjcyLTU5Ljg0LDEyMC40NDgtMTE2Ljg2NCwxMjYuODE2YzkuMTg0LDcuOTM2LDE3LjM3NiwyMy42MTYsMTcuMzc2LDQ3LjU4NGMwLDM0LjM2OC0wLjMyLDYyLjA4LTAuMzIsNzAuNDk2DQoJCQljMCw2Ljg4LDQuNjA4LDE0Ljg4LDE3LjYsMTIuMzUyQzQzOC43Miw0NzIuMTQ1LDUxMiwzNzUuODU3LDUxMiwyNjIuMzUzQzUxMiwxMjAuNDAxLDM5Ny4zNzYsNS4zMjksMjU1Ljk2OCw1LjMyOXoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" class="icon"/></a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top pp" src="<?php echo site_url('../assets/image/aboutus/reza.png')?>" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Muhammad Reza Azzahrawan</p>
                <p class="card-text">3411181185</p>
                <a href="https://www.instagram.com"><img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMnB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0zMDUgMjU2YzAgMjcuMDYyNS0yMS45Mzc1IDQ5LTQ5IDQ5cy00OS0yMS45Mzc1LTQ5LTQ5IDIxLjkzNzUtNDkgNDktNDkgNDkgMjEuOTM3NSA0OSA0OXptMCAwIi8+PHBhdGggZD0ibTM3MC41OTM3NSAxNjkuMzA0Njg4Yy0yLjM1NTQ2OS02LjM4MjgxMy02LjExMzI4MS0xMi4xNjAxNTctMTAuOTk2MDk0LTE2LjkwMjM0NC00Ljc0MjE4Ny00Ljg4MjgxMy0xMC41MTU2MjUtOC42NDA2MjUtMTYuOTAyMzQ0LTEwLjk5NjA5NC01LjE3OTY4Ny0yLjAxMTcxOS0xMi45NjA5MzctNC40MDYyNS0yNy4yOTI5NjgtNS4wNTg1OTQtMTUuNTAzOTA2LS43MDcwMzEtMjAuMTUyMzQ0LS44NTkzNzUtNTkuNDAyMzQ0LS44NTkzNzUtMzkuMjUzOTA2IDAtNDMuOTAyMzQ0LjE0ODQzOC01OS40MDIzNDQuODU1NDY5LTE0LjMzMjAzMS42NTYyNS0yMi4xMTcxODcgMy4wNTA3ODEtMjcuMjkyOTY4IDUuMDYyNS02LjM4NjcxOSAyLjM1NTQ2OS0xMi4xNjQwNjMgNi4xMTMyODEtMTYuOTAyMzQ0IDEwLjk5NjA5NC00Ljg4MjgxMyA0Ljc0MjE4Ny04LjY0MDYyNSAxMC41MTU2MjUtMTEgMTYuOTAyMzQ0LTIuMDExNzE5IDUuMTc5Njg3LTQuNDA2MjUgMTIuOTY0ODQzLTUuMDU4NTk0IDI3LjI5Njg3NC0uNzA3MDMxIDE1LjUtLjg1OTM3NSAyMC4xNDg0MzgtLjg1OTM3NSA1OS40MDIzNDQgMCAzOS4yNS4xNTIzNDQgNDMuODk4NDM4Ljg1OTM3NSA1OS40MDIzNDQuNjUyMzQ0IDE0LjMzMjAzMSAzLjA0Njg3NSAyMi4xMTMyODEgNS4wNTg1OTQgMjcuMjkyOTY5IDIuMzU5Mzc1IDYuMzg2NzE5IDYuMTEzMjgxIDEyLjE2MDE1NiAxMC45OTYwOTQgMTYuOTAyMzQzIDQuNzQyMTg3IDQuODgyODEzIDEwLjUxNTYyNCA4LjY0MDYyNiAxNi45MDIzNDMgMTAuOTk2MDk0IDUuMTc5Njg4IDIuMDE1NjI1IDEyLjk2NDg0NCA0LjQxMDE1NiAyNy4yOTY4NzUgNS4wNjI1IDE1LjUuNzA3MDMyIDIwLjE0NDUzMi44NTU0NjkgNTkuMzk4NDM4Ljg1NTQ2OSAzOS4yNTc4MTIgMCA0My45MDYyNS0uMTQ4NDM3IDU5LjQwMjM0NC0uODU1NDY5IDE0LjMzMjAzMS0uNjUyMzQ0IDIyLjExNzE4Ny0zLjA0Njg3NSAyNy4yOTY4NzQtNS4wNjI1IDEyLjgyMDMxMy00Ljk0NTMxMiAyMi45NTMxMjYtMTUuMDc4MTI1IDI3Ljg5ODQzOC0yNy44OTg0MzcgMi4wMTE3MTktNS4xNzk2ODggNC40MDYyNS0xMi45NjA5MzggNS4wNjI1LTI3LjI5Mjk2OS43MDcwMzEtMTUuNTAzOTA2Ljg1NTQ2OS0yMC4xNTIzNDQuODU1NDY5LTU5LjQwMjM0NCAwLTM5LjI1MzkwNi0uMTQ4NDM4LTQzLjkwMjM0NC0uODU1NDY5LTU5LjQwMjM0NC0uNjUyMzQ0LTE0LjMzMjAzMS0zLjA0Njg3NS0yMi4xMTcxODctNS4wNjI1LTI3LjI5Njg3NHptLTExNC41OTM3NSAxNjIuMTc5Njg3Yy00MS42OTE0MDYgMC03NS40ODgyODEtMzMuNzkyOTY5LTc1LjQ4ODI4MS03NS40ODQzNzVzMzMuNzk2ODc1LTc1LjQ4NDM3NSA3NS40ODgyODEtNzUuNDg0Mzc1YzQxLjY4NzUgMCA3NS40ODQzNzUgMzMuNzkyOTY5IDc1LjQ4NDM3NSA3NS40ODQzNzVzLTMzLjc5Njg3NSA3NS40ODQzNzUtNzUuNDg0Mzc1IDc1LjQ4NDM3NXptNzguNDY4NzUtMTM2LjMxMjVjLTkuNzQyMTg4IDAtMTcuNjQwNjI1LTcuODk4NDM3LTE3LjY0MDYyNS0xNy42NDA2MjVzNy44OTg0MzctMTcuNjQwNjI1IDE3LjY0MDYyNS0xNy42NDA2MjUgMTcuNjQwNjI1IDcuODk4NDM3IDE3LjY0MDYyNSAxNy42NDA2MjVjLS4wMDM5MDYgOS43NDIxODgtNy44OTg0MzcgMTcuNjQwNjI1LTE3LjY0MDYyNSAxNy42NDA2MjV6bTAgMCIvPjxwYXRoIGQ9Im0yNTYgMGMtMTQxLjM2MzI4MSAwLTI1NiAxMTQuNjM2NzE5LTI1NiAyNTZzMTE0LjYzNjcxOSAyNTYgMjU2IDI1NiAyNTYtMTE0LjYzNjcxOSAyNTYtMjU2LTExNC42MzY3MTktMjU2LTI1Ni0yNTZ6bTE0Ni4xMTMyODEgMzE2LjYwNTQ2OWMtLjcxMDkzNyAxNS42NDg0MzctMy4xOTkyMTkgMjYuMzMyMDMxLTYuODMyMDMxIDM1LjY4MzU5My03LjYzNjcxOSAxOS43NDYwOTQtMjMuMjQ2MDk0IDM1LjM1NTQ2OS00Mi45OTIxODggNDIuOTkyMTg4LTkuMzQ3NjU2IDMuNjMyODEyLTIwLjAzNTE1NiA2LjExNzE4OC0zNS42Nzk2ODcgNi44MzIwMzEtMTUuNjc1NzgxLjcxNDg0NC0yMC42ODM1OTQuODg2NzE5LTYwLjYwNTQ2OS44ODY3MTktMzkuOTI1NzgxIDAtNDQuOTI5Njg3LS4xNzE4NzUtNjAuNjA5Mzc1LS44ODY3MTktMTUuNjQ0NTMxLS43MTQ4NDMtMjYuMzMyMDMxLTMuMTk5MjE5LTM1LjY3OTY4Ny02LjgzMjAzMS05LjgxMjUtMy42OTE0MDYtMTguNjk1MzEzLTkuNDc2NTYyLTI2LjAzOTA2My0xNi45NTcwMzEtNy40NzY1NjItNy4zMzk4NDQtMTMuMjYxNzE5LTE2LjIyNjU2My0xNi45NTMxMjUtMjYuMDM1MTU3LTMuNjMyODEyLTkuMzQ3NjU2LTYuMTIxMDk0LTIwLjAzNTE1Ni02LjgzMjAzMS0zNS42Nzk2ODctLjcyMjY1Ni0xNS42Nzk2ODctLjg5MDYyNS0yMC42ODc1LS44OTA2MjUtNjAuNjA5Mzc1cy4xNjc5NjktNDQuOTI5Njg4Ljg4NjcxOS02MC42MDU0NjljLjcxMDkzNy0xNS42NDg0MzcgMy4xOTUzMTItMjYuMzMyMDMxIDYuODI4MTI1LTM1LjY4MzU5MyAzLjY5MTQwNi05LjgwODU5NCA5LjQ4MDQ2OC0xOC42OTUzMTMgMTYuOTYwOTM3LTI2LjAzNTE1NyA3LjMzOTg0NC03LjQ4MDQ2OSAxNi4yMjY1NjMtMTMuMjY1NjI1IDI2LjAzNTE1Ny0xNi45NTcwMzEgOS4zNTE1NjItMy42MzI4MTIgMjAuMDM1MTU2LTYuMTE3MTg4IDM1LjY4MzU5My02LjgzMjAzMSAxNS42NzU3ODEtLjcxNDg0NCAyMC42ODM1OTQtLjg4NjcxOSA2MC42MDU0NjktLjg4NjcxOXM0NC45Mjk2ODguMTcxODc1IDYwLjYwNTQ2OS44OTA2MjVjMTUuNjQ4NDM3LjcxMDkzNyAyNi4zMzIwMzEgMy4xOTUzMTMgMzUuNjgzNTkzIDYuODI0MjE5IDkuODA4NTk0IDMuNjkxNDA2IDE4LjY5NTMxMyA5LjQ4MDQ2OCAyNi4wMzkwNjMgMTYuOTYwOTM3IDcuNDc2NTYzIDcuMzQzNzUgMTMuMjY1NjI1IDE2LjIyNjU2MyAxNi45NTMxMjUgMjYuMDM1MTU3IDMuNjM2NzE5IDkuMzUxNTYyIDYuMTIxMDk0IDIwLjAzNTE1NiA2LjgzNTkzOCAzNS42ODM1OTMuNzE0ODQzIDE1LjY3NTc4MS44ODI4MTIgMjAuNjgzNTk0Ljg4MjgxMiA2MC42MDU0NjlzLS4xNjc5NjkgNDQuOTI5Njg4LS44ODY3MTkgNjAuNjA1NDY5em0wIDAiLz48L3N2Zz4=" class="icon"/></a>
                <a href="https://www.github.com/workwithreza"><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNTUuOTY4LDUuMzI5QzExNC42MjQsNS4zMjksMCwxMjAuNDAxLDAsMjYyLjM1M2MwLDExMy41MzYsNzMuMzQ0LDIwOS44NTYsMTc1LjEwNCwyNDMuODcyDQoJCQljMTIuOCwyLjM2OCwxNy40NzItNS41NjgsMTcuNDcyLTEyLjM4NGMwLTYuMTEyLTAuMjI0LTIyLjI3Mi0wLjM1Mi00My43MTJjLTcxLjIsMTUuNTItODYuMjQtMzQuNDY0LTg2LjI0LTM0LjQ2NA0KCQkJYy0xMS42MTYtMjkuNjk2LTI4LjQxNi0zNy42LTI4LjQxNi0zNy42Yy0yMy4yNjQtMTUuOTM2LDEuNzI4LTE1LjYxNiwxLjcyOC0xNS42MTZjMjUuNjk2LDEuODI0LDM5LjIsMjYuNDk2LDM5LjIsMjYuNDk2DQoJCQljMjIuODQ4LDM5LjI2NCw1OS45MzYsMjcuOTM2LDc0LjUyOCwyMS4zNDRjMi4zMDQtMTYuNjA4LDguOTI4LTI3LjkzNiwxNi4yNTYtMzQuMzY4DQoJCQljLTU2LjgzMi02LjQ5Ni0xMTYuNjA4LTI4LjU0NC0xMTYuNjA4LTEyNy4wMDhjMC0yOC4wNjQsOS45ODQtNTEuMDA4LDI2LjM2OC02OC45OTJjLTIuNjU2LTYuNDk2LTExLjQyNC0zMi42NCwyLjQ5Ni02OA0KCQkJYzAsMCwyMS41MDQtNi45MTIsNzAuNCwyNi4zMzZjMjAuNDE2LTUuNjk2LDQyLjMwNC04LjU0NCw2NC4wOTYtOC42NGMyMS43MjgsMC4xMjgsNDMuNjQ4LDIuOTQ0LDY0LjA5Niw4LjY3Mg0KCQkJYzQ4Ljg2NC0zMy4yNDgsNzAuMzM2LTI2LjMzNiw3MC4zMzYtMjYuMzM2YzEzLjk1MiwzNS4zOTIsNS4xODQsNjEuNTA0LDIuNTYsNjhjMTYuNDE2LDE3Ljk4NCwyNi4zMDQsNDAuOTI4LDI2LjMwNCw2OC45OTINCgkJCWMwLDk4LjcyLTU5Ljg0LDEyMC40NDgtMTE2Ljg2NCwxMjYuODE2YzkuMTg0LDcuOTM2LDE3LjM3NiwyMy42MTYsMTcuMzc2LDQ3LjU4NGMwLDM0LjM2OC0wLjMyLDYyLjA4LTAuMzIsNzAuNDk2DQoJCQljMCw2Ljg4LDQuNjA4LDE0Ljg4LDE3LjYsMTIuMzUyQzQzOC43Miw0NzIuMTQ1LDUxMiwzNzUuODU3LDUxMiwyNjIuMzUzQzUxMiwxMjAuNDAxLDM5Ny4zNzYsNS4zMjksMjU1Ljk2OCw1LjMyOXoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" class="icon"/></a>
            </div>
        </div>
    </div>
</body>
</html>