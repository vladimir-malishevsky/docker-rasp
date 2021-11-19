<?php
session_start();

include 'DB.php';

$error = null;

if (isset($_POST['login']) and isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare('SELECT * FROM users WHERE login = ? AND password = ?');
    $rows = $stmt->execute([$login, $password]);
    $user = $stmt->fetch(PDO::FETCH_OBJ);
    if ($user && $password == $user->password) {
        $_SESSION['login'] = $login;
        header('Location: /');
    } else {
        $error = 'Введено невірні дані!';
    }
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизація</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/auth.css">
</head>
<body>
<div class="auth_frame">
    <h1>Увійти в систему</h1>
    <form method="post">
        <input type="text" class="form_input" name="login" placeholder="Логін" required>
        <input type="password" class="form_input" name="password" placeholder="Пароль" required>
        <input type="submit" class="form_input" value="Вхід">
    </form>
    <?php if (isset($error)):?>
        <span><?php echo $error?></span>
    <?php endif?>
    <hr style="width: 100%">
    <a href="index.php">На головну</a>
</div>
</body>
</html>
<!--create table users(id INT PRIMARY KEY AUTO_INCREMENT, login VARCHAR(30) NOT NULL UNIQUE, password VARCHAR(30) NOT NULL);-->