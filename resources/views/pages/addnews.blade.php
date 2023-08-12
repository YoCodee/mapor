@extends('layout.main')

@include('partials.navbar')

@section('content')

<style>
    .images {
    background: rgba(0, 0, 0, 0.6) url("./images/P1060362.JPG");
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

<div class="mt-5 px-4 mb-5">
    <a href="" class=" text-orange-500 no-underline text-xl hover:underline hover:text-blue-200 fa-solid fa-arrow-left fa-xl">
        <i class="mb-4 flex items-center my-auto ml-8">Back</i>
    </a>

    <form action="/add" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="justify-center mx-auto items-center flex flex-col">
        @if (Session::has('err'))
        <h1 class="font-montserat text-base text-red-500 mt-3 font-bold">{{ session('err') }}</h1>
        @endif
          <h1 class="font-montserat text-base mt-3 font-bold">Title: </h1>
          <input type="text" name="title" class="input input-bordered w-full lg:w-[50%]">
          @error('title')
          <h1 class="font-montserat text-base text-red-500 mt-3 font-bold">{{ $message }}</h1>
          @enderror
          <h1 class="font-montserat text-base mt-3 font-bold">File: </h1>
          <input type="file" class="file-input file-input-bordered w-full lg:w-[50%]" name="file">
          @error('file')
          <h1 class="font-montserat text-base text-red-500 mt-3 font-bold">{{ $message }}</h1>
          @enderror
          <h1 class="font-montserat text-base mt-3 font-bold">Body: </h1>
          <textarea name="body" id="body" rows="10" class="textarea textarea-bordered w-full lg:w-[50%]"></textarea>
          @error('body')
          <h1 class="font-montserat text-base text-red-500 mt-3 font-bold">{{ $message }}</h1>
          @enderror
          <button type="submit" class="btn btn-primary w-full lg:w-[50%] mt-3">Submit</button>
      </div>
  </form>

    <div id="output" class="mt-3"></div>
</div>
<script>
    const bodyTextarea = document.getElementById('body');
    const outputDiv = document.getElementById('output');

    bodyTextarea.addEventListener('input', () => {
        // Mengganti newline dengan tag <p> saat pengguna menekan Enter
        const paragraphs = bodyTextarea.value.split('\n').map(para => `<p>${para}</p>`).join('<br>');
        
        // Menampilkan paragraf yang dihasilkan dalam div output
        bodyTextarea.innerHTML = paragraphs;
    });
</script>
@endsection