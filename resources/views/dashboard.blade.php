@extends('layouts.app')

<!-- Page Wrapper -->
<div id="wrapper">
@include('include/sidebar')
<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
        @include('include/topbar')
        <!-- Begin Page Content -->
            @section('content')

        </div>
    </div>
</div>

@endsection
