<?php

$bilangan;
$satuan;
$puluhan;
$ratusan;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
        <table>
            <tr>
                <td>Bilangan</td>
                <td>;</td>
                <td><input type="number" name="bilangan"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="cari" name="submit"></td>
            </tr>
        </table>
</body>
</html>

<?php
if(isset($_POST['submit'])){
$bilangan = $_POST["bilangan"];


echo "satuan :" . $satuan = ($bilangan % 10);
echo "<br/>";
echo "puluhan : " . $puluhan = ($bilangan / 10) % 10;
echo "<br/>";
echo "ratusan : " . $ratusan = (int) ($bilangan / 100);
echo "<br/>";
}
?>


