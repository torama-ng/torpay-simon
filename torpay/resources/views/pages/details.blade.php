@extends('layouts.app')
@section('content')
  
<div class="container alert alert-warning">
    
                <ul class="nav nav-pills nav-justified">
                  <li class="nav-item  ">
                  <a class="nav-link bg-dark " href="/trax">My transactions</a>
                  </li>
                  
                  <li class="nav-item ">
                    <a class="nav-link bg-dark " href="{{route('paynow')}} ">pay now</a>
                  </li>
                  <li class="nav-item  ">
                    <a class="nav-link bg-dark  " href="{{route('dash')}} ">Dashboard</a>
                  </li>
                  <li class="nav-item  ">
                    <a class="nav-link bg-dark " href="{{route('profile')}} ">Profile</a>
                  </li>
                  
                </ul><br>
              
              
             
              </div>
<div class="container bg-secondary">
    
  <a href="/trax ">
    <button type="button" class="btn btn-success">
         <span class="badge badge-light"> Take me back   </span>
      </button>
    </a>
     @foreach ($this_trax as $item)
         
    
      <ul class="list-group">
        <h3 class="alert alert-info text-center">Transaction</h3>
<li class="list-group-item ">Transaction id : {{$item->transaction_id}} </li>
<li class="list-group-item ">Customer id : {{$item->customer_id}} </li>
<li class="list-group-item ">Transaction amount :  ₦ {{$item->amount}} </li>
<li class="list-group-item ">Transaction Message : {{$item->message}} </li>
<li class="list-group-item ">Customer email : {{$item->customer_name}} </li>
<li class="list-group-item ">Time : {{$item->created_at}} </li>
{{-- <li class="list-group-item active">Customer id : {{$item->$customer_id}} </li> --}}
{{-- <li class="list-group-item active">Transaction amount : {{$item->$amount}} </li> --}}
{{-- <li class="list-group-item active">Transaction Memory : {{$item->$memo}} </li> --}}
{{-- <li class="list-group-item active">Customer email : {{$item->$customer_name}} </li> --}}
{{-- <li class="list-group-item active">Time : {{$item->$created_at}} </li> --}}
@endforeach

</ul>
  

     
</div>
@endsection