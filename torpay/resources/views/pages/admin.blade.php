@extends('layouts.app')
@section('content')
    
<div class="jumbotron text-center">
        <h1>Admin Dashboard</h1> 
        <p> </p> 
      </div>
    
      <div class="bg-secondary container">
          <a href="/">
            <button type="button" class="btn btn-success">
               <span class="badge badge-light"> Email all users   </span>
              </button>
            </a>
      <div class="bg-secondary">
          <a href="/">
            <button type="button" class="btn btn-success">
               <span class="badge badge-light"> Email all subscribers  </span>
              </button>
            </a>
        <table class="table table-borderless">
          <thead>
            <tr>
              <th>Details</th>
              <th> :</th>
              <th>Result</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><h4 class="alert alert-info">All Users</h4>  </td>
              <td> :</td>
              <td><h4 class="alert alert-info"> {{$total_user_count}}</h4></td>
            </tr>
            <tr>
              <td><h4 class="alert alert-info">All Attempt</h4> </td>
              <td> :</td>
              <td><h4 class=" alert alert-info">{{$total_tranx}}</h4></td>
            </tr>
            <tr>
              <td> <h4 class="alert alert-info">Completed Transactions</h4></td>
              <td> :</td>
              <td> <h4 class="alert alert-info" >{{$all_succ_trax_count}}</h4></td>
            </tr>
            <tr>
              <td> <h4 class="alert alert-info">Incomplete Transactions</h4></td>
              <td> :</td>
              <td> <h4 class="alert alert-info"> {{$failed}}</h4></td>
            </tr>
            <tr>
              <td> <h4 class="alert alert-info">Total Subscribers </h4></td>
              <td> :</td>
              <td> <h4 class="alert alert-info"> {{$all_sub}}</h4></td>
            </tr>
          </tbody>
        </table>
      </div>
@endsection