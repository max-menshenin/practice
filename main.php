<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <div class="flex-container">

        <div class="header">
            <?php include 'logo.inc.php' ?>
            <?php include 'menu.inc.php' ?>
        </div>

        <div class="about_me">

            <h1> <?php echo $p ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php
                    echo '<img src="img/php.jpg">';
                    ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут
                        <?php echo $surname, ' ', $name, ' ', $patronomyc . '<br>';
                        echo 'город', ' ', $city;
                        ?>
                    </p>

                    <p> Мне
                        <?php echo $age; ?>
                        лет </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">

                <?php include 'knowledge.inc.php'; ?>
                <?php
                echo $layout, ' ', $php, ' ', $javascript;
                ?> <br>

                <?php
                $layout = 10;
                $php = 30;
    
                ?> <br>


            </div>

            <div class="article">
                <p class="text">
                    Со школьных лет любил программирование, участвовал в городских олимпиадах города Тюмени, входил в тройку призеров, правда писал Pascal, но везде принцип схож по-моему опыту, разве в функциональных языках чуть иначе. Поступил и окончил МИРЭА факультет информационных технологий.
                    Python и PHP начал изучать на последних курсах института.
                    Полюбил UNIX и LINUX, не боюсь консоли, пробовал разные дистрибутивы, как Debian, Ubuntu, Fedora, но сейчас на MacOS.
                </p>
            </div>
        </div>

        <?php include 'footer.inc.php' ?>

    </div>


</body>

</html>