<?php 
     class BaseClass{

        public function get_title(){
            if(! property_exists($this,'title')){
                throw new Exception("child class mus implement property title");
            }
            return $this->title;
        }
    }
    class Title extends BaseClass{
        public $title;
        public function __construct($title=null) {
            $this->title= (is_null($title))? "Mi clase":$title;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="dark">
    <h1>Advanced classes</h1>
    <p>
        <?php
            $title=new Title("Mi titulo");
            echo $title->get_title(); 
        ?>
    </p>
    
</body>
</html>