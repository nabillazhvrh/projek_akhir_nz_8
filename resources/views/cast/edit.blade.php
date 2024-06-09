@extends('layouts.master')

@section('title')
    Halaman Edit cast
@endsection

@section('content')

<form method="POST" action="/cast/{{$cast->id}}">
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

        @csrf
        @method("put")
        <div class="form-group">
        <label>Name</label>
        <input type="text" value="{{$cast->name}}" class="form-control" name="name">
      </div>
    <div class="form-group">
      <label>umur</label>
      <textarea name="umur" id=""  class="form-control" cols="30" rows="10" >{{$cast->umur}}</textarea>
    </div>
    <div class="form-group">
        <label>bio</label>
        <textarea name="bio" id=""  class="form-control" cols="30" rows="10"> {{$cast->bio}}</textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection