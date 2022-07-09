@extends('contacts.app')
@section('content')
 
 
<div class="card">
  <div class="card-header">Your Products</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Product Name : {{ $contacts->name }}</h5>
        <p class="card-text">Category : {{ $contacts->category }}</p>
        <p class="card-text">Status : {{ $contacts->status }}</p>
  </div>
       
    </hr>
  
  </div>
</div>