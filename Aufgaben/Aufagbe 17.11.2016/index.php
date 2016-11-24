<html>
<head>
    <title>Medientechnik</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="stylesheet">
        .splitRow
        {
        }
    </script>
</head>
<body>
<main style="width: 80%; margin:auto; background-color: #2aabd2; padding: 30px 30px 30px 30px;">
<h2>Satz Splitter</h2>
<form class="form-horizontal" action="index.php">
    <div class="form-group">
        <label class="control-label col-md-1">Satz:</label>
        <div class="col-md-11">
            <input type="text" class="form-control" placeholder="Satz eingeben" name="s">
        </div>

    </div>
    <div class="form-group">
        <label class="control-label col-md-1">Auswahl:</label>
        <div class ="col-md-2">
            <button type="submit" class="btn btn-default" name="Split" >Split</button>
            <button type="submit" class="btn btn-default" name="Reset" >Reset</button>
        </div>
    </div>
</form>

    <?php
        if(isset($_GET['Split']))
        {

            $splitted = array_filter( explode(" ", $_GET['s']) );
            if(count($splitted) != 0) {
                echo "<div style=\"background-color: #265a88; padding: 30px 30px 30px 30px;\">";
                echo "<h3>Ihre Eingabe als Liste</h3>";
                echo "<table class='table table-striped'>";
                foreach ($splitted as $var) {
                    echo "<tr><td>";
                    echo $var;
                    echo "</td></tr>";
                }
                echo "</table>";
                echo"</div>";

            }
        }
    ?>

</main>
</body>
</html>
