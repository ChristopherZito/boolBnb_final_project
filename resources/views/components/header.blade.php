<header>
    @auth
        Benvenuto
        <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
    @endauth
        @guest
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
        @endguest
</header>