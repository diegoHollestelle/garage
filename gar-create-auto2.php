<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-create-auto2.php</title>
    <link rel="stylesheet" href="garstyle.css">
</head>
<body>
<h1>garage create auto 2</h1>
<p>
    een auto toevoegen aan de tabel
    auto in de database garage
</p>

<?php

$klantid       = $_POST["klantidvak"];
$autokenteken     = $_POST["autokentekenvak"];
$automerk    = $_POST["automerkvak"];
$autotype = $_POST["autotypevak"];
$autokmstand   = $_POST["autokmstandvak"];

require_once "gar-connect.php";

$sql = $conn->prepare(" INSERT INTO auto VALUE 
                        (
                        :autoid, :autokenteken, :automerk,
                        :autotype, :autokmstand
                        )
                     ");
$sql-> execute([
    "autoid" => $klantid,
    "autokenteken" => $autokenteken,
    "automerk" => $automerk,
    "autotype" => $autotype,
    "autokmstand" => $autokmstand
]);

echo "de auto is toegevoegd<br/>";
echo "<a href= 'gar-menu.php'> terug naar het menu </a>";
?>
</body>
</html>