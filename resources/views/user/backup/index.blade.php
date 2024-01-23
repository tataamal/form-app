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
            <th>Periode Backup</th>
            <th>Tanggal Backup</th>
            <th>Objek Backup</th>
            <th>Status Backup</th>
            <th>Penanggung Jawab</th>
            <th>Keterangan</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($data_backup as $item)
                
            <tr>
                <th>{{ $item->id_backup }}</th>
                <th>{{ $item->periode }}</th>
                <th>{{ $item->tanggal }}</th>
                <th>{{ $item->objek }}</th>
                <td><span class="badge bg-label-success me-1">Disetujui</span></td>
                <th>{{ $item->pj }}</th>
                <th>{{ $item->keterangan}}</th>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
</div>
@endsection