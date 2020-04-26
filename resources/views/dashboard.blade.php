@extends('home')

@section('content')
 
@include('include/navbar')
<div class="container">

<div id="dashboard">
    <h2 id="dashtitle">Layout Dashboard Selection</h2>
    <div class="row pt-3 pr-2">
    <a href="/additem"><img src="{{ URL::asset('images/additem.png') }}" width="125" height="125" title="add items" alt="add item"></a>
    <a href="/delitem"><img src="{{ URL::asset('images/deleteitem.png') }}" width="125" height="125" title="delete items" alt="delete item"></a>
    <a href="/sortitems"><img src="{{ URL::asset('images/sortitems.png') }}" width="125" height="125" title="sort items" alt="sort item"></a>
    </div>
<div class="row pt-1 pr-2">
    <a href="/listitems"><img src="{{ URL::asset('images/listitems.png') }}" width="125" height="125" title="list items" alt="list item"></a>
    <a href="/displayitems"><img src="{{ URL::asset('images/displayaisle.png') }}" width="125" height="125" title="display aisles" alt="display aisles"></a>
    <a href="/dashboard"><img src="{{ URL::asset('images/dashboard.png') }}" width="125" height="125" title="add items" alt="dashboard"></a>
</div>
</div>
@endsection