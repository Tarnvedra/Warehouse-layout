<!DOCTYPE html>
<!--
Author        : Paul Colley
Last Modified : 14/06/2019
-->
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
        <h1> Add items form </h1>
        <!-- form to input a new product to the system and call Javascript
        function additems-->

        <form id="itemForm"  method="post" action="add.php" onsubmit="calculateVolDensity()" >
            <table id="additem">
                <tbody>
                    <tr class="frow">
                        <td class="label">
                            <label for="sku">Enter Product SKU (5 Chars)</label>
                        </td>
                        <td class="field">
                            <input type="text" name="sku" pattern="[A-Z0-9]{5}" title="Please enter a valid sku using only alphanumeric characters A-Z 0-9" maxlength="5" required>
                        </td>
                    </tr>

                    <tr class="frow">
                        <td class="label">
                            <label for="item">Enter Product description (Max 60 Chars)</label>
                        </td>
                        <td class="field">
                            <input style="height:100px;font-size:12pt;" type="text" name="item"  maxlength="60"><br>
                        </td>
                    </tr>   
                    
                    <tr class="frow">
                        <td class="label">
                            <label for="width">Enter Width in Centimetres (cm)</label>
                        </td>
                        <td class="field">
                    <input type="number" name="width" id="width" step="any" onblur="checkWidth(width)">
                        </td>
                    </tr>   
                    
                    <tr class="frow">
                        <td class="label">
                            <label for="length">Enter Length in Centimetres (cm)</label>
                        </td>
                        <td class="field">
                            <input type="number" name="length" id="length" step="any" onblur="checkLength(length)">
                        </td>
                    </tr>

                    

                <tr class="frow">
                     <td class="label">
                <label for="height">Enter Height in Centimetres (cm)</label>
                     </td>
                     <td class="field">
                <input type="number" name="height" id="height" step="any" onblur="checkHeight(height)">
                     </td>
                </tr>   

                <tr class="frow">
                     <td class="label">
                <label for="mass">Enter Mass in Kilogram (Kg): </label>
                     </td>
                     <td class="field">
                <input type="number" name="mass" id="mass" step="any" onblur="checkMass(mass)">
                </td>
                </tr> 
                
                    <tr class="frow">
                     <td class="label">
                <input type="submit" value="submit">
                
                <input type ="reset" value ="reset">
                     </td>
                </tr>   
               
                </tbody>
            </table>
            <input type="hidden" name="volume" id="volume" value="" >
            <input type="hidden" name="density" id="density" value="" >
           <!-- <input type="hidden" name="size" id="size" value=""> -->
        </form>
                 
                
        <!-- Graphical display of main menu using image buttons -->
        <h2> Winfix Dashboard Selection</h2>
        <div id="dashboard1">
            <a href="dashboard.php"><img src="images/dashboard.png" width="125" height="125" title="delete items" alt="delete item"></a>
            <a href="deleteitem.php"><img src="images/deleteitem.png" width="125" height="125" title="delete items" alt="delete item"></a>
            <a href="sortitems.php"><img src="images/sortitems.png" width="125" height="125" title="sort items" alt="sort item"></a>
        </div>
        <div id="dashboard2">
            <a href="listitems.php"><img src="images/listitems.png" width="125" height="125" title="list items" alt="list item"></a>
            <a href="aisledisplay.php"><img src="images/displayaisle.png" width="125" height="125" title="sort items" alt="sort item"></a>
            <a href="index.php"><img src="images/logout.png" width="125" height="125" title="logout" alt="add item"></a>
        </div>
<?php
            require_once 'db.php';
            $sku = filter_input(INPUT_POST, 'sku');

            $valid = false;
            $skuquery = "SELECT sku FROM Product";
            $result = $connection->query($skuquery);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if ($result === $sku) {
                        echo '<script language="javascript">';
                        echo 'alert("SKU already exists in database! ")';
                        echo '</script>';
                        $valid = false;
                        break;
                    }
                }
            } else {

                $valid = true;
            }


            $item = filter_input(INPUT_POST, 'item');
            $width = filter_input(INPUT_POST, 'width');
            $length = filter_input(INPUT_POST, 'length');
            $height = filter_input(INPUT_POST, 'height');
            $mass = filter_input(INPUT_POST, 'mass');

            $volume = filter_input(INPUT_POST, 'volume');
            $density = filter_input(INPUT_POST, 'density');
            $size = filter_input(INPUT_POST, 'size');
   
            $query = "INSERT INTO product (sku, item, width, length, height, mass, volume, density, size)
        values ('$sku','$item','$width','$length','$height','$mass','$volume','$density','$size')";
            if ($valid === true) {
                if ($connection->query($query)) {
                    echo '<script language="javascript">';
                    echo 'alert("SKU added to database! ")';
                    echo '</script>';
                } else {
                    echo "Error: XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX" . $query . "<br>" . $connection->error;
                }
            }
            $result->close();
            $connection->close();
            ?>
    </body>
</html>
