@extends('layout.main')

@section('content')

<div class="flex justify-center items-center h-screen">
    <div class="font-arimo">
        <form action="/login" method="POST">
        @csrf
            <h1 class="font-bold text-3xl font-montserat">Mapur.id Login</h1>
            @if (Session::has('err'))
            <h1 class="font-arima text-base text-red-500 mt-3 font-bold">{{ session('err') }}</h1>
            @endif
            <h1 class="mt-5 font-bold">Email</h1>
            <input type="email" class="input input-bordered input-sm w-80" name="email">
            @error('email')
                <h1 class="font-arima text-base text-red-500 mt-3 font-bold">{{ $message }}</h1>
            @enderror
            <h1 class="mt-5 font-bold">Password</h1>
            <input type="password" class="input input-bordered input-sm w-80" name="password">
            @error('password')
                <h1 class="font-arima text-base text-red-500 mt-3 font-bold">{{ $message }}</h1>
            @enderror
            <div class="relative mt-5 justify-center items-center flex">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection