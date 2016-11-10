
<html>
<head>
    <title>Form Demo 1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

    <form class="form-inline" method="post" action=<?php echo $_SERVER['PHP_SELF'] ?>"Form1.php">
        <div class="form-group">
            <label for="vorname">Vorname:</label>
            <input type="text" class="form-control" name="vn">
            <label for="pwd">Nachname:</label>
            <input type="text" class="form-control" name="nn">
            <label for="pwd">Textfarbe:</label>
            <input type="text" class="form-control" name="tf">
        </div>
        <input type="submit" name="submit">
    </form>

    <?php
    if (isset($_GET["submit"])) {
        print_r($_GET);
        echo "<p style = \" color:".$_GET['tf'].";\" >Vorname: ".$_GET["vn"];
        echo "<br>";
        echo "Nachname: " . $_GET["nn"]."</p>";
    }
    ?>
    <?php
    if (isset($_POST["submit"])) {
        print_r($_POST);
        echo "<p style = \" color:".$_POST['tf'].";\" >Vorname: ".$_POST["vn"];
        echo "<br>";
        echo "Nachname: " . $_POST["nn"]."</p>";
    }
    ?>
</body>
</html>