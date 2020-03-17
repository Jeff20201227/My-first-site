<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="../style.css" media="screen">
    <script type="text/javascript">
        let answer = parseInt(Math.random() * 100);
        let tryCount = 0;
        const maxTryCount = 5;

        function readInt() {
            let number = document.getElementById("userAnswer").value;
            return parseInt(number); // можно записывать и так: return +document.getElementById("userAnswer").value;
        }

        function write(text) {
            document.getElementById("info").innerHTML = text;
        }

        function hide(id) {
            document.getElementById(id).style.display = "none";
        }

        function guess() {
            tryCount++;
            let userAnswer = readInt();
            if (userAnswer == answer) {
                write("<b>Поздравляю, вы угадали!<br> Правильный ответ: </b>" + answer);
                hide("button");
                hide("userAnswer");
            } else if (tryCount >= maxTryCount) {
                write("Вы проиграли.<br>Правильный ответ: " + answer);
                hide("button");
                hide("userAnswer");
            } else if (userAnswer > answer) {
                write("Вы ввели слишком большое число. У вас осталось " + (maxTryCount - tryCount) + " попыток.<brПопробуйте ещё раз. Введите число от 0 до 100");
            } else if (userAnswer < answer) {
                write("Вы ввели слишком маленькое число. У вас осталось " + (maxTryCount - tryCount) + " попыток.<brПопробуйте ещё раз. Введите число от 0 до 100");
            }
        }

    </script>
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

    <main2>
        <h1>Игра Угадайка</h1>
        <div class="box">
            <p id="info">Угадайте число от 0 до 100.</p>
            <input type="number" min="0" max="100" id="userAnswer">
            <br>
            <a href="#" onclick="guess();" id="button">Начать</a>
        </div>
    </main2>

    <footer>
        <span>Copyright &copy; <?php echo date("Y");?> Казанин Е.А.</span>
    </footer>
</body>

</html>
