@extends('layouts.front')
@section('content')

    <div class="title content">
    <?php if($_GET)
    echo  $_GET['nombre']. " tienes " .$_GET['edad']; ?>
    </div>


<br/>

@stop