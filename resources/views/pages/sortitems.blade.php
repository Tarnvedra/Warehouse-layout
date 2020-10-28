@extends('home')

@section('content')

@include('include/navbar')



<h1 class="p-2">Sortation of all products</h1>
<!-- table to display all products in the system-->

<sortation-component></sortation-component>


@include('include/dashboard')
@endsection
