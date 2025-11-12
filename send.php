<?php
// Настройки почты
$to = "kamilzalautdinov@gmail.com";
$subject = "Новая заявка на справку";

// Получаем данные из формы
$surname = htmlspecialchars($_POST['surname']);
$name = htmlspecialchars($_POST['name']);
$patronymic = htmlspecialchars($_POST['patronymic']);
$group = htmlspecialchars($_POST['group']);
$type = htmlspecialchars($_POST['type']);
$phone = htmlspecialchars($_POST['phone']);
$note = htmlspecialchars($_POST['note']);

// Формируем тело письма
$message = "
<html>
<head><title>Новая заявка на справку</title></head>
<body>
<h2>Новая заявка на справку</h2>
<p><strong>Фамилия:</strong> $surname</p>
<p><strong>Имя:</strong> $name</p>
<p><strong>Отчество:</strong> $patronymic</p>
<p><strong>Группа:</strong> $group</p>
<p><strong>Тип справки:</strong> $type</p>
<p><strong>Телефон:</strong> $phone</p>
<p><strong>Примечания:</strong> $note</p>
</body>
</html>
";

// Заголовки
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: Сайт колледжа <no-reply@sovpk.ru>" . "\r\n";

// Отправка письма
if (mail($to, $subject, $message, $headers)) {
    echo "<div class='success'>Заявка успешно отправлена!</div>";
} else {
    echo "<div class='success' style='color:red'>Ошибка при отправке.</div>";
}
?>
