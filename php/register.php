<?php  
require_once('db.php');
$login = $_POST['login'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];

if (empty($login) || empty($email) || empty($pass) || empty($repeatpass)) {
    echo "Заполните все поля";
} else {
    if ($pass != $repeatpass) {
        echo "Пароли не совпадают";
    } else {
        $sql = "SELECT * FROM `Users` WHERE login = '$login'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "Пользователь с таким логином уже существует";
        } else {
            $sql = "INSERT INTO `Users` (login, pass, email) VALUES ('$login', '$pass', '$email')";
            if ($conn->query($sql) === TRUE) {
                echo "Вы зарегистрировались";
            } else {
                echo "Ошибка: " . $conn->error;
            }
        }
    }
}
?>