@extends('home')

@section('content')

@include('include/navbar')
<h1 class="pt-1">Product</h1>
<div class="row">
<div class="col-md-8">
<table class="table table-bordered table-striped" style="background-color:white;">

<tr>
    <th><b>Category</b></th>
    <th><b>Value</b></th>
<tr>
    <td><strong>SKU</strong> </td>
    <td> {{$product->sku }}</td>
</tr>

<tr>
    <td><strong>Description</strong> </td>
    <td> {{$product->description }}</td>
</tr>

<tr>
    <td><strong>Height</strong> </td>
    <td> {{$product->height }}</td>
</tr>

<tr>
    <td><strong>Width</strong> </td>
    <td> {{$product->width }}</td>
</tr>
<tr>
    <td><strong>Length</strong> </td>
    <td> {{$product->length }}</td>
</tr>
<tr>
    <td><strong>Mass</strong></td>
    <td> {{$product->mass }}</td>
</tr>


    <tr>
    <td><strong>Volume</strong></td>
     <td> {{$product->volume}}</td>
    </tr>
        <tr>
            <td><strong>Density</strong></td>
             <td> {{$product->density}}</td>
        </tr>

<!--    <tr>
        <td><strong>Size</strong></td>
        <td> {{$product->size}}</td>
    </tr>

            <tr>
                <td><strong>Created at</strong></td>
                <td> {{$product->created_at}}</td>
            </tr>

</tr>
<td><strong>Image File</strong></td>
<td> {{$product->image}}</td>
</tr> -->

</table>
<div class="col-md-6 pb-1">
    <img src="/storage/uploads/{{$product->image}}" width="200" height="200" title="product" alt="image not available">
   </div>
   </div>
   </div>
<div class="row">
    <div class="col-sm-1">
<a href="/products" class="btn btn-primary">Back</a>
    </div>
<div class="col-sm-1">
<a href="/products/{{$product->sku}}/edit" class="btn btn-info">Edit</a>
</div>
<div class="col-sm-1">
    <a class="btn btn-danger" href="/product/{{ $product->sku }}/destroy"   onclick="event.preventDefault();
        document.getElementById('delete-sku').submit();">
            {{ __('Delete') }}</a>


        <form id="delete-sku" action="/product/{{ $product->sku }}/destroy" method="POST">
            @csrf
            @method('DELETE')
        </form>

</div>
</div>

@endsection
