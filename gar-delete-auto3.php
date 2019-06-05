<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gar-delete-auto3.php</title>
    <link rel="stylesheet" href="garstyle.css">
</head>

<body>
<header>
<h1>Garage delete auto 3</h1>
</header>
<?php
$autokenteken = $_POST ["autokentekenvak"];

$verwijderen = $_POST ["verwijdervak"];

if ($verwijderen)
{
    require_once "gar-connect.php";
    $sql = $conn->prepare("
    delete from auto
    where autokenteken = :autokenteken
    ");
    $sql->execute(["autokenteken" => $autokenteken]);
    echo "de gegevens zijn verwijderd. <br />";

}
else
{
    echo "de gegevens zijn niet verwijderd. <br />";
}
echo "<a href='gar-menu.php'>terug naar het menu. </a>";
?>

</body>
</html>