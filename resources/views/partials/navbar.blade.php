
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

<nav class="">

    <a class="text-3xl font-bold leading-none" href="/">
        <img src="{{ asset('images/logo.png')}}" class="w-20" alt="">
    </a>
    <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-white p-3">
            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:items-center gap-3">
        <li><a class="btnn text-md text-center m-auto justify-center items-center hover:text-[#8CC0DE]  " href="/">Home</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="btnn text-md text-center m-auto justify-center items-center hover:text-[#8CC0DE] " href="/news">News</a></li>
        <li class="text-gray-300 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="btnn text-md text-center m-auto justify-center items-center hover:text-[#8CC0DE] " href="/warisan">Warisan</a></li>
        <li class="text-gray-300 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
       <a class="btnn text-md text-center m-auto justify-center items-center hover:text-[#8CC0DE] " href="/#galeri">Galeri
        </a></li>
        <li class="text-gray-300 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="btnn text-md text-center m-auto justify-center items-center hover:text-[#8CC0DE] " href="/#wisata">Wisata
        </a></li>
        <li class="text-gray-300 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="btnn text-md text-center m-auto justify-center items-center hover:text-[#8CC0DE] " href="/lembaga">Lembaga Adat Mapor
        </a></li>
        <li class="text-gray-300 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="btnn text-md text-center m-auto justify-center items-center hover:text-[#8CC0DE] " href="/gebongmemarong">Gebong Memarong
        </a></li>


    </ul>
    @if (session('role') == 2)
        <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold  rounded-xl transition duration-200" href="/add">Add News</a>
        <a class="hidden lg:inline-block py-2 px-6 mr-4 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200" href="/datanews">Data News</a>
    @endif


</nav>
<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">

        <div class="mt-24">
            <ul>
                <li class="mb-1">
                    <a class="block p-4 text-lg font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="/">Home</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-lg font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="/news">News</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-lg font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="/warisan">Warisan</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-lg font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="/#galeri">Galeri
                    </a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-lg font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="/#wisata">Wisata
                    </a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-lg font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="/lembaga">Lembaga Adat Mapor
                    </a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-lg font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="/gebongmemarong">Gebong Memarong
                    </a>
                </li>

            </ul>
        </div>
        <div class="mt-auto">
            @if (session('role') == 2)
            <div class="pt-6">
                <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold bg-gray-50 hover:bg-gray-100 rounded-xl" href="/add">Add News</a>
                <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl" href="/datanews">Data News</a>
            </div>
            @endif
            <p class="my-4 text-xs text-center text-gray-400">
                <span>Copyright © 2023</span>
            </p>
        </div>
    </nav>
</div>


<script>

    window.addEventListener("scroll", function(){
        var nav = document.querySelector("nav");
        nav.classList.toggle("sticky", window.scrollY > 0);
    })
    const btnElList = document.querySelectorAll(".btnn");

    btnElList.forEach(btnEl => {
      btnEl.addEventListener("click", () =>{
        document.querySelector('.special')?.classList.remove('special')
      btnEl.classList.add("special")
    })
    })

    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });
    </script>
