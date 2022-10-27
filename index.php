<?php
session_start();

if (!isset($_SESSION['email']))
{
    header("Location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <style>
        body{
            background-image: url('./img/dell-LXI5kqCdEcE-unsplash.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            overflow-y: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        img{
            display: block;
            width: 100%;
            height: 100%;
        }
        .center{
            display: flex;
            justify-content: center;
        }
        h3 , h1{
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        h1,h3{
            font-size: 2rem;
            font-weight: 600;
        }
        div{
            display: flex;
            align-items: center;
            gap: 2rem;
        }
    </style>

</head>
<body>
    <div class="center">
        <div>
            <h3>Hello</h3>
            <h1>
                <?php  echo $_SESSION['fullName'];  ?>
            </h1>
        </div>
    </div>
</body>
</html>