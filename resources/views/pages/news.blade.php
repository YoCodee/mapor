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
<!-- Container for demo purpose -->
<div class="container my-24  md:px-6">
    <!-- Section: Design Block -->
    <section class="mb-32  md:text-left">

      @foreach ($data as $item)
      <div class="mb-6 flex flex-wrap">
        <div class="mb-6  w-full shrink-0 grow-0 basis-auto px-3 md:mb-0 md:w-3/12">
          <div class="relative mb-6 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
            data-te-ripple-init data-te-ripple-color="light">
            <div class="aspect-w-4 aspect-h-3">
                <div class="flex items-center justify-center h-56">
                  <img src="https://www.apimapor.diaryies.web.id/storage/images/{{ $item['file'] }}" class="object-cover w-full h-full" alt="Image"/>
                </div>
              </div>
            <a href="#!">
              <div
                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
              </div>
            </a>
          </div>
        </div>

        <div class="relative mb-6 mr-auto w-full shrink-0 grow-0 basis-auto px-3 md:mb-0 md:w-9/12 xl:w-7/12">
          <h5 class="  text-lg font-bold">{{ $item['title'] }}</h5>

          <p class="mb-3 text-neutral-500 dark:text-neutral-300">
            <small>Published <u>13.01.2022</u> by
              <a href="#!">Admin</a></small>
          </p>
          <p class="text-neutral-800">
            {{ Str::length($item['body']) > 250 ? Str::limit($item['body'], 250) : $item['body'] }}
          </p>
          <div class="absolute bottom-[-20] left-4 lg:bottom-10 lg:left-5">
            <a href="/news/{{ $item['slug'] }}" class="text-xs text-orange-500">Read More...</a>
          </div>
        </div>
      </div>
      <div class="bg-gray-100 h-0.5 mb-5">
        &nbsp;
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
