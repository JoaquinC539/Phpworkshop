<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Objects</title>
</head>
<body class="dark">
    <h1>Maps and objects</h1>
    <p>
        Mapas: 
        <br>
    <?php
        $myMap=array();
        $myMap['op1']="Option 1";
        $myMap['op2']="Option 2";
        $myMap['op3']="Option 3";
        echo $myMap["op1"];
        echo "<br>";
        $objeto = (object) array(
            "llave1" => "valor1",
            "llave2" => "valor2",
            "llave3" => "valor3"
        );
        echo $objeto->llave1;
        echo "<br>";
        $myOtherMap=array(
            "llave1"=> "valor 1",
            "llave2" => "valor2",
            "llave3" => "valor3"
        );
        print_r($myOtherMap);
        echo "<br>";
        echo $myOtherMap["llave1"];
    ?>

    </p>
    <p>
        <h3>Classes</h3>
        <?php
            class Person{
                public $age=0;
                public $nombre= "";

                public function __construct($age=0,$name='') {
                    $this->age=$age;
                    $this->nombre=$name;
                }
                public function run($speed){
                    echo "Im running at a speed of {$speed}km/h";
                }
                public function print_this(){
                    print_r($this);
                }
                public function get_age(){
                    return $this->age;
                }
            }
            $person=new Person(24);
            echo $person->get_age();
        ?>
    </p>
</body>
</html>