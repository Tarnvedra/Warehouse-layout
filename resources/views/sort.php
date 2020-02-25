<?php

require_once 'login.php';
$connection = new mysqli($hostname, $username, $password, $database);
if ($connection->connect_error) {
    die("Fatal database error...0000000000000000000000000000");
} 


 $selected = filter_input(INPUT_POST, 'result');
 
 echo($selected ."=RESULT <br>");
 

 if ($selected === 1)
         {
     $query = "SELECT * FROM product ORDER BY mass DESC";
 }
 elseif ($selected === 2){
     $query = "SELECT * FROM product ORDER BY volume DESC";
 }
 elseif ($selected === 3) {
     $query = "SELECT * FROM product ORDER BY density DESC";
 }

    $result = $connection->query($query);
    
     echo"<table>"; 
     echo"<tr>";
     echo"<th>Sku</th>";
     echo"<th>Description</th>";
     echo"<th>Width (cm)</th>";
     echo"<th>Length (cm)</th>";
     echo"<th>Height(cm)</th>";
     echo"<th>Mass (kg)</th>";
     echo"<th>Density (g/m3)</th>";
     echo"<th>Volume (cm/3)<th>";
     echo"</tr>";
     
    if ($result-> num_rows >0){
        while ($row = $result-> fetch_assoc()){
          echo "<tr><td>" . $row['sku'] . 
                  "</td><td>" . $row['item'] .
                  "</td><td>" . $row['width'] .
                  "</td><td>" . $row['length'] . 
                  "</td><td>" . $row['height'] . 
                  "</td><td>" . $row['mass'] . 
                  "</td><td>" . $row['volume'] . 
                  "</td><td>" . $row['density'] . "</td></tr>";     
        }  
        echo "</table>";
    }
    else {
        echo "No results";
    }
     $result->close();
    $connection->close();
?>
