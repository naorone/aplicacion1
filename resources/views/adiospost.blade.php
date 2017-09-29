@extends('layouts.front')
@section('content')


<div class="title content ">
    <?php if($_POST)
    echo  $_POST['nombre']. " tienes " .$_POST['edad']; ?>

</div>
<br/>
    <p>Datos insertados correctamente en la base de datos</p>
<br/>
@stop