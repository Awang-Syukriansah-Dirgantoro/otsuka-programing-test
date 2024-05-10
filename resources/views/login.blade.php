@extends('layout')
@push('css')
@endpush
@section('content')
    <div class="container-xxl">
        <div class="row justify-content-center text-center p-2">
            <span>Login</span>
            <form action="/login" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col p-2">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="col p-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
            </form>
        </div>
    </div>
@endsection
@push('js')
@endpush
