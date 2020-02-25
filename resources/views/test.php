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
         <h1> test form for calculation </h1>
         <form id="calcForm"  method="" action="" onsubmit="calVolDen()">
               <label for="width">Enter Width in Centimetres (cm)</label>
               <input type="number" name="width" id="width" min=0></br>
               <label for="length">Enter Length in Centimetres (cm)</label>
               <input type="number" name="length" id="length" min=0></br>
               <label for="height">Enter Height in Centimetres (cm)</label>
               <input type="number" name="height" id="height" min=0></br>
                <label for="mass">Enter Mass in Kilogram (Kg): </label>
                <input type="number" name="mass" id="mass" min=0 step="0.001"</br>
               
               <input type="submit" value="submit">
               <input type ="reset" value ="reset">

         </form>
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
<script>
    function calVolDen () {
    var width = document.getElementById('width').value;
    var length = document.getElementById('length').value;
    var height = document.getElementById('height').value;
    var mass = document.getElementById('mass').value;
    
    
    /* calculate volume */
    result = width * length * height;
    result = result.toFixed(6);
    alert('result ='+result);
    var volume = parseFloat(result);
    alert('value of volume: ='+ volume);
    
     /* calculate density */
    result1 = mass / volume;
    result1 = result1.toFixed(6);
    alert('result1 ='+result1);
    var density = parseFloat(result1);
    alert('value of density: ='+ density);
    }
</script>
</html>

<?php

?>

