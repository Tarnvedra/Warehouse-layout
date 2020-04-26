@extends('home')

@section('content')
 
@include('include/navbar')




<h1>Diplay Aisle</h1>
<!-- table to dipslay products in the system depending on aisle button clicked  and call Javascript
function displayAisle-->
<p>
   <button type="button">-----Aisle 1-----</button><button type="button">-----Aisle 2-----</button><button type="button">------Aisle 3-----</button>
<p>Lorem ipsum dolor sit amet, eos duis omittam explicari te, usu an reque perpetua. </p>
<p>Tacimates adolescens has ut, ex eum melius deleniti postulant. In ius soleat consulatu scripserit,
<p>    eos esse bonorum dolorum id, no reque sadipscing vel. Facilisi electram definiebas usu te, ipsum</p>
<p> oratio fierent in mel. Ad nostro veritus percipit eos, id sumo commodo accusam pro.</p>

<table class="table table-striped"> 
   <tr>
       <th>Location</th>
       <th>Sku</th>
       <th>Description</th>
       <th>Iamge</th>
   </tr>
   @if(count($products > 0))
   @foreach($products as $product)
       <td>{{  $->sku }}</td>
       <td>{{  $product->description }}</td>
       <td>{{  $product->width }}</td>
       <td>{{  $product->length }}</td>
       <td>{{  $product->height }}</td>
       <td>{{  $product->mass }}</td>
       <td>{{  $product->volume }}</td>
       <td>{{  $product->density }}</td>
   @endforeach
   @else 
   <tr>
   </td> No Products Found </td>
   </tr>
   @endif
</table>

<hr>    
@include('include/dashboard')
@endsection