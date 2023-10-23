
<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require __DIR__ . '/PHPMailer/src/Exception.php';
  require __DIR__ . '/PHPMailer/src/PHPMailer.php';
  require __DIR__ . '/PHPMailer/src/SMTP.php';

  $mail = new PHPMailer(true);
  $mail->CharSet = 'UTF-8';
  $mail->IsHTML(true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "ilyamatlash123@gmail.com"; // Адрес, на который будет отправлено письмо
  $subject = "Новая заявка с формы"; // Тема письма

  // Получение данных из формы
  $name = $_POST["user_name"];
  $phone = $_POST["user_phone"];
  $email = $_POST["user_email"];
  $company = $_POST["user_company"];
  $comment = $_POST["user_comment"];

  // Формирование тела письма
  $message = "Имя: $name<br>";
  $message .= "Телефон: $phone<br>";
  $message .= "Email: $email<br>";
  $message .= "Компания: $company<br>";
  $message .= "Комментарий: $comment<br>";

  try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ilyamatlash123@gmail.com'; // Ваш email
    $mail->Password = 'tkpjxdzpwuwutqdd'; // Ваш пароль
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($email);
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->Body = $message;

    $mail->send();
    // echo "<script>openModal();</script>";
  } catch (Exception $e) {
    echo "Ошибка отправки письма: " . $mail->ErrorInfo;
  }
}
  $response = ['message' => $message];
  header('Content-type: application/json');
  echo json_encode($response);
?>