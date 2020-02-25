<?php

$sku = filter_input(INPUT_POST, 'sku');
$item = filter_input(INPUT_POST, 'item');
$width = filter_input(INPUT_POST, 'width');
$length = filter_input(INPUT_POST, 'length');
$height = filter_input(INPUT_POST, 'height');
$mass = filter_input(INPUT_POST, 'mass');
$volume = filter_input(INPUT_POST,'volume');
$density = filter_input(INPUT_POST,'density');
//$prod = filter_input(INPUT_POST,'size');
 
// create size comparison 0-9  9=Largest 0=Smallest
$sizeNine  = [50,50,50,15,30,125000,0.00012,0.00024];
$sizeEight = [40,40,40,12,14.9,64000,0.0001875,0.000234375];
$sizeSeven = [35,35,35,10,11.9,42875,0.000233236,0.000279883];
$sizeSix   = [30,30,30,8,9.9,27000,0.000296296,0.00037037];
$sizeFive  = [25,25,25,6,7.9,15625,0.000384,0.000512];
$sizeFour  = [20,20,20,4,5.9,8000,0.0005,0.00075];
$sizeThree = [15,15,15,3,3.9,3375,0.000888889,0.001185185];
$sizeTwo   = [10,10,10,2,2.9,1000,0.002,0.003];
$sizeOne   = [5,5,5,1,1.9,125,0.008,0.0152];
$sizeZero  = [2,2,2,0.5,0.9,8,0.0625,0.1125];
    
   
    $size=10;
   // work out product size for potential aisle sorting
    
    if ($mass >= $sizeNine[3] && $mass <= $sizeNine[4] || $volume > $sizeEight[5])
        {
           $size = 9;    
        }
    
    else if ($mass >=$sizeEight[3] && $mass <= $sizeEight[4] || $volume > $sizeSeven[5])
        {    
           $size = 8;    
        }
      
    
    else if ($mass >=$sizeSeven[3] && $mass <= $sizeSeven[4] || $volume > $sizeSix[5])
        {    
           $size = 7;    
        }  
    
    else if ($mass >=$sizeSix[3] && $mass <= $sizeSix[4] || $volume > $sizeFive[5])
        {    
           $size = 6;    
        }
    
    else if ($mass >=$sizeFive[3] && $mass <= $sizeFive[4] || $volume > $sizeFour[5])
        {    
           $size = 5;    
        }
    
    else if ($mass >=$sizeFour[3] && $mass <= $sizeFour[4] || $volume > $sizeThree[5])
        {   
           $size = 4;    
        }
    
    else if ($mass >=$sizeThree[3] && $mass <= $sizeThree[4] || $volume > $sizeTwo[5])
        {    
           $size = 3;    
        }
   
    else if ($mass >=$sizeTwo[3] && $mass <= $sizeTwo[4] || $volume > $sizeOne[5])
        {    
           $size = 2;    
        }
    
    else if ($mass >=$sizeOne[3] && $mass <= $sizeOne[4] || $volume > $sizeZero[5])
        {    
           $size = 1;    
        }
    
    else if ($mass >=$sizeZero[3] && $mass <= $sizeZero[4] || $volume <= $sizeZero[5])
        {    
           $size = 0;    
        }   
        
$prod = $size;
echo "Sku         :" . $sku . '<br>';
echo "Description :" . $item . '<br>';
echo "Width       :" . $width . '<br>';
echo "Length      :" . $length . '<br>';
echo "Height      :" . $height . '<br>';
echo "Mass        :" . $mass . '<br>';
echo "Volume      :" . $volume . '<br>';
echo "Density     :" . $density . '<br>';
echo "Size        :" . $prod . '<br>';

require_once 'login.php';
$connection = new mysqli($hostname, $username, $password, $database);
if ($connection->connect_error) {
    die("Fatal database error...0000000000000000000000000000");
} 

$query = "INSERT INTO product (sku, item, width, length, height, mass, volume, density, prod)
        values ('$sku','$item','$width','$length','$height','$mass','$volume','$density',$prod)";
        if ($connection->query($query))
        {
         echo "record inserted............................................................";   
        }
        else {
            echo "Error: XXX". $query ."<br>". $connection->error;
        }
            
?>
      
