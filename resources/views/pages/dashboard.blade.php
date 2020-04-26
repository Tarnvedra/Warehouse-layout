@extends('home')

@section('content')
 
@include('include/navbar')
<div class="container">

<div id="dashboard">
    <h2 id="dashtitle">Layout Dashboard Selection</h2>
    <div class="row pt-3 pr-2">
    <a href="/products/add"><img src="images/additem.png" width="125" height="125" title="add items" alt="add item"></a>
    <a href="/products/delete"><img src="images/deleteitem.png" width="125" height="125" title="delete items" alt="delete item"></a>
    <a href="/products/sortitems"><img src="images/sortitems.png" width="125" height="125" title="sort items" alt="sort item"></a>
    </div>
<div class="row pt-1 pr-2">
    <a href="/products"><img src="images/listitems.png" width="125" height="125" title="list items" alt="list item"></a>
    <a href="/products/display"><img src="images/displayaisle.png" width="125" height="125" title="display aisles" alt="display aisles"></a>
    <a href="/dashboard"><img src="images/dashboard.png" width="125" height="125" title="add items" alt="dashboard"></a>
</div>
</div>
@endsection