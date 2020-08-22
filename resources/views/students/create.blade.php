@extends('layout.main')

@section('title', 'Form Tambah Data Siswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10 ">
            <h1 class="mt-2">Form Tambah data siswa baru</h1>
            <form method="POST" action="/students">
                @csrf
                <div class="form-group col-8">
                    <label for="nama">Nama Siswa</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                        value="{{ old('nama') }}" placeholder="Masukan nama siswa" name="nama">
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-8">
                    <label for="nis">NIS Siswa</label>
                    <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis"
                        value="{{ old('nis') }}" placeholder="Masukan NIS siswa" name="nis">
                    @error('nis')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-8">
                    <label for="jurusan">jurusan Siswa</label>
                    <input type="text" class="form-control" id="jurusan" value="{{ old('jurusan') }}"
                        placeholder="Masukan jurusan" name="jurusan">
                </div>
                <div class="form-group col-8">
                    <label for="email">email Siswa</label>
                    <input type="text" class="form-control" id="email" value="{{ old('email') }}"
                        placeholder="Masukan email siswa" name="email">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data!</button>
            </form>
        </div>
    </div>
</div>
@endsection