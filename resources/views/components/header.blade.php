<header>

    <nav class="navbar navbar-expand-sm navbar-light color-header ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Logo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link hover-link" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link hover-link" href="{{route('dashboard')}}">Profilo</a>
              </li>
            </ul>


            <div class="search-center ">
                <form class="d-flex" action="{{route('search')}}" method="post" >
                    @method("POST")
                    @csrf
                  <input id="phone-style" class="form-control me-2" type="search" name="city" placeholder="Inserisci città" aria-label="Search">
                  <button class="btn btn-outline-success phone-style" type="submit">Cerca</button>
                </form>
            </div>
            


            <div class="account">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Account
                        </a>
                        @auth
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('home')}}">Home</a></li>
                            <li><a class="dropdown-item" href="{{route('dashboard')}}">Profilo</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{route('logout')}}">Disconetti</a></li>
                          </ul>
                        @endauth
                        @guest
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>          
                          </ul>
                        @endguest

                      </li>
                </ul>

                @auth
                  Benvenuto
                    @if (Auth::user() -> name)
                      {{Auth::user() -> name}}
                    @else
                      {{Auth::user() -> email}}
                    @endif
                  @endauth
            </div>
            
          </div>
        </div>
      </nav>

      
      <div class="search-phone ">
        <form class="d-flex" action="{{route('search')}}" method="post" >
            @method("POST")
            @csrf
          <input id="smart-phone" class="form-control me-2" type="search" name="city" placeholder="Inserisci città" aria-label="Search">
          <button class="btn btn-outline-success smart-phone" type="submit">Cerca</button>
        </form>
      </div>
    
</header>