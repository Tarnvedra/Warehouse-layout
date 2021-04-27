@extends('layouts.app')

<div id="wrapper">
@include('include/sidebar')
<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
        @include('include/topbar')
        <!-- Begin Page Content -->
            @section('content')
                <div class="pl-5">
                    <h2>List of all products</h2>
                    <!-- table to display all products in the system -->

                    <div style="background-color: white;">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>#</th>
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
                                    <td> No Products Found</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
