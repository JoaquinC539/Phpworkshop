<?php
include 'queries.php';
    
try{
    $offset=isset($_GET['offset']) ? $_GET['offset'] :0;
    $max=$_GET['max'] ?? 15 ;
    $data=fetch_index($max,$offset);
    header('Content-Type:application/json');
    echo json_encode($data);

}catch(Exception $e){
    
    echo ($e->getMessage());
}

?>