<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<?php
// require 'environment.php';
require 'queries.php';
$texto="Hola desde php";
$numero=15;
try {
    // $statement=fetch_index(10,0);
    // $statement->execute();
    $rows=fetch_index(10,0);
    echo "<table class='table'>";
    echo "<th>id</th>";
    echo "<th>nombre</th>";
    echo "<th>apellido</th>";
    foreach($rows as $row){
       echo "<tr>";
       foreach($row as $column){
        echo "<td class='cell'>".$column."</td>";
       }
       echo "<tr>";
    }
    echo "</table>";
    
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
<script type='module'>
    let a=<?php echo($numero);?>;
    a+=4;
    console.log(a);
</script>
</body>
</html>