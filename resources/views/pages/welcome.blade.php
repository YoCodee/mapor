@extends('layout.main')

@include('partials.navbar')

@section('content')
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="gambar">
            <div class="smk1" style="margin: auto">
              <h1 class="md:text-7xl text-5xl m-auto text-center items-center justify-center font-bold text-white" data-aos="fade-down"
              data-aos-easing="linear"
              data-aos-duration="1500">
                Nama <span>Desa</span>
              </h1>
              <p class="animate__animated animate__fadeInUp animate__slow md:text-md text-sm">
                Anyone who as never made a mistake has never tried anything news
              </p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="gambar2"
          >
            <h1 class="md:text-7xl text-5xl m-auto text-center items-center justify-center font-bold text-white">
              SMK Negeri 1 Pangkalpinang
            </h1>
          </div>
        </div>
        <div class="carousel-item">
          <div
            class="gambar3">
            <div class="smk2" style="margin: auto">
              <h1 class="md:text-7xl text-5xl m-auto text-center items-center justify-center font-bold text-white">
                Pengumuman Hasil PPDB <span>2023/2024</span>
              </h1>
              <div >
                <a
                  href=""
                  style="
                  color: white;
                  text-decoration: none;
                  text-align: center;
                  "
                  >Telurusi Lebih lanjut</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  @include('pages.body')

@endsection
