<?php
    require 'environment.php';
    /**
     * @max Max de limite
     * @offset skip de rows
     */
    function fetch_index($max,$offset){
        $dbh = new PDO('pgsql:host='.$_ENV['DB_HOST'].';port='.$_ENV['DB_PORT'].';dbname='.$_ENV['DB_NAME'].'
        ;user='.$_ENV['DB_USER'].';password='.$_ENV['DB_PASS'].'');
        $sql="SELECT vendedores._id,vendedores.nombre,vendedores.apellido FROM vendedores LIMIT :limit OFFSET :offset";
        $statement=$dbh->prepare($sql);
        $statement->bindValue(':offset',$offset,PDO::PARAM_INT);
        $statement->bindValue(':limit',$max,PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);;
        
    }
    
 ?>