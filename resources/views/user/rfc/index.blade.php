@extends('user.layout.main')

@section('main_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> {{ $title }}</h4>

        <!-- Basic Bootstrap Table -->
        <div class="card">
        <h5 class="card-header">{{ $title }}</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
            <thead>
                <tr>
                <th>No</th>
                <th>Tanggal RFC</th>
                <th>Diminta Oleh</th>
                <th>Detail Perubahan</th>
                <th>Status Persetujuan</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($data_rfc as $item)
                <tr>
                <td>{{ $item->id_rfc }}</td>
                <td>{{ date('d F Y', strtotime($item->tgl_req))}}</td>
                <td>{{ $item->pengaju }}</td>
                <td>{{ $item->detail }}</td>
                <td>
                    @if ($item->acc == 'Disetujui')
                    <span class="badge bg-label-success me-1">Disetujui</span>
                    @elseif ($item->acc == 'Tidak setuju')
                    <span class="badge bg-label-danger me-1">Tidak setuju</span>
                    @elseif ($item->acc == 'Belum disetujui')
                    <span class="badge bg-label-warning me-1">Belum disetujui</span>
                    @endif
                </td>
                </tr>    
                @empty
                <tr>
                    <td colspan="6" class="text-center" >Tidak ada Formulir Masuk</td>
                </tr>
                @endforelse
            </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection