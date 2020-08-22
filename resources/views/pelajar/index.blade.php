@extends('layout.main')

@section('title', 'Daftar Pelajar')

@section('container')
  <div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Daftar Pelajar</h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $pelajar as $pelajarss)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $pelajarss->nama }}</td>
                      <td>{{ $pelajarss->nis }}</td>
                      <td>{{ $pelajarss->jurusan }}</td>
                      <td>{{ $pelajarss->email }}</td>
                      <td>
                        <a href="" class="badge badge-success">edit</a>
                        <a href="" class="badge badge-danger">delete</a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>
@endsection
