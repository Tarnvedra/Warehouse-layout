@extends('layouts.app')

@section('content')
<div class="container">
     <!-- Top Menu Navigation Bar -->
        <div class="topnav">
            <a class="active" href="dashboard.php">Dashboard Home</a>
            <a href="{{url('/additem')}">Add item</a>
            <a href="deleteitem.php">Delete Item</a>
            <a href="sortitems.php">Sort Items</a>
            <a href="listitems.php">List items</a>
            <a href="aisledisplay.php">Display Aisle</a>
            <a href="index.php">Logout</a>
        </div> 
     <div class="row p-3">
        <h1>Layout Dashboard</h1>
     </div>
        <!-- Graphical display of main menu using image buttons -->
        <div class="row p-10">
            <div class="col-12 pr-2">
                <a href="additem.php"><img src="images/additem.png" width="125" height="125" title="add items" alt="add item"></a>
                <a href="deleteitem.php"><img src="images/deleteitem.png" width="125" height="125" title="delete items" alt="delete item"></a>
                <a href="sortitems.php"><img src="images/sortitems.png" width="125" height="125" title="sort items" alt="sort item"></a>
        
            </div>
        </div>
        <div class="row pr-5 p-3">
            <div class="col-12 pr-2">
            <a href="listitems.php"><img src="images/listitems.png" width="125" height="125" title="list items" alt="list item"></a>
            <a href="aisledisplay.php"><img src="images/displayaisle.png" width="125" height="125" title="logout" alt="dispay aisle"></a>
            <a href="index.php"><img src="images/logout.png" width="125" height="125" title="logout" alt="add item"></a>
         <!--  <a href="temp.php"><img src="images/blank.png" width="125" height="125" title="logout" alt="test db functions"></a> -->
        <!--  <a href="tabletest.php"><img src="images/blank.png" width="125" height="125" title="logout" alt="test table"></a> -->
        </div>
        </div>
</div>
@endsection
