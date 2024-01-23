@extends('admin.layout.main')

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
            <th>Tanggal Backup</th>
            <th>Tanggal Backup</th>
            <th>Object Backup</th>
            <th>Penanggung Jawab</th>
            <th>Keterangan</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">
            @foreach ($data_backup as $item)
                
            <tr>
                <th>{{ $item->id_backup }}</th>
                <th>{{ $item->periode }}</th>
                <th>{{ $item->tanggal }}</th>
                <th>{{ $item->objek }}</th>
                <th>{{ $item->pj }}</th>
                <th>{{ $item->keterangan}}</th>
                <td>
                    <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-trash me-1"></i> Delete</a
                        >
                    </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
</div>
@endsection