@extends('layouts.app')
@section('content')
  
<div class="container alert alert-warning">
    
  <ul class="nav nav-pills nav-justified">
    <li class="nav-item  ">
      <a class="nav-link bg-dark" href="/trax ">My transactions</a>
    </li>
    
    <li class="nav-item ">
      <a class="nav-link bg-dark " href="{{route('paynow')}} ">pay now</a>
    </li>
    <li class="nav-item  ">
      <a class="nav-link bg-dark " href="{{route('dash')}} ">Dashboard</a>
    </li>
    <li class="nav-item  ">
      <a class="nav-link bg-dark " href="{{route('profile')}} ">Profile</a>
    </li>
    
  </ul><br>
</div>
<div class="container">
        @if ($gtpay_tranx_status_code != '00')
        <ul class="list-group">
                 <h3 class="bg-danger text-center text-white">{{$gtpay_tranx_status_msg}}</h3>
                 <li class="list-group-item  "> <h1 class="text-center alert alert-info">  ₦ {{$gtpay_tranx_amt}}</h1>  </li>
                <li class="list-group-item ">Transaction status code : {{$gtpay_tranx_status_code}} </li>
                <li class="list-group-item"> Customer id : {{$gtpay_cust_id}} </li>
                <li class="list-group-item"> Customer name : {{$gtpay_echo_data}} </li>
                <li class="list-group-item">  Transaction id : {{$gtpay_tranx_id}} </li>
              </ul>
        @else
        <ul class="list-group">
            <h3 class="bg-success text-center text-white">{{$gtpay_tranx_status_msg}}</h3>
            <li class="list-group-item  "> <h1 class="text-center alert alert-info">  ₦ {{$gtpay_tranx_amt}}</h1>  </li>
           <li class="list-group-item ">Transaction status code : {{$gtpay_tranx_status_code}} </li>
           <li class="list-group-item"> Customer id : {{$gtpay_cust_id}} </li>
           <li class="list-group-item"> Customer name : {{$gtpay_echo_data}} </li>
           <li class="list-group-item">  Transaction id : {{$gtpay_tranx_id}} </li>
         </ul>
        @endif


    
</div>
@endsection