<?php
$sku = filter_input(INPUT_POST, 'sku');
//$testsku = filter_input(INPUT_POST, 'testsku');
//echo ('testsku = '+$testsku);
// if ($testsku === 1)
//{
echo('Sku =:');
echo($sku);

require_once 'login.php';
$connection = new mysqli($hostname, $username, $password, $database);
if ($connection->connect_error) {
    die("Fatal database error...");
} 

$query = "SELECT sku FROM product";
$result = $connection->query($query);

 if ($result-> num_rows >0)
     {
 
        while ($row = $result-> fetch_assoc())
        { 
            
             
        if ($row["sku"] === $sku) 
            {
            $delete ="DELETE FROM product WHERE sku = ?";
            if($statement === mysqli_prepare($connection, $delete)) {
            
            mysqli_stmt_bind_param($statement, "s", $parameter_sku);
            $parameter_sku = filter_input(INPUT_POST, 'sku');
            if(mysqli_stmt_execute($statement))
                {
                // Records deleted successfully. Redirect to delete page
                header("location: deleteitem.php");
                exit();
                } 
            else{
                echo "Error: X". $delete ."<br>". $connection->error;
                echo "Oops! Something went wrong. Please try again later.";
                }
            }
            
           
       
           
        } 
        
        
        
            
     
    }
     }
    echo('all done!');
    $result->close();
    $delete->close();
    $statement->close();
    $connection->close();
//}
//else if ($testsku === 0){
//    echo('testsku ='+$testsku);
//    echo('test failed');
    

?>