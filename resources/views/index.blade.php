@extends('home')

@section('content')


<div class="jumbotron bg-light">
    <h1 class="index pb-2">Welcome To the Warehouse Layout Application</h1>
    <p class="index">Abstract
        Stock Management and its efficient movement is one of the biggest challenges facing a distribution warehouse. Bottlenecks in this process cost the business time and money.</p>
     <p class="index">    A small section of a warehouse has been investigated, in particular the picking department to try to improve on the current process and to maximise efficiency using an
          Information Technology solution.</p> <p class="index"> The technology in question is a web application that uses intelligent space planning to ascertain a products optimal location to assist in streamlining the picking process.
        <br>
        <p class="index">
        <strong>Coding Objective</strong><br>
       <p class="index"> Web Application development written in PHP/Laravel (Origin branch PHP/HTML5) for efficient product selection, using web app for efficient placement of stock using layout planning <br>with volumetrics (calculations using Mass , Volume and Density)
        
     <br>   Origin branch has been deprecated converting code to Laravel MVC for master branch</p>
    <p><a class="btn btn-primary btn-lg" href="/login" role="button">Proceed to Login Page</a> <a class="btn btn-success btn-lg" href="/register" role="button">Proceed to Regististration page</a></p>

</div>

@endsection