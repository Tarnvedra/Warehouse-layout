<?php
 require_once 'login.php';
            $connection = new mysqli($hostname, $username, $password, $database);
            if ($connection->connect_error) 
                {
                die("Fatal database error...0000000000000000000000000000");
                } 
                
?>

