@extends('layouts.front')
@section('content')

        <div class="title m-b-md">
            Pedro Rodriguez
        </div>
    @if(! $errors -> isEmpty())
        <div class="alert">
            <p>ERROR al insertar los datos</p>
            <ul>
                @foreach($errors -> all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

            <form action="./adios" method="GET" name="formulario">
                Introduce tu nombre: <input name="nombre" type="text" value="pedro" />
                Introduce tu edad: <input name="edad" type="number" value=25 />
                <input type="submit" value="Enviar por GET"  />
            </form><br/>

            <form action="./adiospost" method="POST" name="formulario">
                {{ csrf_field() }}
                Introduce tu nombre: <input name="nombre" type="text" value="pedro"/>
                Introduce tu edad: <input name="edad" type="number" value=25 />
                <input type="submit" value="Enviar por POST"  />
            </form><br/>



@stop