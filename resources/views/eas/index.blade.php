@extends('template')
@section('title', 'Eas')
@section('konten')

    <h2>Kode Soal nilai_peserta</h2>

    <a href="/eas/create" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>No Peserta</th>
            <th>Nilai Teori</th>
            <th>Nilai Praktek</th>
            <th>Rata-rata</th>
            <th>Status</th>
        </tr>

        @forelse($data as $row)
@php
    $mean = ($row->nilaiteori + $row->nilaipraktek) / 2;
    if ($mean < 75)   { $status = 'Gagal';
      $badgeClass = 'badge bg-danger';
                } else {
                            $status = 'Lulus';
    $badgeClass = 'badge bg-success';
                }
@endphp
             <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->nopeserta }}</td>
                    <td>{{ $row->nilaiteori }}</td>
                    <td>{{ $row->nilaipraktek }}</td>
                    <td>{{ $mean }}</td>
                    <td>{{ $status }}</td>
                     <td><span class="{{ $badgeClass }}">{{ $status }}</span></td>


                </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada data.</td>
            </tr>
        @endforelse
    </table>

@endsection
