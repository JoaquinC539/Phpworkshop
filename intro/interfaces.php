<?php 
    interface ITemplate{
        public function get_title();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
<body class="dark">
    <h1>Interfaces</h1>
    <?php 
        class Title implements ITemplate{
            public $title;
            public function __construct($title=null) {
                $this->title=$title;
            }
            public function get_title(){
                return $this->title;
            }
        }
        $title=new Title("Saludos!");
        echo $title->get_title();
    ?>

</body>
</html>