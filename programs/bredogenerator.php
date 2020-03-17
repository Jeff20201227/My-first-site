<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="../style.css" media="screen">
</head>

<body>
    <header>
        <nav>
            <a href="../index.php">Главная</a>
            <a href="/games/games.php">Игры</a>
            <a class="selected" href="programs.php">Программы</a>
            <a href="../html/about.php">Обо мне</a>
        </nav>
    </header>
    <main2>
        <div class="center">
            <h1>Паролегенератор</h1>
            <div class="box">

                <?php
		mb_internal_encoding('UTF-8');

		if(isset($_POST['userAnswer1'])){
			$userAnswer = $_POST['userAnswer1'];
			$permitted_chars = '0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz';

			echo  '<p>' . 'Ваш пароль: ' . substr(str_shuffle($permitted_chars), 0, $userAnswer) . '</p>';}
		?>

                <form method="POST">
                    <p>Введите длину пароля от 1 до 100 символов<br></p>
                    <input type="number" min="1" max="100" name=userAnswer1>
                    <br>
                    <input type="submit" value="Подтвердить ввод" name="">
                </form>
            </div>
        </div>
    </main2>

    <footer>
        <span>Copyright &copy; <?php echo date("Y");?> Казанин Е.А.</span>
    </footer>
</body>

</html>
