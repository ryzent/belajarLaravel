@extends('layout.main')

@section('title', 'Detail Siswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-2">Detail Siswa</h1>
            <div class="card bg-secondary text-white">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-white-50">{{ $student->nis }}</h6>
                    <p class="card-text">{{ $student->jurusan }}</p>
                    <p class="card-text">{{ $student->email }}</p>

                    <a href="{{ $student->id }}/edit" class="btn btn-primary">Edit</a>

                    <form action="/students/{{ $student->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/students" class="btn btn-info">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
