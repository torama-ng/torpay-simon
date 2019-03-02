@extends('layouts.app')

@section('content')

<div class="container alert alert-warning">
    
  <ul class="nav nav-pills nav-justified">
    <li class="nav-item  ">
      <a class="nav-link bg-dark" href="/trax">My transactions</a>
    </li>
    
    <li class="nav-item ">
      <a class="nav-link bg-dark " href="/paynow">pay now</a>
    </li>
    <li class="nav-item  ">
      <a class="nav-link bg-dark " href="/dash">Dashboard</a>
    </li>
    <li class="nav-item  ">
      <a class="nav-link bg-dark " href="/profile">Profile</a>
    </li>
    
  </ul><br>
</div>

<div class="container">

  <a href="/trax">
    <button type="button" class="btn btn-success">
      Successful  <span class="badge badge-light">     {{$total}}</span>
      </button>
    </a>
    <a href="/all_transactions">
    <button type="button" class="btn btn-warning">
        Sent <span class="badge badge-light">     {{$count_all_tranx}}</span>
      </button>
    </a>

@if (count($my_trax) > 0)
    @foreach ($my_trax as $item)
  
    {{-- <div class="container bg-secondary" >
        <h2 class="text-white" >Transaction Details</h2>
       
        <div class="card">
          <div class="card-body">Transaction id:  {{$item->transaction_id}} </div>
        </div>
         <div class="card">
          <div class="card-body">Amount : #{{$item->amount}}</div>
        </div>
         <div class="card">
          <div class="card-body">Customer id :  {{$item->customer_id}} </div>
        </div>
         <div class="card">
          <div class="card-body">Status Message : {{$item->message}}</div>
        </div>
         <div class="card">
          <div class="card-body">Status Code:  {{$item->status_code}}</div>
        </div>
         <div class="card">
          <div class="card-body">Memory :  {{$item->memo}} </div>
        </div>
         <div class="card">
          <div class="card-body">Time :  {{$item->created_at}} </div>
        </div>
      </div> --}}
      <hr>

      {{-- table format  --}}
      <form action="/more_details" method="POST">
        @csrf
      <table class="table">
        <thead>
          <tr class="alert alert-success">
            <th scope="col"></th>
            <th scope="col">Amount</th>
            <th scope="col">message</th>
            <th scope="col">Transaction id</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>
          <tr class="">
            <th scope="row">{{$total  = $total -=1}} </th>
           
            <td> ₦ {{$item->amount}}</td>
            <td>{{$item->message}}</td>
            {{-- <td  >{{$item->transaction_id}}</td> --}}
           
            <td ><input readonly type="text" value="{{$item->transaction_id}}" name="my_trax_id"> </td>
            <td>{{$item->created_at}}</td>
            <td> <button type="submit" class="btn btn-outline-success">details</button></td>
          </tr>
        
        </tbody>
      </table>
    </form>
    @endforeach
    
@else
    <h4 class="text-center bg-warning">You have not done any trasaction </h4>
@endif

</div>
    
@endsection