@extends('layouts.app')
@section('content')
  
<div class="container ">
    
    <div class="jumbotron">
        <h3 class=" text-center text-dark">Congratulations {{$sub_name}} !</h3> 
       
      </div>
        <h5 class="text-center text-dark"> Thank you for your subscription, <br>
            email notification that will guild your service and transactions has be sent to you.</h5>

  <ul class="nav nav-pills nav-justified">
 
    <li class="nav-item  ">
      <a class="nav-link bg-dark " href="/dash"> </a>
    </li>
   
    
  </ul><br>
</div>

@endsection