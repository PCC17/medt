
<html>
<head>
    <title>PHP Info</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <?php
        function printTableRow($identifier, $value)
        {
            echo "<tr>";
            echo"<td><strong>$identifier</strong></td>";
            echo"<td>$value</td>";
            echo "</tr>";
        }
    ?>
</head>
<body>
<div class="container">
    <h2><strong style="color: blueviolet">$_SERVER</strong> im Überblick</h2>
    <table class="table table-bordered table-hover">

        <thead style="background-color: aquamarine">
        <th><h3>Variable</h3></th>
        <th><h3>Wert</h3></th>
        <thead>
        <tbody>
        <?php
            printTableRow("Skript-Pfad", $_SERVER["PHP_SELF"]);
            printTableRow("Server-Name/IP", $_SERVER["SERVER_NAME"]);
            printTableRow("Protokoll", $_SERVER["SERVER_PROTOCOL"]);
            printTableRow("Client-IP", $_SERVER["REMOTE_ADDR"]);
            printTableRow("URI", $_SERVER["REQUEST_URI"]);
            printTableRow("Server-Info", $_SERVER["SERVER_SOFTWARE"]);
        ?>
        </tbody>
    </table>
</div>
</body>
</html>