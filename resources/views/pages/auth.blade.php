@extends('layouts.master')

@section('title')
   auth 
@endsection

@section('content')
    <form action="/welcome" method="post">
      @csrf
      <label>First Name</label> <br>
      <input type="text" name="fname"> <br>
      <label>Last name</label> <br>
      <input type="text" name="name" /> <br /> <br />
      <textarea name="Bio" id="" cols="30" rows="10"></textarea> <br>
      <input type="submit" valuee="kirim">
    </form>
    <a href="/">Go Back</a>
@endsection