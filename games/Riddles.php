<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="../style.css" media="screen">
    <script type="text/<?php  ?>">
        <?php
		/**
		 * Склонение числительных фывфывфывф
		 * @param int $numberof — склоняемое число
		 * @param string $value — первая часть слова (можно назвать корнем)
		 * @param array $suffix — массив возможных окончаний слов
		 * @return string
		 *
		 */
		function numberof($numberof, $value, $suffix)
		{
		    $keys = array(2, 0, 1, 1, 1, 2);
		    $mod = $numberof % 100;
		    $suffix_key = $mod > 4 && $mod < 20 ? 2 : $keys[min($mod%10, 5)];
		    
		    return $value . $suffix[$suffix_key];
		}

		// значения
		$values = array(1, 2, 10, 101, 151, 511, 777, 1001);

// перебираем массив
		foreach ($values as $number)
		{
		    echo $number.' ';
		    
		    // получаем нужное склонение
		    echo numberof($number, 'загад', array('ка', 'ки', 'ок'));
		    echo '<br>';
		}
		?>
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
        <div class="center">
            <h1>Игра в загадки</h1>
            <div class="box">

                <?php
		mb_internal_encoding('UTF-8');

		if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])){

			$userAnswer = $_GET["userAnswer1"];
			$userAnswer = mb_strtolower($userAnswer);
			$score = 0;
			if($userAnswer == "петух" || $userAnswer == "петушок"){
				$score++;
			}

			$userAnswer = $_GET["userAnswer2"];
			$userAnswer = mb_strtolower($userAnswer);
			if($userAnswer == "часы" || $userAnswer == "часики" || $userAnswer == "будильник"){
				$score++;
			}

			$userAnswer = $_GET["userAnswer3"];
			$userAnswer = mb_strtolower($userAnswer);
			if($userAnswer == "сова" || $userAnswer == "совы" || $userAnswer == "хедвиг"){
				$score++;
			}

			 echo "Вы угадали " . $score . numberof($score, ' загад', array('ка', 'ки', 'ок'));
		}
			?>

                <form method="GET">
                    <p>Не ездок, а со шпорами. Не будильник, а всех будит.<br></p>
                    <input type="text" name=userAnswer1>

                    <p>Мы день не спим,<br> Мы ночь не спим,<br> И день и ночь,<br> Стучим, стучим.<br></p>
                    <input type="text" name=userAnswer2>

                    <p>Очень странный почтальон: <br>Не маггл и не волшебник он.<br>Доставит письма и газеты,<br>Несет посылку на край света,<br>Хранить умеет все секреты.<br>Крылат и смел, и зорок он.<br>Так кто же этот почтальон?<br></p>
                    <input type="text" name=userAnswer3>
                    <br>
                    <input type="submit" value="Ответить" name="">
                </form>
            </div>
        </div>
    </main2>

    <footer>
        <span>Copyright &copy; <?php echo date("Y");?> Казанин Е.А.</span>
    </footer>
</body>

</html>
