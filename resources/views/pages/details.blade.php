@extends('layout.main')

@include('partials.navbar')

@section('content')

<style>
    .images {
    background: rgba(0, 0, 0, 0.6) url("./images/11852424_4853433.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-blend-mode: darken;
  }
</style>

<div class="images">
    <div class="smk1 p-20 lg:p-36" style="margin: auto">
        <h1 class="md:text-7xl text-5xl m-auto text-center items-center justify-center font-bold text-white" >
          Tambah <span>Berita</span>
        </h1>
        <p class="animate__animated animate__fadeInUp animate__slow md:text-md text-sm">
          Anyone who as never made a mistake has never tried anything new
        </p>
      </div>
</div>

<div class="wrapper2">
    <div class="wrapper px-4 mt-5">
        <a href="/news" class=" text-orange-500 no-underline text-xl mt-5 hover:underline hover:text-blue-200 fa-solid fa-arrow-left fa-xl">
            <i class="mb-10 flex items-center my-auto ml-8">Back</i>
        </a>

        <div class="relative">
            <h1 class="font-montserat text-4xl lg:text-5xl font-bold">{{ $data['title'] }}</h1>
            <p class="mt-3 text-neutral-500 flex justify-between">
                <small>Published <u>{{ $data['date'] }}</u> by
                  <a href="#!">Admin</a></small>
            </p>

        </div>





        <div class="image-news w-full lg:w-full flex mx-auto justify-center mt-5">

            @if (isset($data['file']) && !empty($data['file']))
                @php
                    $extension = pathinfo($data['file'], PATHINFO_EXTENSION);
                    $fileUrl = 'https://www.apimapor.diaryies.web.id/storage/files/' . $data['file'];
                @endphp

                @if (in_array($extension, ['pdf', 'doc', 'docx', 'word']))
                <div class="flex flex-col">
                    <img src="{{ asset('images/pdfword.jpg') }}" class="h-full lg:h-[10rem]" alt="file">
                    <a href="{{ $fileUrl }}" target="_blank" class="link text-blue-600 mt-5 text-center">Download File</a>
                </div>

                @else
                    <img src="https://www.apimapor.diaryies.web.id/storage/images/{{ $data['file'] }}" class="h-full lg:h-[30rem]" alt="file">
                @endif
            @endif
        </div>




        <div class="mt-5">
            @php
                $paragraphs = explode("\r\n\r\n", $data['body']);
            @endphp
            @foreach ($paragraphs as $paragraph)
                <p class="font-arimo text-lg mb-8">{{ $paragraph }}</p>
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
