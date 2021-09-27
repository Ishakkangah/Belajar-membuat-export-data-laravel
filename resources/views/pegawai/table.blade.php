@extends('layouts.backend')

@section('content')
    <h1>Halaman pegawai</h1>
    <div class="card-header">
        <a href="{{ route('exportPegawai') }}" class="btn btn-success fs-6">Export</a>
    </div>
    <table class="table table-hover">
        <thead class="bg-secondary text-white">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal lahir</th>
            <th scope="col">Nomor hp</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pegawais as $index => $pegawai)
          <tr>
            <th scope="row">{{ $pegawais->count() * ($pegawais->currentPage() - 1) + $loop->iteration }}</th>
            <td>{{ $pegawai->name }}</td>
            <td>{{ $pegawai->alamat }}</td>
            <td>{{ $pegawai->tanggal_lahir }}</td>
            <td>{{ $pegawai->nomor_hp }}</td>
        </tr>
        @endforeach
          <tr>
        </tbody>
      </table>
      {{ $pegawais->links() }}
@endsection