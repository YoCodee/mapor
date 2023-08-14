@extends('layout.main')

@include('partials.navbar')

@section('content')

<div id="controls-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-[320px] overflow-hidden rounded-lg md:h-[444px] lg:h-[708px]">
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/11852424_4853433.jpg')}}" class="img absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"  alt="...">
<div class="smk1 absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
<h1 class=" text-[39px] lg:text-7xl m-auto text-center items-center justify-center font-bold text-white">Nama Desa</h1>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti debitis ab esse rerum consectetur voluptatem.</p>
</div>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <<img src="{{ asset('images/11852424_4853433.jpg')}}" class="img absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"  alt="...">
            <div class="smk1 absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
            <h1 class=" text-[39px] lg:text-7xl m-auto text-center items-center justify-center font-bold text-white">Nama Desa</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti debitis ab esse rerum consectetur voluptatem.</p>
            </div>
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/11852424_4853433.jpg')}}" class="img absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"  alt="...">
            <div class="smk1 absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
            <h1 class=" text-[39px] lg:text-7xl m-auto text-center items-center justify-center font-bold text-white">Nama Desa</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti debitis ab esse rerum consectetur voluptatem.</p>
            </div>
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/11852424_4853433.jpg')}}" class="img absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"  alt="...">
            <div class="smk1 absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
            <h1 class=" text-[39px] lg:text-7xl m-auto text-center items-center justify-center font-bold text-white">Nama Desa</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti debitis ab esse rerum consectetur voluptatem.</p>
            </div>
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/11852424_4853433.jpg')}}" class="img absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"  alt="...">
            <div class="smk1 absolute -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
            <h1 class=" text-[39px] lg:text-7xl m-auto text-center items-center justify-center font-bold text-white">Nama Desa</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti debitis ab esse rerum consectetur voluptatem.</p>
            </div>
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
{{--
 --}}

</div>
  @include('pages.body')
  @include('partials.footer')
<script>

</script>
@endsection



<style>
    .special{
  color: #8CC0DE;


}

.bgcolor.scrolled{
  background-color: black;
}
.btnn{
  color: white;

}
nav.sticky{
  padding:  5px 10px;
  background-color: #07407D;
}
nav{
  padding: 4px 2px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: transparent;
  backdrop-filter: blur;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 9999;
  transition: 0.6s;
}


.btnn::after{
    content: '';
    display: block;
    padding: 0.1rem;
    border-bottom: 0.1rem solid #8CC0DE;
    transform: scalex(0);
    transition: 0.2s linear;
}

.btnn:hover::after{
    transform: scaleX(0.5);
}

.img{
    filter: brightness(50%)
}

</style>
