    @extends('examples.layout')

    @section('title')
        Curso Laravel Cuadrado
    @stop


    @section('content')
    <h1>Curso básico de Laravel</h1>
    <p>
        @if(isset($user))
        Welcome <?= $user ?> {{$user}}
        @else
            [Login]
        @endif
    @stop