@extends('layouts.main-layout')
@section('content')

@auth
<h1>
    Hello {{Auth::User() -> name}}
</h1>
<a class="btn btn-secondary" href="{{route('logout')}}">Logout</a>
@else
<h1>
    If you want to see my site you have to login/register
</h1>
    <h2>
        Registrazione 
    </h2>
    <div class="homepage">
        <div id="registrati">
            <form method="post" action="{{ route('register') }}">
            
                @method('post')
                @csrf
    
                {{-- name --}}
                <label for="name">Inserisci il nome</label>
                <input type="text" name="name" placeholder="name" value="ABC" id="">
    
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
    
                {{-- Email --}}
                <label for="email">Inserisci Email</label>
                <input type="email" name="email" placeholder="Email">
    
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
    
                {{-- Password --}}
                <label for="password">Inserisci la password</label>
                <input type="password" name="password" placeholder="Inserisci password">
    
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
    
    
                 {{-- conferma password  --}}
                 <label for="password-confirm">Conferma Password</label>
                 <input type="password" name="password_confirmation" id="">
    
                <input type="submit" value="Registrati">
            </form>
        </div>
       
        {{-- Login --}}
        <div id="login">
            <h2>
                Login
            </h2>
            <form method="POST" action="{{ route('login') }}">
            
                @method('post')
                @csrf
    
                {{-- Email --}}
                <label for="email">Inserisci Email</label>
                <input type="email" name="email" placeholder="Email">
    
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
    
                {{-- Password --}}
                <label for="password">Inserisci la password</label>
                <input type="password" name="password" placeholder="Inserisci password">
    
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
   
    
                <input type="submit" value="Accedi">
            </form>
        </div>
    </div>

    
    @endauth

    
@endsection