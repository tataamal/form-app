@extends('admin.layout.main')

@section('main_content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                    <h5 class="card-title text-primary">Selamat Datang, {{ auth()->user()->username }} 🎉</h5>
                    <p class="mb-4">
                        Selamat datang di sistem pengiriman formulir heldesktik Dinas Kominfo Kabupaten Kudus
                    </p>
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                    <img
                        src="../assets/img/illustrations/man-with-laptop-light.png"
                        height="140"
                        alt="View Badge User"
                        data-app-dark-img="illustrations/man-with-laptop-dark.png"
                        data-app-light-img="illustrations/man-with-laptop-light.png" />
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->           
    
@endsection
