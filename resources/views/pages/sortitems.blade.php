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

                    <h1 class="p-2">Sortation of all products</h1>
                    <!-- table to display all products in the system-->

                    <sortation-component></sortation-component>

                </div>
        </div>
    </div>
</div>
@endsection
