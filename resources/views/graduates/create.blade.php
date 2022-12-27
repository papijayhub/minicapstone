@extends('layouts.app')
@section('content')
<div class="card" style="margin: 20px;">
  <div class="card-header">Create New Employee</div>
  <div class="card-body">
       
      <form action="{{ route('graduates.store') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Qoutes</label></br>
        <input type="text" name="qoute" class="form-control"></br>
        <label>Advice</label></br>
        <input type="text" name="advice" class="form-control"></br>
        <input class="form-control" name="photo" type="file" id="photo">
 
         
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
@endsection
