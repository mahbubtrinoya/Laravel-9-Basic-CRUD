@extends('layout.app')
@section('title','List Crud')
@section('content')
<h2>Add New Contact</h2>      

<form method="POST" class="form-horizontal" action="/contact-store" >
  @csrf
  <div class="form-group">
    <div class="col-sm-6">
      <input type="text" class="form-control"  placeholder="First Name" name="FirstName" value="{{old('FirstName')}}">
   @if($errors->has('FirstName'))
   <p class="text-danger">{{$errors->first('FirstName')}}</p>
   @endif
    </div>
    <div class="col-sm-6">
      <input type="text" class="form-control"  placeholder="Last Name" name="LastName" value="{{old('LastName')}}">
      @if($errors->has('LastName'))
      <p class="text-danger">{{$errors->first('LastName')}}</p>
      @endif
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-6">
      <input type="text" class="form-control"  placeholder="Mobile No" name="Number" value="{{old('Number')}}">
      @if($errors->has('Number'))
      <p class="text-danger">{{$errors->first('Number')}}</p>
      @endif
    </div>
    <div class="col-sm-6">
      <input type="text" class="form-control"  placeholder="Email" name="Email" value="{{old('Email')}}">
      @if($errors->has('Email'))
      <p class="text-danger">{{$errors->first('Email')}}</p>
      @endif
    </div>
  </div>

  <div class="form-group">        
      <button type="submit" class="btn btn-success btn-block">Submit</button>
    </div>
  </div>
</form>

@endsection