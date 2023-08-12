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

<div class="my-10 md:my-24 container mx-auto flex flex-col md:flex-row shadow-sm overflow-hidden" x-data="{ testimonialActive: 2 }" x-cloak>
    <div class="relative w-full py-2 md:py-24 bg-indigo-700 md:w-1/2 flex flex-col item-center justify-center">

        <div class="absolute top-0 left-0 z-10 grid-indigo w-16 h-16 md:w-40 md:h-40 md:ml-20 md:mt-24"></div>

        <div class="relative text-2xl md:text-5xl py-2 px-6 md:py-6 md:px-1 md:w-64 md:mx-auto text-indigo-100 font-semibold leading-tight tracking-tight mb-0 z-20">
            <span class="md:block">What Our</span>
            <span class="md-block">Customers</span>
            <span class="block">Are Saying!</span>
        </div>

        <div class="absolute right-0 bottom-0 mr-4 mb-4 hidden md:block">
            <button
                class="rounded-l-full border-r bg-gray-100 text-gray-500 focus:outline-none hover:text-indigo-500 font-bold w-12 h-10"
                x-on:click="testimonialActive = testimonialActive === 1 ? 3 : testimonialActive - 1">
                &#8592;
            </button><button
                class="rounded-r-full bg-gray-100 text-gray-500 focus:outline-none hover:text-indigo-500 font-bold w-12 h-10"
                x-on:click="testimonialActive = testimonialActive >= 3 ? 1 : testimonialActive + 1">
                &#8594;
              </button>
        </div>
    </div>

    <div class="bg-gray-100 md:w-1/2">
        <div class="flex flex-col h-full relative">

            <div class="absolute top-0 left-0 mt-3 ml-4 md:mt-5 md:ml-12">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-200 fill-current w-12 h-12 md:w-16 md:h-16" viewBox="0 0 24 24"><path d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L9.758 4.03c0 0-.218.052-.597.144C8.97 4.222 8.737 4.278 8.472 4.345c-.271.05-.56.187-.882.312C7.272 4.799 6.904 4.895 6.562 5.123c-.344.218-.741.4-1.091.692C5.132 6.116 4.723 6.377 4.421 6.76c-.33.358-.656.734-.909 1.162C3.219 8.33 3.02 8.778 2.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C2.535 17.474 4.338 19 6.5 19c2.485 0 4.5-2.015 4.5-4.5S8.985 10 6.5 10zM17.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L20.758 4.03c0 0-.218.052-.597.144-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.944-.33.358-.656.734-.909 1.162C14.219 8.33 14.02 8.778 13.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C13.535 17.474 15.338 19 17.5 19c2.485 0 4.5-2.015 4.5-4.5S19.985 10 17.5 10z"/></svg>
            </div>

            <div class="h-full relative z-10">
                <div x-show.immediate="testimonialActive === 1">
                    <p class="text-gray-600 serif font-normal text-sm italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 1">
                        Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                    </p>
                </div>

                <div x-show.immediate="testimonialActive === 2">
                    <p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 2">
                        Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.
                    </p>
                </div>

                <div x-show.immediate="testimonialActive === 3">
                    <p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 3">
                        Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.
                    </p>
                </div>
            </div>

            <div class="flex my-4 justify-center items-center">
                <button
                    @click.prevent="testimonialActive = 1"
                    class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline inline-block rounded-full mx-2"
                    :class="{'h-12 w-12 opacity-25 bg-indigo-300 text-gray-600': testimonialActive != 1, 'h-16 w-16 opacity-100 bg-indigo-600 text-white': testimonialActive == 1 }"
                >JD</button>
                <button
                    @click.prevent="testimonialActive = 2"
                    class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-16 w-16 inline-block bg-indigo-600 rounded-full mx-2"
                    :class="{'h-12 w-12 opacity-25 bg-indigo-300 text-gray-600': testimonialActive != 2, 'h-16 w-16 opacity-100 bg-indigo-600 text-white': testimonialActive == 2 }"
                >WD</button>
                <button
                    @click.prevent="testimonialActive = 3"
                    class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-12 w-12 inline-block bg-indigo-600 rounded-full mx-2"
                    :class="{'h-12 w-12 opacity-25 bg-indigo-300 text-gray-600': testimonialActive != 3, 'h-16 w-16 opacity-100 bg-indigo-600 text-white': testimonialActive == 3 }"
                >JW</button>
            </div>

            <div class="flex justify-center px-6 pt-2 pb-6 md:py-6">
                <div class="text-center" x-show="testimonialActive == 1">
                    <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">John Doe</h2>
                    <small class="text-gray-500 text-xs md:text-sm truncate">CEO, ABC Inc.</small>
                </div>

                <div class="text-center" x-show="testimonialActive == 2">
                    <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">Winter Doe</h2>
                    <small class="text-gray-500 text-xs md:text-sm truncate">CTO, XYZ Corp.</small>
                </div>

                <div class="text-center" x-show="testimonialActive == 3">
                    <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">John Wick</h2>
                    <small class="text-gray-500 text-xs md:text-sm truncate">Product Manager, Fake Corp.</small>
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
