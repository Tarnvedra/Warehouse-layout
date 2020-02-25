<!DOCTYPE html>

<!--
Author        : Paul Colley
Last Modified : 14/06/2019
-->

<html>
    <head>
        <meta charset="UTF-8">
        <!-- load in libraries and style sheets -->
        <link rel="stylesheet" type="text/css" href="winfix.css">
        <script src="jquery.min.js" type="text/javascript"></script>
        <script src="winfix.js"></script>
        <title>Winfix Layout Application</title>
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
        <h1>Diplay Aisle</h1>
         <!-- table to dipslay products in the system depending on aisle button clicked  and call Javascript
        function displayAisle-->
        <p>
            <button type="button">-----Aisle 1-----</button><button type="button">-----Aisle 2-----</button><button type="button">------Aisle 3-----</button>
        <p>Lorem ipsum dolor sit amet, eos duis omittam explicari te, usu an reque perpetua. </p>
        <p>Tacimates adolescens has ut, ex eum melius deleniti postulant. In ius soleat consulatu scripserit,
        <p>    eos esse bonorum dolorum id, no reque sadipscing vel. Facilisi electram definiebas usu te, ipsum</p>
        <p> oratio fierent in mel. Ad nostro veritus percipit eos, id sumo commodo accusam pro.</p>
        
        <h1>Winfix Layout Dashboard</h1>
        <!-- Graphical display of main menu using image buttons -->
        <div id="dashboard1">
            <a href="dashboard.php"><img src="images/dashboard.png" width="125" height="125" title="delete items" alt="delete item"></a>
            <a href="additem.php"><img src="images/additem.png" width="125" height="125" title="add items" alt="add item"></a>
            <a href="deleteitem.php"><img src="images/deleteitem.png" width="125" height="125" title="delete items" alt="delete item"></a>

        </div>
        <div id="dashboard2">
            <a href="sortitems.php"><img src="images/sortitems.png" width="125" height="125" title="sort items" alt="sort item"></a>
            <a href="listitems.php"><img src="images/listitems.png" width="125" height="125" title="list items" alt="list item"></a>
            <a href="index.php"><img src="images/logout.png" width="125" height="125" title="logout" alt="add item"></a>
        </div>
        <?php
        ?>
    </body>
</html>

