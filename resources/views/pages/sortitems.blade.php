@extends('home')

@section('content')
 
@include('include/navbar')



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
    


    <h2>Sortation of all products by volume</h2>
    <table> 
    <tr>
        <th>Sku</th>
        <th>Product Description</th>
        <th>Volume (cm/3)</th>
        <th>Mass (kg)</th>
        <th>Density (g/m3)</th>
    </tr>
    
 
    <h2>Sortation of all products by density</h2>
    <table> 
    <tr>
        <th>Sku</th>
        <th>Product Description</th>
        <th>Density (g/m3)</th>
        <th>Mass (kg)</th>
        <th>Volume (cm/3)</th>
        
    </tr>
    

@endsection