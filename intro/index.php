<?php 
    $mode="dark";
    $name="JC";
    $array=array('a','b','c','d');
    define("DAYS_IN_YEARS",365);
    $greeting="Hello";
    $days=1;
    $counter=1;
    $amount=-4;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Document</title>
</head>
<body <?php if($mode==="dark"):?> class="dark" <?php endif?>>
    
    <h1>
        <?php
            /*if(empty($amount)){
                $message="Amount is required";
            }else if(!is_numeric($amount)){
                $message= "Amount must be number";
            }else if($amount<=0){
                $message="Amount must be greater than 0";
            }else{
                $message="Valid amount";
            }
            echo $message;*/
         ?>

        <?php
            echo (empty($amount) || !is_numeric($amount) || $amount<=0) ? "Not valid amount":"Valid amount"; 
         ?>        
    </h1>
    <p>
        <?php

        ?>
    </p>
    

    <!-- <?php
        $greeting.= ", how are you?";
        echo $greeting . nl2br(" \n") . $name;
     ?>
     <p><?php echo $array[2]?></p>
     <p><?php echo DAYS_IN_YEARS+1?></p>
     <P><?php echo $days-=10?></p>
     <p><?php $counter++;echo $counter?></p> -->

</body>
</html>