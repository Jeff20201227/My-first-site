<!DOCTYPE html>
<html lang="rm">

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
            <a href="../html/scores.php">Моя учёба</a>
            <a href="../html/about.php">Обо мне</a>
        </nav>
    </header>

    <h1>Личный сайт студента GeekBrains.</h1>
    <h1>Студент факультета веб-разработки. 2020 год.</h1>

    <main>
            <p>На данный момент мной написана всего одна полноценная программа. Список будет пополняться в дальнейшем.</p>
            <ul>
                <li><a href="/programs/bredogenerator.php">Генератор пароля</a></li>
                <p>Генератор пароля - простая программа позволяющая генерировать пароль из латинских букв разного регистра и цифр. Позволяет задать длину пароля от 1 до 100 символов.</p>
            </ul>
    </main>

    <footer2>
        <span>Copyright &copy; <?php echo date("Y");?> Казанин Е.А.</span>
    </footer2>

</body>

</html>
