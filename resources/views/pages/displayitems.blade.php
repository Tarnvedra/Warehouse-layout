@extends('home')

@section('content')

@include('include/navbar')




<h1>Display Aisles</h1>
<!-- table to dipslay products in the system depending on aisle button clicked  and call Javascript
function displayAisle-->
<aisle-component></aisle-component>
<div style="background-color: white; font-size: 13px;">
    <table class="table table-bordered table-striped">
        <tr>
            <th>Location</th>
            <th>Sku</th>
            <th>Description</th>
            <th>Item Image</th>
        </tr>
        @if(count($products) >0)
        @foreach($products as $product)
        <tr>
            <td>{{ $product->location }}</td>
            <td><a href="/products/{{$product->sku}}"> {{  $product->sku }}</a></td>
            <td>{{  $product->description }}</td>

            <td><img src="{{ URL::asset('images')}}/{{ $product->image   }}" width="100" height="100"></td>
        </tr>
            @endforeach

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
