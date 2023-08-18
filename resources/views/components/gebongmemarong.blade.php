@extends('layout.main')

@include('partials.navbar')

@section('content')

<style>
    .images {
    background: rgba(0, 0, 0, 0.6) url("https://www.mongabay.co.id/wp-content/uploads/2020/08/Rumah-asli-warga-Desa-Mapur-di-wilayah-pesisir-yang-ditandai-dengan-dinding-kayunya.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-blend-mode: darken;
  }

  html{
    scroll-behavior: smooth;
  }

</style>
<div class="images">
    <div class="smk1 p-20 lg:p-36" style="margin: auto">
        <h1 class="md:text-7xl text-5xl m-auto text-center items-center justify-center font-bold text-white" >
          Gebong <span>Memarong</span>
        </h1>
        <p class="animate__animated animate__fadeInUp animate__slow md:text-md text-sm">
          Anyone who as never made a mistake has never tried anything new
        </p>
      </div>
</div>
<div class="breadcomp mt-5">
    <div class="flex flex-wrap justify-center align-center gap-4 text-center px-4 text-blue-600 pr-1 underline font-arimo lg:text-lg">
        <a href="#penginapan" class="hover:text-[#fedc56]">Penginapan Tradisional</a>
        <a href="#museum" class="hover:text-[#fedc56]">Museum Mapor</a>
        <a href="#balai" class="hover:text-[#fedc56]">Balai Adat</a>

    </div>
</div>
<hr class="mt-4">
<div class="px-4">
<div class=" mx-auto ">

    <main class="mt-10">

      <div class="mb-4 md:mb-0 w-full mx-auto relative" id="penginapan">
        <div class="px-4 lg:px-0">
          <h2 class="text-4xl font-semibold text-gray-800 leading-tight font-montserat">
           Penginapan Tradisional
          </h2>
      </div>

      <div class="flex flex-col font-arimo ">

        <div class="px-4 lg:px-0 mt-2 text-gray-700 text-lg leading-relaxed w-full ">
          <p class="pb-6">Pembangunan Kampong Adat Gebong Memarong tidak terlepas dari konsep pengembangan dan pemberdayaan masyarakat oleh korporasi itu dengan melibatkan masyarakat Dusun Aikabik, mulai dari menyiapkan bahan bangunan, tenaga kerja, administrasi, hingga dapat terlaksana proses pembangunan dengan cepat.

            Dalam waktu 60 hari pada Juli hingga Agustus 2022, tim mampu membangun enam unit "memarong" atau balai, yaitu satu balai adat dengan ukuran 9X9 meter, satu galeri ukuran 7X7 meter, dan empat rumah tradisional yang dimanfaatkan untuk penginapan berukuran 5X5 meter.

          </p>

          <div class="border-l-4 border-gray-500 pl-4 mb-6 italic rounded">
            Rumah ini berbentuk griya panggung, bermaterial fisik bangunan dengan memanfaatkan sumber daya hutan, seperti alas rumah menggunakan kayu ibul, beratap daun nipah, serta berdinding kulit kayu.

            Saat ini, tim juga masih dalam proses melengkapi sarana dan prasarana penunjang kenyamanan para pengunjung.
          </div>

          <p class="pb-6">  Guna melengkapi keutuhan dari konsep yang direncanakan sejak awal,  perusahaan tambang itu diharapkan memberikan dukungan penuh sehingga kawasan itu bisa diresmikan tahun ini.
            Karena, masih ada prosesi memindahkan "memarong" lama yang akan difungsikan sebagai museum budaya ke dalam Gebong Memarong yang telah dibangun sehingga komplet menjadi tujuh bubung.

            Setelah seluruh tahapan penyediaan bangunan selesai, komplet tujuh bubung rumah, LAM akan membuka kawasan itu untuk umum dengan konsep paket wisata budaya yang menitikberatkan kawasan sebagai pusat edukasi pengenalan budaya lokal.</p>
          <p class="pb-6">    Dalam konsep ini, pengunjung tidak hanya datang dan berfoto, namun mendapatkan pengenalan budaya lokal dan berinteraksi dengan warga yang dipandu langsung oleh orang-orang Adat Mapor.

            Dengan konsep seperti itu, Kampung Adat Gebong Memarong akan menjadi daya tarik wisata baru dan mampu menciptakan peluang kerja serta menjadi sumber ekonomi alternatif sehingga mampu menyejahterakan masyarakat adat di Aikabik, Kecamatan Belinyu..</p>



        </div>
</main>
    <main class="mt-10" id="museum">

      <div class="mb-4 md:mb-0 w-full mx-auto relative" >
        <div class="px-4 lg:px-0">
          <h2 class="text-4xl font-semibold text-gray-800 leading-tight font-montserat">
            Museum Mapor

          </h2>
      </div>

      <div class="flex flex-col font-arimo ">

        <div class="px-4 lg:px-0 mt-2 text-gray-700 text-lg leading-relaxed w-full ">
          <p class="pb-6"> Ketua Lembaga Adat Mapur Asih Harmoko, menceritakan mereka sudah lama berniat untuk membangun memarong, namun masih terkendala beberapa hal. Namun dengan dukungan penuh dari PT Timah Tbk mereka bisa merealisasikan keinginan ini. </p>

          <div class="border-l-4 border-gray-500 pl-4 mb-6 italic rounded">
            “Rencananya kami akan membangun enam unit memarong, dimana empat unit itu berupa penginapan tradisional, satu unit berupa galeri kerajinan dari masyarakat kami dan satu unitnya lagi berupa balai pertemuan dan satu unit yang ada ini nanti akan dipergunakan untuk museum. Jadi pas untuk tujuh bubung,” ujarnya.
          </div>




        </div>
</main>
    <main class="mt-10">

      <div class="mb-4 md:mb-0 w-full mx-auto relative" id="balai">
        <div class="px-4 lg:px-0">
          <h2 class="text-4xl font-semibold text-gray-800 leading-tight font-montserat">
            Balai Adat
          </h2>
      </div>

      <div class="px-4 lg:px-0 mt-2 text-gray-700 text-lg leading-relaxed w-full ">
        <p class="pb-6"> Ketua Lembaga Adat Mapur Asih Harmoko, menceritakan mereka sudah lama berniat untuk membangun memarong, namun masih terkendala beberapa hal. Namun dengan dukungan penuh dari PT Timah Tbk mereka bisa merealisasikan keinginan ini. </p>

        <div class="border-l-4 border-gray-500 pl-4 mb-6 italic rounded">
          “Rencananya kami akan membangun enam unit memarong, dimana empat unit itu berupa penginapan tradisional, satu unit berupa galeri kerajinan dari masyarakat kami dan satu unitnya lagi berupa balai pertemuan dan satu unit yang ada ini nanti akan dipergunakan untuk museum. Jadi pas untuk tujuh bubung,” ujarnya.
        </div>




      </div>
</main>

</div>
</div>
@include('partials.footer')
@endsection
