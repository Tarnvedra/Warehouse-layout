<?php /** @var $user \App\User */ ?>

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>



    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            @auth
                <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard <span class="sr-only">(current)</span></a>
            @endauth
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('item.add') }}">Add item</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('item.delete') }}">Delete items</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('items.sort') }}">Sort items</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="">List items</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('items.display') }}">Display Aisle</a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        @auth
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <strong> Current User: </strong> {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
    </ul>
    @endauth


</nav>
