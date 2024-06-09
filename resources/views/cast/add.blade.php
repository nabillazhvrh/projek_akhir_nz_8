@extends('layouts.master')

@section('title')
    Add cast
@endsection

@section('content')
<form action="/cast" method="post">
    {{--validation--}} 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<!-- Create Post Form -->
    <div class="form-group">
        @csrf
        <label>Name</label>
        <input type="text" class="form-control" name="name">
      </div>
    <div class="form-group">
      <label>umur</label>
      <textarea name="umur" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>bio</label>
        <textarea name="bio" id="" cols="30" rows="10" class="form-control"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection