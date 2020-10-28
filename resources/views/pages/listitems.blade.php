@extends('home')

@section('content')

@include('include/navbar')
<h2>List of all products</h2>
<!-- table to display all products in the system -->

<div style="background-color: white;">
<table class="table table-bordered table-striped">
    <tr>
        <th>No.</th>
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
        <td>{{ $product->id }}</td>
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

@include('include/dashboard')
@endsection
