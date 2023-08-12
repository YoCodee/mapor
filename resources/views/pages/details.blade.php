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
<div class="wrapper2">
<div class="wrapper px-[14%] pt-14">
    <i class="fa-solid fa-arrow-left fa-xl mb-4 flex items-center my-auto"> <a href="" class=" text-orange-500 no-underline text-xl hover:underline hover:text-blue-200" >Back</a></i>
    <div class="header-news justify-center items-center flex text-center bg-white pt-3  max-w-xl mx-auto shadow-xl   ">
        <div class="relative">
        <h1 class="font-montserat text-5xl font-bold">Berita Hari Ini</h1>
        <p class="mt-3 text-neutral-500 ">
            <small>Published <u>13.01.2022</u> by
              <a href="#!">Admin</a></small>
        </p>
    </div>
    </div>
    <div class="image-news h-96">
        <img src="{{ asset('images/P1060362.JPG')}}" class="object-cover max-w-full max-h-full" alt="Image" style="width: 100%; height: 100%;">
    </div>
    <div class="isi-news mt-5">
        <p class="font-arimo text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aut fuga officia nostrum eius eum id officiis recusandae fugiat harum laborum natus, maxime atque totam delectus iste inventore iure debitis, ullam porro facere at. Iusto nam architecto perferendis! Expedita quam voluptate eius aperiam. Dolores expedita odit id ratione repellendus perspiciatis assumenda atque animi, hic et explicabo suscipit quas corrupti aut, sunt nihil possimus maxime voluptas unde, quis placeat? Amet eos molestias dolor ipsa enim fugiat hic magni suscipit aliquid quam expedita qui quaerat, omnis nemo facilis aliquam animi esse, voluptatibus itaque illo totam debitis, beatae deleniti. Natus quibusdam in labore animi suscipit neque modi! Excepturi dicta amet, officia voluptates id neque ipsam, inventore quaerat ipsum esse provident consectetur. Tempora corrupti dolorem exercitationem ipsum nobis molestiae soluta, voluptate modi laboriosam recusandae quae voluptatum quasi quia non odio doloremqu.</p>
        <p class="font-arimo text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aut fuga officia nostrum eius eum id officiis recusandae fugiat harum laborum natus, maxime atque totam delectus iste inventore iure debitis, ullam porro facere at. Iusto nam architecto perferendis! Expedita quam voluptate eius aperiam. Dolores expedita odit id ratione repellendus perspiciatis assumenda atque animi, hic et explicabo suscipit quas corrupti aut, sunt nihil possimus maxime voluptas unde, quis placeat? Amet eos molestias dolor ipsa enim fugiat hic magni suscipit aliquid quam expedita qui quaerat, omnis nemo facilis aliquam animi esse, voluptatibus itaque illo totam debitis, beatae deleniti. Natus quibusdam in labore animi suscipit neque modi! Excepturi dicta amet, officia voluptates id neque ipsam, inventore quaerat ipsum esse provident consectetur. Tempora corrupti dolorem exercitationem ipsum nobis molestiae soluta, voluptate modi laboriosam recusandae quae voluptatum quasi quia non odio doloremqu.</p>
        <p class="font-arimo text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aut fuga officia nostrum eius eum id officiis recusandae fugiat harum laborum natus, maxime atque totam delectus iste inventore iure debitis, ullam porro facere at. Iusto nam architecto perferendis! Expedita quam voluptate eius aperiam. Dolores expedita odit id ratione repellendus perspiciatis assumenda atque animi, hic et explicabo suscipit quas corrupti aut, sunt nihil possimus maxime voluptas unde, quis placeat? Amet eos molestias dolor ipsa enim fugiat hic magni suscipit aliquid quam expedita qui quaerat, omnis nemo facilis aliquam animi esse, voluptatibus itaque illo totam debitis, beatae deleniti. Natus quibusdam in labore animi suscipit neque modi! Excepturi dicta amet, officia voluptates id neque ipsam, inventore quaerat ipsum esse provident consectetur. Tempora corrupti dolorem exercitationem ipsum nobis molestiae soluta, voluptate modi laboriosam recusandae quae voluptatum quasi quia non odio doloremqu.</p>
        <p class="font-arimo text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aut fuga officia nostrum eius eum id officiis recusandae fugiat harum laborum natus, maxime atque totam delectus iste inventore iure debitis, ullam porro facere at. Iusto nam architecto perferendis! Expedita quam voluptate eius aperiam. Dolores expedita odit id ratione repellendus perspiciatis assumenda atque animi, hic et explicabo suscipit quas corrupti aut, sunt nihil possimus maxime voluptas unde, quis placeat? Amet eos molestias dolor ipsa enim fugiat hic magni suscipit aliquid quam expedita qui quaerat, omnis nemo facilis aliquam animi esse, voluptatibus itaque illo totam debitis, beatae deleniti. Natus quibusdam in labore animi suscipit neque modi! Excepturi dicta amet, officia voluptates id neque ipsam, inventore quaerat ipsum esse provident consectetur. Tempora corrupti dolorem exercitationem ipsum nobis molestiae soluta, voluptate modi laboriosam recusandae quae voluptatum quasi quia non odio doloremqu.</p>
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

  body{
            background-image: url("./images/11852424_4853433.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            height: 100%;
        }
/*
  .wrapper2{
    background: url("./images/trans2.png");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    width: 100%;
    height: 100vh;
  } */
</style>


