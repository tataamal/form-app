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
            <th>Objek Backup</th>
            <th>Penanggung Jawab</th>
            <th>Keterangan</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="table-border-bottom-0">

            @forelse ($data_backup as $item)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $item->periode }}</th>
                <th>{{ date('d F Y', strtotime($item->tanggal)) }}</th>
                <th>{{ $item->objek }}</th>
                <th>{{ $item->pj }}</th>
                <th>{{ $item->keterangan}}</th>
                <td>
                    <a href="{{ url('admin/edit-backup', $item->id_backup) }}"><span class="btn btn-primary rounded-2 fw-semibold">Edit</span></a>
                    <form action="{{ url('admin/delete-backup', $item->id_backup) }}" class="mt-3" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit" class="btn btn-danger rounded-2 fw-semibold" value="Delete">
                    </form>
                </td>
            </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada data yang masuk</td>
                </tr>
            @endforelse


            @foreach ($data_backup as $item)
                
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
</div>
@endsection