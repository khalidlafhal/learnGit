
<?php

try{
    
    $dsn = 'mysql:host=localhost;dbname=learngit;port=3306;charset=utf8';
    $user = 'root';
    $password = '';
    $pdo = new PDO($dsn ,$user ,$password) ;


}catch (PDOException $e) {
    echo 'erruer de connexion' . $e -> getMessage();
}




?>