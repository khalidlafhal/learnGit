<?php
include 'database/config.php';

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (!empty($fname) &&  !empty($lname) && !empty($password) && !empty($email)) {

        $sql = 'INSERT INTO users(fname,lname,email,password) 
        VALUES(?,?,?,?)';
        $stm = $pdo->prepare($sql);


        $stm->bindValue(1, $fname,PDO::PARAM_STR);
        $stm->bindValue(2, $lname,PDO::PARAM_STR);
        $stm->bindValue(3,$email ,PDO::PARAM_STR);
        $stm->bindValue(4, $password,PDO::PARAM_STR);


        if ($stm->execute()) {
            header("Location: login.php");
        }
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
        <section class="form signup">
            <header>Sign up</header>
            <form action="#" method="POST">
                <div class="error-text">This an error message</div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name</label>
                        <input type="text" placeholder="First Name" name="fname" required>
                    </div>
                    <div class="field  input">
                        <label for="">Last Name</label>
                        <input type="text" placeholder="Last Name" name="lname" required>
                    </div>
                </div>
                <div class="field  input">
                    <label for="">Email Address</label>
                    <input type="text" placeholder="Enter your email " name="email" required>
                </div>
                <div class="field  input">
                    <label for="">Password</label>
                    <input type="password" placeholder="Enter mew password" name="password" required>
                    <i class="fas fa-eye"></i>
                </div>

                <div class="field button">
                    <input type="submit" value="Sign up" name="submit">
                </div>

            </form>
            <div class="link">Already Signed up ? <a href="login.php">Login Now</a></div>
        </section>
    </div>


</body>

</html>