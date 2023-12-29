@extends('app.layouts.app') <!-- Assuming you have a layout file, adjust as needed -->

@section('content')
<div class="container-fluid d-flex flex-column justify-content-between" style="min-height: 100vh;">
    <div class="d-flex flex-column gap-2 pt-2">
        <div class="col d-flex flex-row justify-content-between">
            <h4 class="text-center" style="background: white; border-radius:16px; padding: 4px; width: 100%">Profile</h4>
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center">
            <img src="{{ asset('assets/iconamoon_profile-circle-fill.svg') }}" alt="profile" width="80px" />
        </div>
        <div class="d-flex flex-column justify-content-center align-items-left ms-4 me-4 ps-4 pe-4 gap-2">
            <div class="d-flex flex-column gap-1">
                <label class="block text-sm font-medium text-gray-600"> {{ __('profile.nama') }}</label>
                <input class="w-full rounded p-2 bg-white" style="border:none" value="{{$user->name}}" disabled>
            </div>
            <div class="d-flex flex-column gap-1">
                <label class="block text-sm font-medium text-gray-600">{{ __('profile.notelp') }}</label>
                <input class="w-full rounded p-2 bg-white" style="border:none" value="{{$user->telp}}" disabled>
            </div>
            <div class="d-flex flex-column gap-1">
                <label class="block text-sm font-medium text-gray-600">{{ __('profile.email') }}</label>
                <input class="w-full rounded p-2 bg-white" style="border:none" value="{{$user->email}}" disabled>
            </div>

        </div>

    </div>


    <!-- <div class="d-flex justify-content-center align-items-center" style="position: fixed; bottom:0; background: white; padding: 0"> -->
    <div class="d-flex flex-row justify-content-center align-items-center p-4" style="bottom:0;width: 100%;gap: 16px">
        <a href="{{ route('app') }}" style="text-decoration: none; width: 100%; display: flex; justify-content: center; align-items: center;">
            <div style="width: 100%; display: flex; justify-content: center; align-items: center;">
                <img src="{{ asset('assets/bxs_home.svg') }}" alt="asdasd" style="width: 48px;" />
            </div>
        </a>
        <a href="{{ route('app.profile') }}" style="text-decoration: none;width: 100%; display: flex; justify-content: center; align-items: center;">
            <div style="width: 100%; display: flex; justify-content: center; align-items: center;">
                <img src="{{ asset('assets/iconamoon_profile-circle-fill.svg') }}" alt="asdasd" style="width: 48px;" />
            </div>
        </a>
    </div>

    <!-- </div> -->
</div>

@endsection