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
                <a class="nav-link hover-link" href="{{route('dashboard')}}">Profile</a>
              </li>
            </ul>


            <div class="search-center ">
                <form class="d-flex" action="{{route('search')}}" method="post" >
                    @method("POST")
                    @csrf
                  <input class="form-control me-2" type="search" name="city" placeholder="Inserisci città" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Cerca</button>
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
                            <li><a class="dropdown-item" href="{{route('dashboard')}}">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                          </ul>
                        @endauth
                        @guest
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                            <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
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
    






    {{-- <div id="main_header">

        <div class="container_header">


            
    
            <form action="{{route('search')}}" method="post">
                @method("POST")
                @csrf
        
                <input type="text" name="city" placeholder="Inserisci città">
                <input type="submit" value="Cerca">
            </form>


            
            <div class="logo">
                <h1>
                    LOGO
                </h1>
            </div>
    
            @auth
            
            <div class="user">
                <h6>
                    <div class="dropdown">
                        
                            <a class="btn btn-secondary dropdown-toggle prova-display" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Benvenuto <br>
                                @if (Auth::user() -> name)
                                    {{Auth::user() -> name}}
                                @else
                                    {{Auth::user() -> email}}
                                @endif
                                
                                <div class="login-estetic">
                                    <i class="fa-solid fa-user-astronaut"></i>
                                </div>
                            </a>
                            
                        
                        
                      
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                          <li><a class="dropdown-item" href="{{route('home')}}">Home</a></li>
                          <li><a class="dropdown-item" href="{{route('dashboard')}}">Profilo</a></li>
                        </ul>
                      </div>  
                    
                </h6>
                
            </div>
            
            @endauth
            
            @guest
        
                
                <div class="user">
                    <h6>
                        <div class="dropdown">
                    
                                <a class="btn btn-secondary dropdown-toggle prova-display" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Accedi o <br>
                                    Registrati
                                </a>
                        
                    
                    
                  
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{route('loginForm')}}">Accedi</a></li>
                                <li><a class="dropdown-item" href="{{route('registerForm')}}">Registrati</a></li>
                                
                            </ul>
                        </div>

                
                    </h6>
            
                </div>
            @endguest


        </div>
     

    </div> --}}
    
    
        
</header>