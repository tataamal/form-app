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
                <th>Tanggal RFC</th>
                <th>Diminta Oleh</th>
                <th>Detail Perubahan</th>
                <th>Status Persetujuan</th>
                <th>Yang Menyetujui</th>
                <th>Tanggal Persetujuan</th>
                <th>Tindak Lanjut Perubahan</th>
                <th>Tanggal Mulai Perubahan</th>
                <th>Tanggal Selesai Perubahan</th>
                <th>Bidang/Layanan/Bagian Terdampak</th>
                <th>Penanggung Jawab</th>
                <th>Keterangan</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <tr>
                <th>20222</th>
                <th>17 Januari 2024</th>
                <th>Muhammad Niltal</th>
                <th>tidak ada</th>
                <td><span class="badge bg-label-success me-1">Disetujui</span></td>
                <th>Kepala Tim</th>
                <th>17 Januari 2024</th>
                <th>Tidak ada</th>
                <th>18 Januari 2040</th>
                <th>29 Januari 2040</th>
                <th>Tidak Ada</th>
                <th>Kepala Tim</th>
                <th>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum in quaerat numquam saepe, quidem repudiandae nostrum odit praesentium, minima voluptate facilis maxime accusamus consequuntur totam vitae dolore voluptates dolor ea.</th>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection