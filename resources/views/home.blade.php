<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Freddy Fazbear</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @font-face {
      font-family: 'fnaffont';
      src: url('assets/font/five-nights-at-freddys.ttf') format('truetype');
      font-weight: normal;
      font-style: normal;
    }
    .font-custom {
      font-family: 'fnaffont';
    }

    html {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body class="bg-black text-white font-custom text-3xl">

  <nav class="bg-black bg-opacity-30 backdrop-filter backdrop-blur-lg text-white py-4 px-6 w-full flex justify-center space-x-8 text-3xl font-medium font-custom sticky top-0 z-10">
    <a href="#freddy" class="hover:text-red-600 capitalize">Freddy</a>
    <a href="#bonnie" class="hover:text-red-600 capitalize">Bonnie</a>
    <a href="#home" class="hover:text-red-600 uppercase">Home</a>
    <a href="#chica" class="hover:text-red-600 capitalize">Chica</a>
    <a href="#foxy" class="hover:text-red-600 capitalize">Foxy</a>
  </nav>

  <div id="home" class="h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('assets/images/background-security.jpg');">
  <div class="text-center flex flex-col items-center">
    <img src="assets/images/title-fnaf.png" class="w-3/4 mb-8" alt="Title Image">
    <button class="bg-transparent text-white py-5 px-10 rounded-lg text-4xl uppercase hover:text-red-600 transition duration-300 font-custom">
      Start
    </button>
  </div>
</div>



    <div id="freddy" class="flex flex-col md:flex-row items-center justify-center bg-black text-white h-screen p-8 space-y-8 md:space-y-0 md:space-x-8">
  <div class="flex-shrink-0">
    <img src="assets/images/Freddy.png" alt="Freddy Fazbear" class="w-150 h-auto">
  </div>

  <div class="text-left max-w-lg">
    <h1 class="text-4xl mb-4 ">Freddy Fazbear</h1>
    <p class="mb-2"><span class="">Jenis:</span> Animatronik beruang</p>
    <p class="mb-2"><span class="">Penampilan:</span> Beruang cokelat dengan topi hitam kecil, dasi merah, dan sepatu hitam.</p>
    <h2 class="text-2xl mt-6 mb-2 ">Latar Belakang:</h2>
    <p class="leading-relaxed text-justify">
      Bagian dari grup animatronik di Freddy Fazbear's Pizza.<br> Restoran ini terlibat dalam kejadian misterius dan pembunuhan anak-anak,<br>
      yang menyebabkan roh-roh terperangkap dalam animatronik, termasuk Freddy.
    </p>
  </div>
</div>

<div id="bonnie" class="flex flex-col md:flex-row items-center justify-center bg-black text-white h-screen p-8 space-y-8 md:space-y-0 md:space-x-8">
  <div class="flex-shrink-0">
    <img src="assets/images/bonnie.png" alt="Bonnie the Bunny" class="w-150 h-auto">
  </div>

  <div class="text-left max-w-lg">
    <h1 class="text-4xl mb-4 ">Bonnie the Bunny</h1>
    <p class="mb-2"><span class="">Jenis:</span> Animatronik Kelinci</p>
    <p class="mb-2"><span class="">Penampilan:</span> Kelinci ungu dengan <br> telinga panjang, dasi merah, dan sepatu hitam.</p>
    <h2 class="text-2xl mt-6 mb-2 ">Latar Belakang:</h2>
    <p class="leading-relaxed text-justify">
    Salah satu animatronik di Freddy Fazbear's Pizza. <br> Bonnie terkenal dalam kejadian misterius <br> dengan roh-roh yang terperangkap, yang <br> menyebabkan anak-anak hilang.
    </p>
  </div>
</div>

<div id="Chika" class="flex flex-col md:flex-row items-center justify-center bg-black text-white h-screen p-8 space-y-8 md:space-y-0 md:space-x-8">
  <div class="flex-shrink-0">
    <img src="assets/images/cika.png" alt="Chica The Chicken" class="w-150 h-auto">
  </div>

  <div class="text-left max-w-lg">
    <h1 class="text-4xl mb-4 ">Chica The Chicken</h1>
    <p class="mb-2"><span class="">Jenis:</span> Animatronik Ayam</p>
    <p class="mb-2"><span class="">Penampilan:</span> Ayam kuning dengan paruh oranye, topi koki putih, dan apron bertuliskan "LET'S EAT!"</p>
    <h2 class="text-2xl mt-6 mb-2 ">Latar Belakang:</h2>
    <p class="leading-relaxed text-justify">
    Chica adalah animatronik di Freddy Fazbear's Pizza <br> yang terlibat dalam pembunuhan anak-anak di restoran. <br> Kejadian misterius ini mengakibatkan roh-roh <br> anak-anak terperangkap dalam animatronik seperti Chica, <br> menjadikannya berbahaya pada malam hari.
    </p>
  </div>
</div>

<div id="foxy" class="flex flex-col md:flex-row items-center justify-center bg-black text-white h-screen p-8 space-y-8 md:space-y-0 md:space-x-8">
  <div class="flex-shrink-0">
    <img src="assets/images/Foxy.png" alt="Foxy the Pirate Fox" class="w-150 h-auto">
  </div>

  <div class="text-left max-w-lg">
    <h1 class="text-4xl mb-4 ">Foxy the Pirate Fox</h1>
    <p class="mb-2"><span class="">Jenis:</span> Animatronik Rubah</p>
    <p class="mb-2"><span class="">Penampilan:</span> Rubah merah dengan telinga robek, mata kuning, <br> dan mengenakan celana pendek hitam <br> serta bandana merah.</p>
    <h2 class="text-2xl mt-6 mb-2 ">Latar Belakang:</h2>
    <p class="leading-relaxed text-justify">
    Foxy adalah animatronik di Freddy Fazbear's Pizza <br> yang rusak dan mengalami kerusakan parah. <br> Terlibat dalam pembunuhan anak-anak di restoran, <br> Foxy menjadi animatronik yang sangat <br> menakutkan dengan perilaku agresif pada malam hari.
    </p>
  </div>
</div>


</body>
</html>

