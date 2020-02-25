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
        <!-- form to delete a product to the system and call Javascript
        function deleteItems-->
        <h1> Delete items form </h1>
        <form id="deleteForm" method="post" action="delete.php">
            <p>
                <label>Enter Product Sku (Max 5 Chars)</label>
                <input type="text" name="sku"  maxlength="5" pattern="[A-Z0-9]{5}" title="Please enter a valid sku using only alphanumeric characters A-Z 0-9" required>
            </p>
            <p>
                <input type="submit" value="submit">
                <input type ="reset" value ="reset">
            </p
            <input type="hidden" name="testsku" id="testsku" value="0">
        </form>
        <!-- Graphical display of main menu using image buttons -->
        <h2> Winfix Dashboard Selection</h2>
        <div id="dashboard1">
            <a href="dashboard.php"><img src="images/dashboard.png" width="125" height="125" title="delete items" alt="delete item"></a>
            <a href="additem.php"><img src="images/additem.png" width="125" height="125" title="add items" alt="add item"></a>
            <a href="sortitems.php"><img src="images/sortitems.png" width="125" height="125" title="sort items" alt="sort item"></a>
        </div>
        <div id="dashboard2">
            <a href="listitems.php"><img src="images/listitems.png" width="125" height="125" title="list items" alt="list item"></a>
            <a href="aisledisplay.php"><img src="images/displayaisle.png" width="125" height="125" title="sort items" alt="sort item"></a>
            <a href="index.php"><img src="images/logout.png" width="125" height="125" title="logout" alt="add item"></a>
        </div>
        <?php
        ?>
    </body>
    <script>
        
         function testDelete() 
         {
              
       if (sku === '')
    {
    confirm("Please enter a valid SKU to delete!");
        {
        test = 0;
        }
    }
    else {
    
    

         alert(' function called testDelete');   
         }
     } 
        function confirmDelete()
{
    
    // sku = parseString(document.getElementById('sku').value);
    sku = "93361";
    test = 0;
    alert(sku);
    alert(test);
    
   
if (confirm("Are you sure you wish to delete this SKU?"))
{
    test = 1;
    
}
else {
    test = 0; 
    
}
    
    parseInt(document.getElementById('testsku').value=test);
}
 alert(document.getElementById('testsku').value);
    </script>
    
</html>
<!-- onsubmit="confirmDelete()"
onchange="testDelete()"