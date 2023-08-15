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
            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="ml-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Share <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg></button>
            <!-- Dropdown menu -->
            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
            <li class="flex justify-center items-center">
                <input class="input input-bordered input-xs text-black" id="text-copy" value="http://fe.test/news/{{$data['slug']}}" readonly>
            </li>
            <li class="flex justify-center items-center mt-2">
                <button class="btn btn-primary w-20 text-xs" onclick="copyText()">
                    Copy to Clipboard
                </button>
            </li>
        </ul>
    </div>

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

<script>
function copyText() {  
    var copyText = document.getElementById("text-copy");  
    copyText.select();  
    document.execCommand("copy");
}
</script>
