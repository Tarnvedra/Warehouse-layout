@extends('home')

@section('content')
 
@include('include/navbar')




<h1>Diplay Aisle</h1>
<!-- table to dipslay products in the system depending on aisle button clicked  and call Javascript
function displayAisle-->
<p>
   <button type="button">-----Aisle 1-----</button><button type="button">-----Aisle 2-----</button><button type="button">------Aisle 3-----</button>

<div style="background-color: white;">
    <table class="table table-bordered table-striped"> 
        <tr>
            <th>Sku</th>
            <th>Description</th>
            <th>Width(cm)</th>
            <th>Length(cm)</th>
            <th>Height(cm)</th>
            <th>Mass(kg)</th>
        </tr>
        @if(count($products) >0)
        @foreach($products as $product)
        <tr>
            <td><a href="/products/{{$product->sku}}"> {{  $product->sku }}</a></td>
            <td>{{  $product->description }}</td>
            <td>{{  $product->width }}</td>
            <td>{{  $product->length }}</td>
            <td>{{  $product->height }}</td>
            <td>{{  $product->mass }}</td>
        </tr>
            @endforeach
            {{$products->links()}}
        @else 
        <tr>
        </td> No Products Found </td>
        </tr>
        @endif
    </table>
    </div> 

    <hr>
    @include('include/dashboard')
@endsection