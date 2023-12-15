<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
try {
    $dbh = new PDO('pgsql:host=localhost;port=15432;dbname=CRM;user=postgres;password=Labonita2012');
    echo "La conexión PDO se creó correctamente";
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

</body>
</html>