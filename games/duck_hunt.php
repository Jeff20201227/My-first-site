<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="../style.css" media="screen">
    <link rel="stylesheet" href="../games.css" media="screen">
</head>

<body>
<div class="conteiner">
    <header>
        <nav>
            <a href="../index.php">Главная</a>
            <a class="selected" href="games.php">Игры</a>
            <a href="../programs/programs.php">Программы</a>
            <a href="../html/scores.php">Моя учёба</a>
            <a href="../html/about.php">Обо мне</a>
        </nav>
    </header>
    <main2>
        <div class="box_games">
            <h1>Игра "Охота на уток"</h1>
            <p id="info">Отстреливайте щелчком мышки летящих в небе уточек. Всего 4 утки.</p><br>
            <div class="map">

                <input id="dog" type="name" placeholder="Не стреляй в собаку">
                <label class="dog dog1" for="dog"></label>

                <input id="duck1" type="checkbox">
                <label class="duck duck1" for="duck1"></label>

                <input id="duck2" type="checkbox">
                <label class="duck duck2" for="duck2"></label>

                <input id="duck3" type="checkbox">
                <label class="duck duck3" for="duck3"></label>

                <input id="duck4" type="checkbox">
                <label class="duck duck4" for="duck4"></label>
                <div class="count"></div>

            </div>
        </div>
    </main2>

    <footer>
        <span>Copyright &copy; <?php echo date("Y");?> Казанин Е.А.</span>
    </footer>
    </div>
</body>

</html>
