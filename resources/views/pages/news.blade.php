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
<div class="flex flex-wrap gap-6 justify-center ">

@foreach ($data as $item)
<div class="w-96 px-5">
    <img src="https://apimapor.diaryies.web.id/storage/images/{{ $item['file'] }}" alt="" class="w-full h-[50%]">
    <h1 class="font-bold mt-5">{{ $item['title'] }}</h1>
    <p>{{ $item['body'] }}</p>
    <p class="underline text-blue-600">Read More..</p>
    <div class="bg-slate-950 h-0.5 mt-5">&nbsp;</div>
</div> 
@endforeach





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

