<?php
    try {
        $conn = new PDO('mysql:dbname=hotel;host=localhost','root','');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo ("Connected to db");
    }catch(PDOException $e)

    {
      echo $e->getMessage();                        
    }

?>