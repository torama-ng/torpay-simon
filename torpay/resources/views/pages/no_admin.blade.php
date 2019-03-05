@extends('layouts.app')
@section('content')
    <div class="bg-dark">

    
<div class="jumbotron text-center alert alert-danger">
        <h1>You dont have the permission to view this page !</h1> 
        <h5 class=" text-dark text-center"><a href="{{route('dash')}} ">Return to your dashboard</a> </h5>
      </div>
     <hr> <hr> <hr><hr>
    </div>
@endsection