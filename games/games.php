<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="../style.css" media="screen">
</head>

<body>

    <header>
        <nav>
            <a href="../index.php">Главная</a>
            <a class="selected" href="games.php">Игры</a>
            <a href="../programs/programs.php">Программы</a>
            <a href="../html/scores.php">Моя учёба</a>
            <a href="../html/about.php">Обо мне</a>
        </nav>
    </header>

    <h1 id="#top">Личный сайт студента GeekBrains.</h1>
    <h1>Студент факультета веб-разработки. 2020 год.</h1>

    <main>
        <div>
            <p>На данный момент мной написано всего несколько игр. Список будет пополняться в дальнейшем.</p>
            <ul>
                <li><a href="/games/Riddles.php">Загадки</a></li>
                <p>Загадки - простая игрушка из трёх вопросов, поддерживает различные варианты ответов, не требовательна к регистру ответов.</p>
                <li><a href="/games/guess.php">Угадайка</a></li>
                <p>Угадайка - игрушка по угадыванию загаданного компьютером числа. Даётся несколько шансов за которое с помощью подсказок надо успеть угадать, что за число загадал компьютер.</p>
                <li><a href="/games/guess2.php">Угадайка мультиплеер</a></li>
                <p>Угадайка на двоих - игрушка по угадыванию загаданного компьютером числа для двоих игроков. Позволяет задавать имена игроков и выход из игры по желанию одного из игроков.</p>
                <li><a href="/games/duck_hunt.php">Охота на уток</a></li>
                <p>Охота на уток, игра написанная на HTML&amp;CSS, разбиралась на вебинаре <a href="https://geekbrains.ru/events/1833">Алексея Кадочникова.</a> На данный момент игра больше демо, не хватает знаний для усложнения логики игры (без использования JS). Будет дорабатываться. На данный момент только три уточки на отстрел.</p>
            </ul>
        </div>
    </main>

    <footer>
        <span>Copyright &copy; <?php echo date("Y");?> Казанин Е.А.</span>
    </footer>
</body>

</html>
