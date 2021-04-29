<?php

namespace App\Http\Controllers\Origin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListItemsController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }


  public function listItems()
  {
 // return view('pages/listitems')->with()
  }
//fetch.php

public function list() {

$connection = new mysqli($hostname, $username, $password, $database);
if ($connection->connect_error) {
    die("Fatal database error...");
}
 $query = "SELECT * FROM product";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  $data["sku"] = $row["sku"];
  $data["item"] = $row["item"];
  $data["width"] = $row["width"];
  $data["length"] = $row["length"];
  $data["height"] = $row["height"];
  $data['mass'] = $row['mass'];
  $data['volume'] = $row['volume'];
  $data['density'] = $row['density'];
 }

 echo json_encode($data);
}
  }

  //public function allItems()
//  {
    // require_once 'login.php';
  //  $connection = new mysqli($hostname, $username, $password, $database);
   // if ($connection->connect_error) die("Fatal database connection error");

//    $query = "SELECT * FROM product WHERE SKU !='00000'";
 //   $result = $connection->query($query);

   // if ($result-> num_rows >0){
     //   while ($row = $result-> fetch_assoc()){
       //      echo "<tr><td>" . $row['sku'] .
         //         "</td><td>" . $row['item'] .
           //       "</td><td>" . $row['width'] .
             //     "</td><td>" . $row['length'] .
               //   "</td><td>" . $row['height'] .
              //    "</td><td>" . $row['mass'] .
              //    "</td><td>" . $row['volume'] .
              //    "</td><td>" . $row['density'] . "</td></tr>";
      ///  }
    //    echo "</table>";
   // }
   // else {
     //   echo "No results";
    //}
    // $result->close();
    //$connection->close();


