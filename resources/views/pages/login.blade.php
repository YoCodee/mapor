@extends('layout.main')

@section('content')
<div class="Containers flex items-center h-screen justify-center px-[7%]  text-center rounded-xl">
    <div class="relative">
    <h1 class="sm:text-[45px] min-[320px]:text-[30px] font-bold text-black py-10 text-left mr-60  ">Log in Admin</h1>
    <form action="">
        <div class="input-groub flex flex-col items-start mb-10 ">
        <input type="email" id="email" placeholder="Email" class="peer px-4 py-4
        border  placeholder-transparent w-full rounded-lg bg-primary bg-opacity-40  mx-auto">
        <label for="email" class="ml-4 -mt-14 text-xs text-gray-500
        peer-placeholder-shown:text-gray-400
        peer-placeholder-shown:-mt-10
        peer-placeholder-shown:text-base
        duration-300">
            Email
        </label>
        </div>
        <div class="input-groub flex flex-col items-start mt-12 mb-12 ">
            <input type="password" id="password" placeholder="Password" class="peer px-4 py-4
            border  placeholder-transparent w-full rounded-lg bg-primary bg-opacity-40  mx-auto">
            <label for="password" class="ml-4 -mt-14 text-xs text-gray-500
            peer-placeholder-shown:text-gray-400
            peer-placeholder-shown:-mt-10
            peer-placeholder-shown:text-base
            duration-300 ">
                Password
            </label>
            </div>

        <button type="submit" class="w-full bg-orange-300 p-4 hover:bg-blue-300 ease-linear duration-200 rounded-full text-white font-semibold cursor-pointer" >Submit</button>

    </form>



    </div>
</div>
<script src="https://cdn.tailwindcss.com"></script>
@endsection
