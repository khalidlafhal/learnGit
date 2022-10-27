
<?php
include './database/config.php';
session_start();
$message = array();
if (isset($_POST['login'])) 
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    
if (!empty($password) && !empty($email))
{
    $sql = "SELECT * FROM users WHERE email = '$email'  AND password = '$password'";
    $stm = $pdo->prepare($sql);
    $stm->execute();

    if ($stm->rowCount() > 0)
    {
        $res = $stm -> fetch();
        $_SESSION['email'] = $res['email'];
        $_SESSION['fullName'] = $res['fname'] .'  ' . $res['lname'] ;
        header("Location: index.php");
    }

}else{
    
}
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <title>Learn Git</title>
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Login</header>
            <form action="#" method="POST">
                <div class="error-text">
                    <?php 

                    ?>
                </div>

                <div class="field  input">
                    <label for="">Email Address</label>
                    <input type="text" placeholder="Enter your email " name="email">
                </div>
                <div class="field  input">
                    <label for="">Password</label>
                    <input type="password" placeholder="Enter mew password" name="password">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="LOGIN" name="login">
                </div>

            </form>
            <div class="link">Not yet signed ? <a href="signup.php">Sign up Now</a></div>
        </section>
    </div>
    <script src="./javasctip/pass-show-hide.js"></script>
    <script src="./javasctip/login.js"></script>
    <script src="./javasctip/redirect.js"></script>

</body>

</html>