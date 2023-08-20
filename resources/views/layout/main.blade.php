<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" href="aos-by-red.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Memarong.id</title>
</head>
<body class="">
    @yield('content')

</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
<script>
     AOS.init({
        duration: 1000,
        once: true,
      });
  </script>

  <style>
     html{
    scroll-behavior: smooth;
  }
  </style>
</html>
