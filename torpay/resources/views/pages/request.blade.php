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
        {{-- @if ($gtpay_tranx_status_code != '00')
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
        @endif --}}
         @switch($gtpay_tranx_status_code)
             @case('00')
             <div class="jumbotron text-center alert alert-success">
             <ul class="list-group">
               <h1 class="alert alert-success text-center"> Transaction successful</h1>
               <p>Your insurance certificate has been sent to your mail</p>
                <h3 class="bg-success text-center ">{{$gtpay_tranx_status_msg}}</h3>
                <li class="list-group-item  "> <h1 class="text-center alert alert-info">  ₦ {{$gtpay_tranx_amt}}</h1>  </li>
               {{-- <li class="list-group-item ">Transaction status code : {{$gtpay_tranx_status_code}} </li> --}}
               <li class="list-group-item"> Customer id : {{$gtpay_cust_id}} </li>
               <li class="list-group-item"> Customer name : {{$gtpay_echo_data}} </li>
               <li class="list-group-item">  Transaction id : {{$gtpay_tranx_id}} </li>
             </ul>
            </div>
                 @break
             @case('G103')
             <div class="jumbotron text-center bg-danger ">
                <ul class="list-group">
                  <h1 class=" text-center"> Invalid Transaction Amount</h1>
                   <li class="list-group-item  ">
                      <h1 class="text-center ">  ₦ {{$gtpay_tranx_amt}}</h1>  </li>
                  {{-- <li class="list-group-item ">Transaction status code : {{$gtpay_tranx_status_code}} </li> --}}
                  <li class="list-group-item"> Reason : {{$gtpay_tranx_status_msg}} </li>
                  <li class="list-group-item"> Customer id : {{$gtpay_cust_id}} </li>
                  <li class="list-group-item"> Customer name : {{$gtpay_echo_data}} </li>
                  <li class="list-group-item">  Transaction id : {{$gtpay_tranx_id}} </li>
                </ul>
               </div>
                 @break
                 @case('Z1')
                 <div class="jumbotron text-center bg-danger ">
                    <ul class="list-group">
                      <h1 class=" text-center"> failed</h1>
                       <li class="list-group-item  ">
                          <h1 class="text-center ">  ₦ {{$gtpay_tranx_amt}}</h1>  </li>
                      {{-- <li class="list-group-item ">Transaction status code : {{$gtpay_tranx_status_code}} </li> --}}
                      <li class="list-group-item"> Reason : {{$gtpay_tranx_status_msg}} </li>
                      <li class="list-group-item"> Customer id : {{$gtpay_cust_id}} </li>
                      <li class="list-group-item"> Customer name : {{$gtpay_echo_data}} </li>
                      <li class="list-group-item">  Transaction id : {{$gtpay_tranx_id}} </li>
                    </ul>
                   </div>
                     @break
                     @case('51')
                     <div class="jumbotron text-center bg-danger ">
                        <ul class="list-group">
                          <h1 class=" text-center"> Insuficient balance</h1>
                           <li class="list-group-item  ">
                              <h1 class="text-center ">  ₦ {{$gtpay_tranx_amt}}</h1>  </li>
                          {{-- <li class="list-group-item ">Transaction status code : {{$gtpay_tranx_status_code}} </li> --}}
                          <li class="list-group-item"> Reason : {{$gtpay_tranx_status_msg}} </li>
                          <li class="list-group-item"> Customer id : {{$gtpay_cust_id}} </li>
                          <li class="list-group-item"> Customer name : {{$gtpay_echo_data}} </li>
                          <li class="list-group-item">  Transaction id : {{$gtpay_tranx_id}} </li>
                        </ul>
                       </div>
                         @break
                     @case('56')
                     <div class="jumbotron text-center bg-danger ">
                        <ul class="list-group">
                          <h1 class=" text-center"> Invalid card number</h1>
                           <li class="list-group-item  ">
                              <h1 class="text-center ">  ₦ {{$gtpay_tranx_amt}}</h1>  </li>
                          {{-- <li class="list-group-item ">Transaction status code : {{$gtpay_tranx_status_code}} </li> --}}
                          <li class="list-group-item"> Reason : {{$gtpay_tranx_status_msg}} </li>
                          <li class="list-group-item"> Customer id : {{$gtpay_cust_id}} </li>
                          <li class="list-group-item"> Customer name : {{$gtpay_echo_data}} </li>
                          <li class="list-group-item">  Transaction id : {{$gtpay_tranx_id}} </li>
                        </ul>
                       </div>
                         @break
                     @case('61')
                     <div class="jumbotron text-center bg-danger ">
                        <ul class="list-group">
                          <h1 class=" text-center"> Withdrawal limit error</h1>
                           <li class="list-group-item  ">
                              <h1 class="text-center ">  ₦ {{$gtpay_tranx_amt}}</h1>  </li>
                          {{-- <li class="list-group-item ">Transaction status code : {{$gtpay_tranx_status_code}} </li> --}}
                          <li class="list-group-item"> Reason : {{$gtpay_tranx_status_msg}} </li>
                          <li class="list-group-item"> Customer id : {{$gtpay_cust_id}} </li>
                          <li class="list-group-item"> Customer name : {{$gtpay_echo_data}} </li>
                          <li class="list-group-item">  Transaction id : {{$gtpay_tranx_id}} </li>
                        </ul>
                       </div>
                         @break
                     @case('55')
                     <div class="jumbotron text-center bg-danger ">
                        <ul class="list-group">
                          <h1 class=" text-center"> Failed</h1>
                           <li class="list-group-item  ">
                              <h1 class="text-center ">  ₦ {{$gtpay_tranx_amt}}</h1>  </li>
                          {{-- <li class="list-group-item ">Transaction status code : {{$gtpay_tranx_status_code}} </li> --}}
                          <li class="list-group-item"> Reason : {{$gtpay_tranx_status_msg}} </li>
                          <li class="list-group-item"> Customer id : {{$gtpay_cust_id}} </li>
                          <li class="list-group-item"> Customer name : {{$gtpay_echo_data}} </li>
                          <li class="list-group-item">  Transaction id : {{$gtpay_tranx_id}} </li>
                        </ul>
                       </div>
                         @break
                     @case('G300')
                     <div class="jumbotron text-center bg-danger ">
                        <ul class="list-group">
                          <h1 class=" text-center"> transaction cancelled by user</h1>
                           <li class="list-group-item  ">
                              <h1 class="text-center ">  ₦ {{$gtpay_tranx_amt}}</h1>  </li>
                          {{-- <li class="list-group-item ">Transaction status code : {{$gtpay_tranx_status_code}} </li> --}}
                          <li class="list-group-item"> Reason : {{$gtpay_tranx_status_msg}} </li>
                          <li class="list-group-item"> Customer id : {{$gtpay_cust_id}} </li>
                          <li class="list-group-item"> Customer name : {{$gtpay_echo_data}} </li>
                          <li class="list-group-item">  Transaction id : {{$gtpay_tranx_id}} </li>
                        </ul>
                       </div>
                         @break
                     @case('G301')
                     <div class="jumbotron text-center bg-danger ">
                        <ul class="list-group">
                          <h1 class=" text-center"> Invalid Amount in transaction</h1>
                           <li class="list-group-item  ">
                              <h1 class="text-center ">  ₦ {{$gtpay_tranx_amt}}</h1>  </li>
                          {{-- <li class="list-group-item ">Transaction status code : {{$gtpay_tranx_status_code}} </li> --}}
                          <li class="list-group-item"> Reason : {{$gtpay_tranx_status_msg}} </li>
                          <li class="list-group-item"> Customer id : {{$gtpay_cust_id}} </li>
                          <li class="list-group-item"> Customer name : {{$gtpay_echo_data}} </li>
                          <li class="list-group-item">  Transaction id : {{$gtpay_tranx_id}} </li>
                        </ul>
                       </div>
                         @break

             @default
             <div class="jumbotron text-center bg-danger ">
                <ul class="list-group">
                  <h1 class=" text-center"> Failed</h1>
                   <li class="list-group-item  ">
                      <h1 class="text-center ">  ₦ {{$gtpay_tranx_amt}}</h1>  </li>
                  {{-- <li class="list-group-item ">Transaction status code : {{$gtpay_tranx_status_code}} </li> --}}
                  <li class="list-group-item"> Reason : {{$gtpay_tranx_status_msg}} </li>
                  <li class="list-group-item"> Customer id : {{$gtpay_cust_id}} </li>
                  <li class="list-group-item"> Customer name : {{$gtpay_echo_data}} </li>
                  <li class="list-group-item">  Transaction id : {{$gtpay_tranx_id}} </li>
                </ul>
               </div>
         @endswitch

    
</div>
@endsection