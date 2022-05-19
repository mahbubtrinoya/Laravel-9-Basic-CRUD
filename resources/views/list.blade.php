@extends('layout.app')
@section('title','List Crud')
@section('content')
<h2>Crud List</h2> 
<h5><a href="create-contact" class="btn btn-primary btn-md">Add Contact</a></h5> 
@if(session()->has('success')) 
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> {{session()->get('success')}}
</div> 
@endif  
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Sl</th>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Email</th>
      <th>Mobile No</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($ContactLists as $contact)
      <tr>
        <td>{{ $loop->index+1}}</td>
        <td>{{$contact->firstname}}</td>
        <td>{{$contact->lastname}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->number}}</td>
        <td><a href="/contact-edit/{{$contact->id}}" class="btn btn-info btn-md">Edit</a>
            <a href="/contact-delete/{{$contact->id}}" class="btn btn-danger ntn-md">Delete</a></td>
      </tr>
      @endforeach


  </tbody>
</table>
@endsection