<?php
session_start();

include 'DB.php';

$error = null;

if (isset($_POST['login']) and isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    try {
        $stmt = $pdo->prepare('SELECT * FROM users WHERE login = ? AND password = ?;');
        $rows = $stmt->execute([$login, $password]);
        $rows = $stmt->fetch(PDO::FETCH_OBJ);
        if ($rows) {
            $error = 'Користувач вже існує!';
        } else {
            $stmt = $pdo->prepare('INSERT INTO users(`login`, `password`) VALUES (?,?);');
            $rows = $stmt->execute([$login, $password]);
            $_SESSION['login'] = $login;
            header('Location: /index.php');
        }
    } catch (PDOException $e){
        $error = 'Помилка!';
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
    <title>Реєстрація</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/auth.css">
</head>
<body>
<div class="auth_frame">
    <h1>Реєстрація</h1>
    <form method="post">
        <input type="text" class="form_input" name="login" placeholder="Логін" required>
        <input type="password" class="form_input" name="password" placeholder="Пароль" required>
        <input type="submit" class="form_input" value="Зареєструватись">
    </form>
    <?php if (isset($error)):?>
        <span><?php echo $error?></span>
    <?php endif?>
    <hr style="width: 100%">
    <a href="index.php">На головну</a>
</div>
</body>
</html>
