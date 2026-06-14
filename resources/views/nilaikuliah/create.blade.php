@extends('template')
@section('title', 'Input Nilai')
@section('konten')

    <h2>Tambah Data</h2>

    <form action="{{ route('nilaikuliah.create') }}" method="POST">
        @csrf

        <p>
            <label>NRP</label><br>
            <input type="text" name="NRP" value="{{ old('NRP') }}">

        </p>

        <p>
            <label>Nilai Angka</label><br>
            <input type="text" name="NilaiAngka" value="{{ old('NilaiAngka') }}">

        </p>
        </p>

        <p>
            <label>SKS</label><br>
            <input type="text" name="SKS" value="{{ old('SKS') }}">

        </p>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/keranjang" class="btn btn-secondary">Kembali</a>

    </form>

@endsection
