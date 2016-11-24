
<html>
<head>
    <title>Simple Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <?php
    function printRadioAge($value, $toPrint)
    {
        echo "<label><input type='radio' name='alter' value ='$value'/>$toPrint</label>";
    }
    ?>
</head>
<body>
<div class="container">

    <form method = "POST" action = "index.php">
        <input type ="checkbox" name ="agb" value="akzeptiert">AGB gelesen
        <hr>
        <?php
        printRadioAge("1", "15-20");
        echo"<br>";
        printRadioAge("2", "20-25");
        echo"<br>";
        printRadioAge("3", "25-30");
        echo"<br>";
        printRadioAge("4", "35-35");
        echo"<br>";
        printRadioAge("5", ">35");
        echo"<br>";
        ?>
    <hr>
        <label><input type ="checkbox" name ="city[]" value="NYC">NYC</label>
        <br>
        <label><input type ="checkbox" name ="city[]" value="B">B</label>
        <br>
        <label><input type ="checkbox" name ="city[]" value="SF">SF</label>
        <br>
        <label><input type ="checkbox" name ="city[]" value="DC">DC</label>
        <br>
        <hr>

        <label><input type ="checkbox" name ="city1[NYC]" >NYC</label>
        <br>
        <label><input type ="checkbox" name ="city1[B]" >B</label>
        <br>
        <label><input type ="checkbox" name ="city1[SF]" >SF</label>
        <br>
        <label><input type ="checkbox" name ="city[DC]" >DC</label>
        <hr>

        <select size="4" name="auto">
            <option>Audi</option>
            <option>BMW</option>
            <option>Renault</option>
            <option>Seat</option>
            <option>VW</option>
        </select>

        <hr>
        <select size="3" name="auto2[]" multiple>
            <option>Audi</option>
            <option>BMW</option>
            <option>Renault</option>
            <option>Seat</option>
            <option>VW</option>
        </select>

        <hr>
        <?php
        if(isset($_POST['alter'])) {
            echo $_POST['alter'];
            echo "<br>";
        }
        if(isset($_POST['agb'])) {
            echo $_POST['agb'];
            echo "<br>";
        }
        if(isset($_POST['agb'])) {
            if ($_POST['agb'] == 'on')
                echo "on";
            echo "<br>";
        }

        if(isset($_POST['city']))
            var_dump($_POST['city']);
            echo"<br>";
        if(isset($_POST['city1']['NYC']))
            echo "New Yor City!!";
        if(isset($_POST['city1']['B']))
            echo"Boston!!";
        if(isset($_POST['city1']['SF']))
            echo"San Francisco!!";
        if(isset($_POST['city1']['DC']))
            echo "Wahsington DC!!";
        echo "<br>";
        if(isset($_POST['auto']))
                echo $_POST['auto'];
        echo"<br>";
        if(isset($_POST['auto2']))
            foreach ($_POST['auto2'] as $v) {
                echo $v;
                echo "<br>";
            }
        ?>
    <hr>
        <input type = "submit">
    </form>

</div>
</body>
</html>