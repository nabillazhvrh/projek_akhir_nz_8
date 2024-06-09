@extends('layouts.master')

@section('title')
   Data Table
@endsection

@section('content')
<div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Name</th>
        <th>Jadwal</th>
        <th>Rating</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>uhan, Izinkan Aku Berdosa </td>
        <td>(22 Mei 2024)
          Explorer 4.0
        </td>
        <td>18+</td>
        <td> 4</td>
        <td>X</td>
      </tr>
      <tr>
        <td>Trident</td>
        <td>Internet
          Explorer 5.0
        </td>
        <td>Win 95+</td>
        <td>5</td>
        <td>C</td>
      </tr>
      <tr>
        <td>Trident</td>
        <td>Internet
          Explorer 5.5
        </td>
        <td>Win 95+</td>
        <td>5.5</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Trident</td>
        <td>Internet
          Explorer 6
        </td>
        <td>Win 98+</td>
        <td>6</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Trident</td>
        <td>Internet Explorer 7</td>
        <td>Win XP SP2+</td>
        <td>7</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Trident</td>
        <td>AOL browser (AOL desktop)</td>
        <td>Win XP</td>
        <td>6</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Gecko</td>
        <td>Firefox 1.0</td>
        <td>Win 98+ / OSX.2+</td>
        <td>1.7</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Gecko</td>
        <td>Firefox 1.5</td>
        <td>Win 98+ / OSX.2+</td>
        <td>1.8</td>
        <td>A</td>
      </tr>
      </tr>
      </tfoot>
    </table>
@endsection

@push('script')
<script src="{{asset('/admin/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush

@push('styles')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css"/>   
@endpush