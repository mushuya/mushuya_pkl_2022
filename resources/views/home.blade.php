@extends('layouts.main')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Penerbit</th>
        <th scope="col">Tahun</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($tampil as $pil)
        <tr>
            <th scope="row">{{ $pil->id }}</th>
            <td>{{ $pil->judul }}</td>
            <td>{{ $pil->penerbit }}</td>
            <td>{{ $pil->tahun }}</td>
          </tr> 
        @endforeach

      
    </tbody>
  </table>
@endsection