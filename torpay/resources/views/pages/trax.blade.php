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

  <a href="/trax">
    <button type="button" class="btn btn-info">
      <span class="badge badge-light">   Completed   {{$total}}</span>
      </button>
    </a>
    <a href="/all_transactions">
    <button type="button" class="btn-info ">
       <span class="badge badge-light">     Attempt {{$count_all_tranx}}</span>
      </button>
    </a>

@if (count($my_trax) > 0)
    @foreach ($my_trax as $item)
      
     

      {{-- table format  --}}
      <form action="{{route('more_details')}} " method="POST">
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
            <th scope="row">{{$total--}}  </th>
           
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