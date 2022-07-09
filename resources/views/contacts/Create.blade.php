@extends('contacts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Add Your Product</div>
  <div class="card-body">
      
      <form action="{{ url('contact') }}" method="post">
        {!! csrf_field() !!}
        <label>Product Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Category</label></br>
        <input type="text" name="category" id="category" class="form-control"></br>
        <label>Status</label>
        <select name="status" id="status">
          <option value="active" id="status">Active</option>
          <option value="inactive" id="status">Inactive</option>
        </select></br></br>
    
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop