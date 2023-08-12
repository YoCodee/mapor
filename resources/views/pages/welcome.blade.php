@extends('layout.main')

@include('partials.navbar')

@section('content')


<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/image-removebg-preview (11).png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('images/image-removebg-preview (11).png')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-4.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
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

    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</div>
  @include('pages.body')
<script>
    import {
  Carousel,
  initTE,
} from "tw-elements";

initTE({ Carousel });
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
  /*

  flex
  justify-between
  items-center
  bg-transparent
  backdrop-blur-sm
  fixed top-0 left-0 right-0 z-10 transition-[0.6s] */
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
.gambar {
  background: rgba(0, 0, 0, 0.6) url("./images/P1060362.JPG");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-blend-mode: darken;

}
.gambar2 {
  background: rgba(0, 0, 0, 0.7) url("./images/P1060362.JPG");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-blend-mode: darken;

}
.gambar3 {
  background: rgba(0, 0, 0, 0.7) url("./images/P1060362.JPG");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  background-blend-mode: darken;

}


.carousel-item .gambar {
  width: 100%;
  height: 708px;
  display: flex;
}

.carousel-item .gambar2 {
  width: 100%;
  height: 708px;
  display: flex;
}

.carousel-item .gambar3 {
  width: 100%;
  height: 708px;
  display: inline-block;
  display: flex;
}

.smk2 h1 {
  margin: auto;
  color: white;
  text-align: center;
  font-size: 3.5rem;
  align-items: center;
  justify-content: center;
}

.smk2 div {
  padding: 12px 10px 12px 10px;
  background-color: #294a70;
  color: white;
  text-align: center;
  border-radius: 15px;
  max-width: 12rem;
  margin: 12px auto;
}


.smk1 p{
  text-align: center;
  color: white;
}

.smk1 h1 span {
  color: orange;
}


</style>
