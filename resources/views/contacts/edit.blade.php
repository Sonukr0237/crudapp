@extends('contacts.app')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Product Here</div>
  <div class="card-body">
      
      <form action="{{ url('contact/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contacts->id}}" id="id" />
        <label>Product Name</label></br>
        <input type="text" name="name" id="name" value="{{$contacts->name}}" class="form-control"></br>
        <label>Category</label></br>
        <input type="text" name="category" id="category" value="{{$contacts->category}}" class="form-control"></br>
        <label>Status</label>
        <select name="status" id="status">
          <option value="active" id="status">Active</option>
          <option value="inactive" id="status">Inactive</option>
        </select></br>
        </br><input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop