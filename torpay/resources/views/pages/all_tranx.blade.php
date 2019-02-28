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

@if (count($my_all_trax) > 0)
    @foreach ($my_all_trax as $item)
  
 

      {{-- table format  --}}
      <form action="/all_tranx/more_details" method="POST">
        @csrf
      <table class="table">
        <thead>
          <tr class="alert alert-info">
            <th scope="col"></th>
            <th scope="col">Amount</th>
            <th scope="col">Memo</th>
            <th scope="col">Transaction id</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>
          <tr class="">
            <th scope="row">{{$total = $total -=1}} </th>
           
            <td> ₦ {{$item->amount}}</td>
            <td>{{$item->memo}}</td>
            {{-- <td  >{{$item->transaction_id}}</td> --}}
           
            <td ><input readonly type="text" value="{{$item->transaction_id}}" name="my_trax_id"> </td>
            <td>{{$item->created_at}}</td>
            <td> <button type="submit" class="btn btn-outline-danger">details</button></td>
          </tr>
          <hr>
        </tbody>
      </table>
    </form>
    @endforeach

@endif

</div>
    
@endsection