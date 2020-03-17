<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="../style.css" media="screen">
    <script type="text/javascript">
        let answer = parseInt(Math.random() * 100);
        let playerNumber;
        let player1;
        let player2;


        function readName1() {
            player1 = document.getElementById("User1").value;
        }

        function readName2() {
            player2 = document.getElementById("User2").value;
        }


        function readAnswer() {
            let answer = document.getElementById("userAnswer").value;
            return answer; // можно записывать и так: return +document.getElementById("userAnswer").value;
        }

        function hide(id) {
            document.getElementById(id).style.display = "none";
        }

        function UserNames() {
            document.getElementById("User1").innerHTML = Name1;
            readName1();
            hide("Name1");
            document.getElementById("User2").innerHTML = Name2;
            hide("Name2");
            readName2();
            hide("info2");
            show("info1");
            playerNumber = player1;
        }

        function show(id) {
            document.getElementById(id).style.display = "block";
        }

        function switchPlayer() {
            if (playerNumber == readName1())
                playerNumber = readName2();
            else
                playerNumber = readName1();
        }

        function guess2() {
            let userAnswer = readAnswer();
            if (userAnswer == "q") {
                write("Игрок " + playerNumber + " вышел из игры. Игра закончена.")
                hide("button");
                hide("userAnswer");
            }
            userAnswer = parseInt(userAnswer);
            if (userAnswer == answer) {
                write("Поздравляю! Победил игрок " + playerNumber + ". Правильный ответ: " + answer);
                hide("button");
                hide("userAnswer");
            } else if (userAnswer > answer) {
                write(playerNumber + " вы ввели слишком большое число.");
                show("info1")
            } else if (userAnswer < answer) {
                write(playerNumber + " вы ввели слишком маленькое число");
                show("info1")
            }
            if (playerNumber == player1)
                playerNumber = player2;
            else
                playerNumber = player1;
        }

        function write(text) {
            document.getElementById("info").innerHTML = text;
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
        <h1>Игра Угадайка для двоих</h1>
        <div class="box">
            <p id="Name1">Введите имя первого игрока.</p>
            <input type="text" id="User1">
            <br>
            <p id="Name2">Введите имя второго игрока.</p>
            <input type="text" id="User2">
            <br>
            <div hidden id="info1">
                <p id="info">Угадайте число от 0 до 100.<br>Для выхода из игры, нажмите 'q'.</p>
                <input type="number" min="0" max="100" id="userAnswer">
                <br>
                <a href="#" onclick="guess2();" id="button">Начать игру</a>
            </div>
            <div id="info2">
                <br>
                <a href="#" onclick="UserNames();" id="button">Подтвердить имена</a>
            </div>
        </div>
    </main2>

    <footer>
        <span>Copyright &copy; <?php echo date("Y");?> Казанин Е.А.</span>
    </footer>
</body>

</html>
