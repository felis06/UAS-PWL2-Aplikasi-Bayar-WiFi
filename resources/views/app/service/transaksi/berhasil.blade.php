@extends('app.layouts.app') <!-- Assuming you have a layout file, adjust as needed -->

@section('content')
<div class="container-fluid d-flex flex-column justify-content-between" style="min-height: 100vh;">
    <div class="d-flex flex-column gap-2">
        <div class="col d-flex flex-row justify-content-between gap-4 bg-white">
            <h4 class="text-center p-4" style="width: 100%">M-Transfer</h4>
        </div>

        <div class="mt-5 d-flex flex-column justify-content-center align-items-center gap-4">

            <h4 class="text-center">Transaksi Berhasil</h4>
            <a href="{{route('app')}}" style="text-decoration: none; color:black; background: white; border-radius: 16px; padding: 8px">Kembali Ke Beranda</a>
        </div>

    </div>


    <!-- </div> -->
</div>

@endsection