@extends('template')
@section('title', 'Input Nilai')
@section('konten')

    <h2>Tambah Data</h2>

    <form action="{{ route('eas.store') }}" method="POST">
        @csrf

        <p>
            <label>No Peserta</label><br>
            <input type="text" name="nopeserta" value="{{ old('nopeserta') }}">

        </p>

        <p>
            <label>Nilai Teori</label><br>
            <input type="text" name="nilaiteori" value="{{ old('nilaiteori') }}">

        </p>
        </p>

        <p>
            <label>Nilai Praktek</label><br>
            <input type="text" name="nilaipraktek" value="{{ old('nilaipraktek') }}">

        </p>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="/eas" class="btn btn-secondary">Kembali</a>

    </form>

@endsection
