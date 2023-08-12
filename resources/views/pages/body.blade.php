<div class="wrapper px-[7%] pt-24">
  <div class="wrup3">
      <div class="flex justify-center">
      <div
      class="flex flex-col justify-center items-center rounded-lg    md:max-w-7xl md:flex-row">
      <img
        class="h-96 w-72 lg:w-full mb-5 lg:mb-5  lg:h-full"
        src="{{ asset('images/image-removebg-preview (11).png')}}"
        alt="" />
      <div class="flex flex-col  ml-8 p-0 ">
        <h5
          class="mb-2  font-extrabold text-black text-5xl font-montserat" data-aos="fade-left">
          SELAMAT DATANG DI DESA MAPUR
        </h5>
        <p class=" mb-4 text-base lg:text-lg text-neutral-600 font-arimo" data-aos="fade-left">
         Suku Mapur merupakan salah satu suku di Provinsi Sumatra Selatan yang tinggal di Desa Air Abik, Pejem dan Tuing di Kecamatan Belinyu, Kabupaten Bangka Belitung. Dari tiga desa tersebut, persebaran Orang Suku Mapur terbanyak ada di Dusun Air Abik.[1] Suku Mapur dibedakan berdasarkan lokasi tempat tinggalnya.[2] Orang Mapur yang hidup di pedalaman, atau di hutan-hutan, dan yang tinggal di pesisir pantai. Orang Mapur yang tinggal di pesisir pantai lebih maju peradabannya daripada yang tinggal di pedalaman. Hal ini karena mereka lebih banyak menyerap kebudayaan dan pengetahuan baru.
          <br>
          <br>
         Suku Mapur diduga merupakan suku tertua yang tinggal di Pulau Bangka. Soal kapan Suku Mapur dan dari mana asalnya masih spekulatif. Diduga mereka pertama kali mendiami Air Abik yang lokasinya di hulu Sungai Mapur.[1] Menurut legenda, nenek moyang Orang Mapur berasal dari Majapahit. Konon, ada seorang bangsawan Majapahit di Mojokerto, Jawa Timur, yang menolak menjadi Islam. Sekitar abad ke-16 penolakan itu ditindaklanjuti dengan melarikan diri lewat laut dan terdampar di Tanjung Tuing.
        </p>
  
  
        <button class="btn bg-[#000000] w-24 font-montserat text-white hover:bg-orange-600">Lihat</button>
      </div>
    </div>
    </div>
  
    <div class="wrapper1 flex flex-wrap mb-5">
      <div class="container">
        <i class="fas fa-user"></i>
        <span class="num" data-val="2492">000</span>
        <span class="text">Jumlah Penduduk</span>
      </div>
      <div class="container">
        <i class="fas fa-smile-beam"></i>
        <span class="num" data-val="745">000</span>
        <span class="text">Jumlah Kepala Keluarga</span>
      </div>
      <div class="container">
        <i class="fas fa-list"></i>
        <span class="num" data-val="343">000</span>
        <span class="text">Jumlah Remaja</span>
      </div>
      <div class="container">
        <i class="fas fa-star"></i>
        <span class="num" data-val="280">000</span>
        <span class="text">Five Stars</span>
      </div>
    </div>
  
  </div>
  </div>
  <script>
      let valueDisplays = document.querySelectorAll(".num");
  let interval = 4000;
  valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute("data-val"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function () {
      startValue += 1;
      valueDisplay.textContent = startValue;
      if (startValue == endValue) {
        clearInterval(counter);
      }
    }, duration);
  });
  </script>
  <style>
  .wrup3{
      background:  url("./images/trans.png");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
  
  }
  
  
  .wrapper1 {
  margin: auto;
    width: 80vw;
  
    display: flex;
    justify-content: space-around;
    gap: 10px;
  }
  .container {
    width: 28vmin;
    height: 28vmin;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    padding: 1em 0;
    position: relative;
    font-size: 16px;
    border-radius: 0.5em;
    background-color: ;
    border-bottom: 10px solid #fedc56;
  }
  i {
    color: #fedc56;
    font-size: 2.5em;
    text-align: center;
  }
  span.num {
    color: #000000;
    display: grid;
    place-items: center;
    font-weight: 600;
    font-size: 3em;
  }
  span.text {
    color: #000000;
    font-size: 1em;
    text-align: center;
    pad: 0.7em 0;
    font-weight: 400;
    line-height: 0;
  }
  @media screen and (max-width: 1024px) {
    .wrapper {
      width: 85vw;
    }
    .container {
      height: 26vmin;
      width: 26vmin;
      font-size: 12px;
    }
  }
  @media screen and (max-width: 768px) {
    .wrapper {
      width: 90vw;
      flex-wrap: wrap;
      gap: 30px;
    }
    .container {
      width: calc(50% - 40px);
      height: 30vmin;
      font-size: 14px;
    }
  }
  @media screen and (max-width: 480px) {
    .wrapper {
      gap: 15px;
    }
    .container {
      width: 100%;
      height: 25vmin;
      font-size: 8px;
    }
  }
  </style>
  
  