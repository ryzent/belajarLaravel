@extends('layout.main')

@section('title', 'Daftar Pelajar')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-2">Daftar Pelajar</h1>

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-light">
                    @foreach( $pelajar as $pelajarss)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $pelajarss->nama }}</td>
                        <td>{{ $pelajarss->nis }}</td>
                        <td>{{ $pelajarss->jurusan }}</td>
                        <td>{{ $pelajarss->email }}</td>
                        <td>
                            <a href="/students/{{ $pelajarss->id }}/edit" class="badge badge-primary">Edit</a>
                            <form action="/pelajar/{{ $pelajarss->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="badge badge-danger">Delete</button>
                            </form>
                            <!-- <a href="" class="badge badge-danger">delete</a> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
