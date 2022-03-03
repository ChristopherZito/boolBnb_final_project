<header>
    <div id="main_header">

        <div class="container_header">


            {{-- logo --}}
            <div class="logo">
                <h1>
                    LOGO
                </h1>
            </div>
    
            @auth
    
            {{-- navigazione --}}
            <div class="link">
                <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
                <a class="btn btn-danger" href="{{route('home')}}">Home</a>
                <a class="btn btn-primary" href="{{route('dashboard')}}">Profilo</a>
            </div>
            
            {{-- account --}}
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

                      {{-- <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown button
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div> --}}
                    
                    
                </h6>
                
            </div>
            
            @endauth
            
            @guest
                <div class="link">
                    <a class="btn btn-primary" href="{{route('login')}}">Accedi</a>
                    <a class="btn btn-danger" href="{{route('home')}}">Home</a>
                </div>
        
                {{-- account --}}
                <div class="user">
                    <h6>
                        <div class="dropdown">
                    
                                <a class="btn btn-secondary dropdown-toggle prova-display" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Accedi o <br>
                                    Registrati
                            
                                    <div class="login-estetic">
                                        <i class="fa-solid fa-user-astronaut"></i>
                                    </div>
                                </a>
                        
                    
                    
                  
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                                <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                                <li><a class="dropdown-item" href="{{route('home')}}">Home</a></li>
                            </ul>
                        </div>

                        {{-- <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown button
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div> --}}
                
                
                    </h6>
            
                </div>
            @endguest


        </div>

        <form action="{{route('search')}}" method="post">
            @method("POST")
            @csrf
    
            <input type="text" name="city" placeholder="Inserisci città">
            <input type="submit" value="Cerca">
        </form>
        

    </div>
    
    
        @guest
        <section class="d-flex justify-content-around my-5 bg-secondary ">
            {{-- register --}}
            <div>
                <h1> Register: </h1>
                <form action="{{route('register')}}" method="POST">
                    @method("POST")
                    @csrf

                    <label for="name">Nome:</label><br>
                    <input type="text" name="name" placeholder="Nome"><br>
                    <label for="surname">Cognome</label><br>
                    <input type="text" name="surname" placeholder="Cognome"><br>
                    <label for="date_of_birth">Data di nascita</label><br>
                    <input type="date" name="date_of_birth" placeholder="Data di nascita"><br>
                    <label for="email">Email:</label><br>
                    <input type="email" name="email" placeholder="Email" ><br>
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" placeholder="Password di almeno 8 caratteri"><br>
                    <label for="password_confirmation">Conferma Password:</label><br>
                    <input type="password" name="password_confirmation" placeholder="conferma password"><br>
                    <input class="btn btn-primary m-4" type="submit" value="Register">
                </form>
            </div>
            {{-- login --}}
            <div>
                <h1> Login: </h1>
                <form action="{{route('login')}}" method="POST">
                    @method("POST")
                    @csrf

                    <label for="email">Email:</label><br>
                    <input type="email" name="email" ><br>
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" ><br>
                    <input class="btn btn-primary m-4" type="submit" value="Login">
                </form>
            </div>
        </section>
        @endguest
</header>