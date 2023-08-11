@extends('layout.main')

@include('partials.navbar')

@section('content')
<div class="images">
    <div class="smk1 p-20 lg:p-36" style="margin: auto">
        <h1 class="md:text-7xl text-5xl m-auto text-center items-center justify-center font-bold text-white" >
          Berita <span>Terkini</span>
        </h1>
        <p class="animate__animated animate__fadeInUp animate__slow md:text-md text-sm">
          Anyone who as never made a mistake has never tried anything new
        </p>
      </div>
</div>

<div class="wrapper px-[7%] pt-24">
    <div class="header mb-5">
        <div class="px-4  border-l-8 border-orange-500">
            <h1 class="font-montserat text-5xl font-bold">Berita</h1>
            <p class="font-arimo">Ditampilkan berdasarkan yang paling terbaru </p>
        </div>
    </div>
<div class="flex flex-wrap gap-6 mx-auto ">
<div class="flex flex-col  bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-[60rem] lg:max-w-[26.5rem] xl:max-w-[33rem] 2xl:max-w-[40rem]   hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-full md:w-48 2xl:w-72 md:rounded-none md:rounded-l-lg" src="{{ asset('images/P1060362.JPG')}}" alt="">
    <div class="flex p-4 leading-normal">
        <div class="relative">
        <h5 class="mb-2 text-2xl font-bold tracking-tight leading-7 text-gray-900 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
        <p class="mb-3 font-normal  text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        <div class="absolute bottom-0 right-0">
            <p>read more</p>
        </div>
    </div>
    </div>
</div>
<div class="flex flex-col  bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-[60rem] lg:max-w-[26.5rem] xl:max-w-[33rem] 2xl:max-w-[40rem]   hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-full md:w-48 2xl:w-72 md:rounded-none md:rounded-l-lg" src="{{ asset('images/P1060362.JPG')}}" alt="">
    <div class="flex p-4 leading-normal">
        <div class="relative">
        <h5 class="mb-2 text-2xl font-bold tracking-tight leading-7 text-gray-900 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
        <p class="mb-3 font-normal  text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        <div class="absolute bottom-0 right-0">
            <p>read more</p>
        </div>
    </div>
    </div>
</div>
<div class="flex flex-col  bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-[60rem] lg:max-w-[26.5rem] xl:max-w-[33rem] 2xl:max-w-[40rem]   hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-full md:w-48 2xl:w-72 md:rounded-none md:rounded-l-lg" src="{{ asset('images/P1060362.JPG')}}" alt="">
    <div class="flex p-4 leading-normal">
        <div class="relative">
        <h5 class="mb-2 text-2xl font-bold tracking-tight leading-7 text-gray-900 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
        <p class="mb-3 font-normal  text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        <div class="absolute bottom-0 right-0">
            <p>read more</p>
        </div>
    </div>
    </div>
</div>
<div class="flex flex-col  bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-[60rem] lg:max-w-[26.5rem] xl:max-w-[33rem] 2xl:max-w-[40rem]   hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-full md:w-48 2xl:w-72 md:rounded-none md:rounded-l-lg" src="{{ asset('images/P1060362.JPG')}}" alt="">
    <div class="flex p-4 leading-normal">
        <div class="relative">
        <h5 class="mb-2 text-2xl font-bold tracking-tight leading-7 text-gray-900 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
        <p class="mb-3 font-normal  text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        <div class="absolute bottom-0 right-0">
            <p>read more</p>
        </div>
    </div>
    </div>
</div>
<div class="flex flex-col  bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-[60rem] lg:max-w-[26.5rem] xl:max-w-[33rem] 2xl:max-w-[40rem]   hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-full md:w-48 2xl:w-72 md:rounded-none md:rounded-l-lg" src="{{ asset('images/P1060362.JPG')}}" alt="">
    <div class="flex p-4 leading-normal">
        <div class="relative">
        <h5 class="mb-2 text-2xl font-bold tracking-tight leading-7 text-gray-900 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
        <p class="mb-3 font-normal  text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        <div class="absolute bottom-0 right-0">
            <p>read more</p>
        </div>
    </div>
    </div>
</div>
<div class="flex flex-col  bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-[60rem] lg:max-w-[26.5rem] xl:max-w-[33rem] 2xl:max-w-[40rem]   hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-full md:w-48 2xl:w-72 md:rounded-none md:rounded-l-lg" src="{{ asset('images/P1060362.JPG')}}" alt="">
    <div class="flex p-4 leading-normal">
        <div class="relative">
        <h5 class="mb-2 text-2xl font-bold tracking-tight leading-7 text-gray-900 ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
        <p class="mb-3 font-normal  text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        <div class="absolute bottom-0 right-0">
            <p>read more</p>
        </div>
    </div>
    </div>
</div>



</div>
</div>


@endsection
<style>
    .images {
    background: rgba(0, 0, 0, 0.6) url("./images/P1060362.JPG");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-blend-mode: darken;

  }
</style>

