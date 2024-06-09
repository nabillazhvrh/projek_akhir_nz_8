@extends('layouts.master')

@section('title')
   Halaman cast
@endsection

@section('content')

<a href="/cast/create" class="btn btn-primary mb-3">cast add</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">umur</th>
        <th scope="col">bio</th>
        <th scope="col">detail</th>
      </tr>
    </thead>
    <tbody>
        @forelse ( $cast as $key => $item)
        <tr>
            <th scope="row">{{ $key + 1}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->umur}}</td>
            <td>{{$item->bio}}</td>
            <td>
                <form action="/cast/{{$item->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="/cast/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/cast/{{$item->id}}/edit" class="btn btn-warning btn-sm">update</a>
                    <input type="submit" class="btn btn-danger btn-sm" value="delete">
        </tr>
        @empty
            cast not found
        @endforelse

    </tbody>
  </table>
@endsection