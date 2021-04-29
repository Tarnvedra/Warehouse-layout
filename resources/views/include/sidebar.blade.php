<?php ?>
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <li>
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon">
                <i class="fas fa-clipboard-list"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Warehouse Layout</div>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <li class="sidebar-heading">
        Products
    </li>


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true"
           aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Administration</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Administration Tasks:</h6>

                <a class="collapse-item" href="{{ route('item.add') }}"><img
                        src="{{ URL::asset('images/additem.png') }}" width="45" height="45" alt="add item">Add Item</a>

                <a class="collapse-item" href="{{ route('item.delete') }}"><img
                        src="{{ URL::asset('images//deleteitem.png') }}" width="45" height="45">Delete Item</a>
                <a class="collapse-item" href="{{ route('items.sort') }}"><img
                        src="{{ URL::asset('images/sortitems.png') }}" width="45" height="45">Sort Items</a>


            </div>
        </div>
    </li>

    <!-- Heading -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Items</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Item Tasks</h6>
                <a class="collapse-item" href=""><img src="{{ URL::asset('images/listitems.png') }}" width="45"
                                                      height="45">List Items</a>

                <a class="collapse-item" href="{{ route('items.display') }}"><img
                        src="{{ URL::asset('images/displayaisle.png') }}" width="45" height="45">Display Aisle</a>


            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="sidebar-heading">
        User Tasks
    </li>


    <li class="nav-item">
        <a class="nav-link" href=""
           onclick="event.preventDefault();
                  document.getElementById('side-logout-form').submit();">
            <i class="fas fa-fw fa-times-circle"></i>
            <span>Logout</span></a>
        <form id="side-logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <li class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </li>
</ul>
<!-- Sidebar Toggler (Sidebar) -->
<!-- End of Sidebar -->
