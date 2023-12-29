@extends('app.layouts.app') <!-- Assuming you have a layout file, adjust as needed -->

@section('content')
<div class="container-fluid d-flex flex-column justify-content-between" style="min-height: 100vh;">
    <div class="d-flex flex-column gap-2">
        <div class="col d-flex flex-row justify-content-between gap-4 bg-white">
            <h4 class="text-center p-4" style="width: 100%">M-Transfer</h4>
        </div>

        <div class="d-flex flex-column justify-content-between m-4 p-2 bg-white gap-2">
            <form method="POST" action="{{ route('transfer-detail')}}" class="rounded bg-white">
                @csrf
                <div class="d-flex flex-column justify-content-center align-items-center gap-1">
                    <label for="tagihan">Input No Tagihan</label>
                    <input type="text" name="tagihan" class="mt-1 p-2 block w-full border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300" required />
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center gap-1">
                    <label>Dari Nomor</label>
                    <h6>{{$user->telp}}</h6>
                </div>
                <button type="submit" class="rounded" style="width: 100%;background: orange; color: white; font-weight: 500;" class="mt-4">Kirim</button>
            </form>
        </div>

    </div>


    <!-- <div class="d-flex justify-content-center align-items-center" style="position: fixed; bottom:0; background: white; padding: 0"> -->
    <div class="d-flex flex-row justify-content-center align-items-center p-4" style="bottom:0;width: 100%;gap: 16px">
        <div style="width: 100%; display: flex; justify-content: center; align-items: center;">
            <img src="{{ asset('assets/bxs_home.svg') }}" alt="asdasd" style="width: 48px;" />
        </div>
        <div style="width: 100%; display: flex; justify-content: center; align-items: center;">
            <img src="{{ asset('assets/iconamoon_profile-circle-fill.svg') }}" alt="asdasd" style="width: 48px;" />
        </div>
    </div>

    <!-- </div> -->
</div>

@endsection