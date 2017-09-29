@extends('layouts.front')
@section('content')

        <div class="title m-b-md">
            Pedro Rodriguez
        </div>
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