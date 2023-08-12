@extends('layout.main')

@include('partials.navbar')

@section('content')

<div class="images">
    <div class="smk1 p-20 lg:p-36" style="margin: auto">
        <h1 class="md:text-7xl text-5xl m-auto text-center items-center justify-center font-bold text-white">
          Berita <span>Terkini</span>
        </h1>
        <p class="animate__animated animate__fadeInUp animate__slow md:text-md text-sm">
          Anyone who has never made a mistake has never tried anything new
        </p>
    </div>
</div>

<div class="wrapper2">
    <div class="wrapper px-4 mt-5">
        <a href="/news" class=" text-orange-500 no-underline text-xl hover:underline hover:text-blue-200 fa-solid fa-arrow-left fa-xl">
            <i class="mb-4 flex items-center my-auto ml-8">Back</i>
        </a>

        <div class="relative">
            <h1 class="font-montserat text-4xl lg:text-5xl font-bold">{{ $data['title'] }}</h1>
            <p class="mt-3 text-neutral-500 ">
                <small>Published <u>{{ $data['date'] }}</u> by
                  <a href="#!">Admin</a></small>
            </p>
        </div>
      
        <div class="image-news w-full lg:w-full flex mx-auto justify-center">
            <img src="https://www.apimapor.diaryies.web.id/storage/images/{{ $data['file'] }}" class="h-full lg:h-96" alt="Image">
        </div>

        <div class="mt-5">
            @php
                $paragraphs = explode("\r\n\r\n", $data['body']);
            @endphp
            @foreach ($paragraphs as $paragraph)
                <p class="font-arimo text-lg">{{ $paragraph }}</p>
            @endforeach
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
