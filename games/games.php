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
            <p>На&nbsp;данный момент мной написано всего несколько игр. Список будет пополняться в&nbsp;дальнейшем.</p>
            <ul>
                <li><a href="/games/Riddles.php">Загадки</a></li>
                <p>Загадки&nbsp;&mdash; простая игрушка из&nbsp;трёх вопросов, поддерживает различные варианты ответов, не&nbsp;требовательна к&nbsp;регистру ответов.</p>
                <li><a href="/games/guess.php">Угадайка</a></li>
                <p>Угадайка&nbsp;&mdash; игрушка по&nbsp;угадыванию загаданного компьютером числа. Даётся несколько шансов за&nbsp;которое с&nbsp;помощью подсказок надо успеть угадать, что за&nbsp;число загадал компьютер.</p>
                <li><a href="/games/guess2.php">Угадайка мультиплеер</a></li>
                <p>Угадайка на&nbsp;двоих&nbsp;&mdash; игрушка по&nbsp;угадыванию загаданного компьютером числа для двоих игроков. Позволяет задавать имена игроков и&nbsp;выход из&nbsp;игры по&nbsp;желанию одного из&nbsp;игроков.</p>
                <li><a href="/games/duck_hunt.php">Охота на&nbsp;уток</a></li>
                <p>Охота на&nbsp;уток, игра написанная на&nbsp;<acronym title="HyperText Markup Language" lang="en">HTML</acronym>&<acronym title="Cascading Style Sheets" lang="en">CSS</acronym>, разбиралась на&nbsp;вебинаре <a href="https://geekbrains.ru/events/1833">Алексея Кадочникова.</a> На&nbsp;данный момент игра больше демо, не&nbsp;хватает знаний для усложнения логики игры (без использования JS). Будет дорабатываться. На&nbsp;данный момент только три уточки на&nbsp;отстрел.</p>
            </ul>
        </div>
    </main>

    <footer>
        <span>Copyright &copy; <?php echo date("Y");?> Казанин Е.А.</span>
    </footer>
</body>

</html>
