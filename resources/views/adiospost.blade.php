@extends('layouts.front')
@section('content')


<div class="title content ">
    <?php if($_POST)
    echo  $_POST['nombre']. " tienes " .$_POST['edad']; ?>

</div>
<br/>

@stop