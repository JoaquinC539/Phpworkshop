<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Loops</title>
</head>
<body class="dark">
    <h1>
        <?php 
            $counter=0;
            while($counter<=5){
                echo $counter."<br>";
                $counter++;
            }
            
            $myArray=array(1,2,3,4);
            $message="";
            for( $counter=0;$counter<count($myArray);$counter++){
                echo $myArray[$counter];
                echo "<br>";
                
            }
            $myMap=array(
                "llave1"=> "valor 1",
                "llave2" => "valor2",
                "llave3" => "valor3"
            );
            foreach($myMap as $key=>$value){
                echo "Key: ".$key.", Value: ".$value."<br>";
            }
            // echo $message;
        ?>
    </h1>
</body>
</html>