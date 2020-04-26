<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
  <h3>Layout Application</h3>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav m-auto">
        <li class="nav-item active">
          @auth
          <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard <span class="sr-only">(current)</span></a>
        @endauth
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/products/add">Add item</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/products/delete">Delete items</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/products/edit">Edit item</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/sortitems">Sort items</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/products">List items</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/displayitems">Display Aisle</a>
        </li>
      </ul>
      </div>

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