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
                <th>Nama Perangkat</th>
                <th>Lokasi</th>
                <th>Kapasitas Maksimal</th>
                <th>Tanggal Monitoring</th>
                <th>Utilisation CPU</th>
                <th>Utilisation RAM</th>
                <th>Utilisation DISK</th>
                <th>Tindak Lanjut</th>
                <th>Penanggung Jawab</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse ($data_monitoring as $item)
                <tr>
                <td>{{ $item->id_monitoring }}</td>
                <td>{{ $item->nama_perangkat }}</td>
                <td>{{ $item->lokasi }}</td>
                <td>{{ $item->max }}</td>
                <td>{{ date('d F Y', strtotime($item->tgl_monitoring)) }}</td>
                <td>{{ $item->cpu }} %</td>
                <td>{{ $item->ram }}%</td>
                <td>{{ $item->disk }}%</td>
                <td>{{ $item->pj }}</td>
                <td>{{ $item->tindak_lanjut }}</td>
                </tr>                 
                @empty
                <tr>
                    <td colspan="10">Belum Ada Formulir yang dikirimkan</td>
                </tr> 
                @endforelse
            </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection