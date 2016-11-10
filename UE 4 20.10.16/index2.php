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
        $myBool = true;
        echo "<p>".$myString1.$myString2."</p>";
        echo '<p style="color:tomato">'.$myString1.$myString2."</p>";
    ?>
    <h1>Kontrollstrukturen</h1>
    <?php
        if($myBool)
            echo "<p>Yes, it is!</p>";
        else
            echo "<p>No, it is not!</p>";
    ?>
    <h2>Loops in Kombination mit Arrays!</h2>
    <ul>
    <?php
        $myArray1 = array("Home", "Products", "About");
        foreach ($myArray1 as $item)
            echo "<li>$item</li>";
    ?>
    </ul>
    <ul>
        <?php
        $myArray2 = ["Home", "Products", "About"];
        for ($i = 0; $i < sizeof($myArray2); $i++)
            echo "<li>$myArray2[$i]</li>";
        ?>
    </ul>
    <h2>AssoziativeArrays</h2>
        <?php
        // Key - Value Paare
        $myGetArray = ["nn"=>"Brunner", "vn"=>"Markus", "submit"=>"Senden"];
        // Mit Key kann der Wert ausgelesen werden
        if(isset($myGetArray['submit']))
            echo "<p>".$myGetArray['submit']."</p>";
        ?>
    <ul>
        <?php

        foreach ($myGetArray as $item)
            echo "<li>$item</li>";
        ?>
    </ul>
    <h1>Super Gloabls</h1>
    <?php
        //var_dump($_SERVER);
        echo "Client sprache: ".$_SERVER['HTTP_ACCEPT_LANGUAGE'];
        echo "<br>";
        echo "Client IP: ".$_SERVER['REMOTE_ADDR'];
    ?>


</body>
</html>