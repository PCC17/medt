<html>
<head>

</head>
<body>
    <h1> Einfache extausgabe mit echo</h1>
    <?php echo "<h2>Hello world!1</h2>";?>
    <h2><?php echo "Hello \"world!2\"";?></h2>
    <h2><?php echo "Hello, ";?>
        <?php echo "World!3";?></h2>
    <p>
        <?php echo 'Hello, "World!4"'; //As it is ?>
    </p>
    <h1>Textausgabe von Variablen</h1>
    <?php
        $myString1 = "Hello it`s me, ";
        $myString2 = "I was wondering, ";
        $myInt = 5734;
        echo "<p>".$myString1.$myString2."</p>";
        echo '<p style="color:tomato">'.$myString1.$myString2."</p>";
    ?>
</body>
</html>