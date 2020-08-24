@extends('layout.main')

@section('title', 'Form Ubah Data Siswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10 ">
            <h1 class="mt-2">Form Ubah data siswa baru</h1>
            <form method="POST" action="/students/{{ $student->id }}">
                @method('patch')
                @csrf
                <div class="form-group col-8">
                    <label for="nama">Nama Siswa</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                        value="{{ $student->nama }}" placeholder="Masukan nama siswa" name="nama">
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-8">
                    <label for="nis">NIS Siswa</label>
                    <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis"
                        value="{{ $student->nis }}" placeholder="Masukan NIS siswa" name="nis">
                    @error('nis')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-8">
                    <label for="jurusan">Jurusan Siswa</label>
                    <input type="text" class="form-control" id="jurusan" value="{{ $student->jurusan }}"
                        placeholder="Masukan jurusan" name="jurusan">
                </div>
                <div class="form-group col-8">
                    <label for="email">Email Siswa</label>
                    <input type="text" class="form-control" id="email" value="{{ $student->email }}"
                        placeholder="Masukan Email siswa" name="email">
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data!</button>
            </form>
        </div>
    </div>
</div>
@endsection
