@extends('layouts.master')

@section('title')
   Welcome
@endsection

@section('content')
    <h1>Selamat Datang {{ $fname }} {{ $name }}</h1>
    <p>Terimakasih sudah bergabung di SanberBook.Social Media kita bersama!</p>
@endsection