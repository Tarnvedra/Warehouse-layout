@extends('home')

@section('content')

@include('include/navbar')




<h1>Display Aisles</h1>
<!-- table to dipslay products in the system depending on aisle button clicked  and call Javascript
function displayAisle-->
<p>
   <button type="button">-Aisle 1-</button><button type="button">-Aisle 2-</button><button type="button">-Aisle 3-</button><button type="button">-Aisle 4-</button><button type="button">-Aisle 5-</button><button type="button">-Aisle 6-</button> <button type="button">-Aisle 7-</button><button type="button">-Aisle 8-</button><button type="button">-Aisle 9-</button><button type="button">-Aisle 10-</button>
   <button type="button">-Aisle 11-</button><button type="button">-Aisle 12-</button><button type="button">-Aisle 13-</button><button type="button">-Aisle 14-</button><button type="button">-Aisle 15-</button><button type="button">-Aisle 16-</button><button type="button">-Aisle 17-</button><button type="button">-Aisle 18-</button><button type="button">-Aisle 19-</button><button type="button">-Aisle 20-</button>
</p>
<div style="background-color: white; font-size: 13px;">
    <table class="table table-bordered table-striped">
        <tr>
            <th>Location</th>
            <th>Sku</th>
            <th>Description</th>
            <th>Width(cm)</th>
            <th>Length(cm)</th>
            <th>Height(cm)</th>
            <th>Mass(kg)</th>
            <th>Image</th>
        </tr>
        @if(count($products) >0)
        @foreach($products as $product)
        <tr>
            <td>A-1-L1-A</td>
            <td><a href="/products/{{$product->sku}}"> {{  $product->sku }}</a></td>
            <td>{{  $product->description }}</td>
            <td>{{  $product->width }}</td>
            <td>{{  $product->length }}</td>
            <td>{{  $product->height }}</td>
            <td>{{  $product->mass }}</td>
            <td><img src="{{ asset('images')}}/{{ $product->image   }}" width="50" height="50"></td>
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
