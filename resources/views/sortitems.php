
<!DOCTYPE html>
<html>
 
    <head>
        <title>Winfix Layout</title>
        <meta charset="UTF-8">
        <!-- load in libraries and style sheets -->
        <link rel="stylesheet" type="text/css" href="winfix.css">
         <script src="jquery.min.js" type="text/javascript"></script>
        <script src="winfix.js"></script>
    </head> 
 <body>
       <!-- Top Menu Navigation Bar -->
        <div class="topnav">
            <a class="active" href="dashboard.php">Dashboard Home</a>
            <a href="additem.php">Add item</a>
            <a href="deleteitem.php">Delete Item</a>
            <a href="sortitems.php">Sort Items</a>
            <a href="listitems.php">List items</a>
            <a href="aisledisplay.php">Display Aisle</a>
            <a href="index.php">Logout</a>
           
        </div> 
      <h1>Sortation of all products by mass</h1>
        <!-- table to display all products in the system and call Javascript
        function displayProducts-->
       
        <table> 
            <tr>
                <th>Sku</th>
                <th>Product Description</th>
                <th>Mass (kg)</th>
                <th>Volume (cm/3)</th>
                <th>Density (g/m3)</th>
            </tr>
            
                <?php
         require_once 'login.php';
    $connection = new mysqli($hostname, $username, $password, $database);
    if ($connection->connect_error) die("Fatal database connection error");
  
    $query = "SELECT * FROM product WHERE Sku !='00000' ORDER BY mass DESC, volume DESC, density DESC"; 
    $result = $connection->query($query);
    
    if ($result-> num_rows >0){
        while ($row = $result-> fetch_assoc()){
             echo "<tr><td>" . $row['sku'] . 
                  "</td><td>" . $row['item'] .
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
            <h2>Sortation of all products by volume</h2>
            <table> 
            <tr>
                <th>Sku</th>
                <th>Product Description</th>
                <th>Volume (cm/3)</th>
                <th>Mass (kg)</th>
                <th>Density (g/m3)</th>
            </tr>
             <?php
         require_once 'login.php';
    $connection = new mysqli($hostname, $username, $password, $database);
    if ($connection->connect_error) die("Fatal database connection error");
  
    $query = "SELECT * FROM product WHERE Sku !='00000' ORDER BY volume DESC,mass DESC, density DESC"; 
    $result = $connection->query($query);
    
    if ($result-> num_rows >0){
        while ($row = $result-> fetch_assoc()){
             echo "<tr><td>" . $row['sku'] . 
                  "</td><td>" . $row['item'] . 
                  "</td><td>" . $row['volume'] . 
                  "</td><td>" . $row['mass'] . 
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
            <h2>Sortation of all products by density</h2>
            <table> 
            <tr>
                <th>Sku</th>
                <th>Product Description</th>
                <th>Density (g/m3)</th>
                <th>Mass (kg)</th>
                <th>Volume (cm/3)</th>
                
            </tr>
             <?php
         require_once 'login.php';
    $connection = new mysqli($hostname, $username, $password, $database);
    if ($connection->connect_error) die("Fatal database connection error");
  
    $query = "SELECT * FROM product WHERE Sku !='00000' ORDER BY density DESC, volume DESC,mass DESC"; 
    $result = $connection->query($query);
    
    if ($result-> num_rows >0){
        while ($row = $result-> fetch_assoc()){
             echo "<tr><td>" . $row['sku'] . 
                  "</td><td>" . $row['item'] . 
                  "</td><td>" . $row['density'] .
                  "</td><td>" . $row['mass'] . 
                  "</td><td>" . $row['volume'] . "</td></tr>";     
        }  
        echo "</table>";
    }
    else {
        echo "No results";
    }
     $result->close();
    $connection->close();
        ?>
  <!-- Graphical display of main menu using image buttons -->
        <h2>Dashboard Selection</h2>
        <div id="dashboard1">
            <a href="dashboard.php"><img src="images/dashboard.png" width="125" height="125" title="delete items" alt="delete item"></a>
            <a href="additem.php"><img src="images/additem.png" width="125" height="125" title="add items" alt="add item"></a>
            <a href="deleteitem.php"><img src="images/deleteitem.png" width="125" height="125" title="delete items" alt="delete item"></a>
           
	</div>
	<div id="dashboard2">
             <a href="sortitems.php"><img src="images/sortitems.png" width="125" height="125" title="sort items" alt="sort item"></a>
             <a href="aisledisplay.php"><img src="images/displayaisle.png" width="125" height="125" title="sort items" alt="sort item"></a>
            <a href="index.php"><img src="images/logout.png" width="125" height="125" title="logout" alt="add item"></a>
        </div>
        
 </body>
 </html>