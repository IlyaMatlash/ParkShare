<?php
require_once('db.php');

$email = $_POST['email'];
$pass = $_POST['pass'];

if (empty($email) || empty($pass)) {
    echo "Заполните все поля";
} else {
    $sql = "SELECT * FROM `Users` WHERE email = '$email' AND pass = '$pass'";
    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc()) {
            echo "Добро пожаловать!";
        }
    } else {
        echo "Такого пользователя не существует";
    }
}

?>