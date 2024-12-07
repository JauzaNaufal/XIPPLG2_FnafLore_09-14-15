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

  <!-- Home Section -->
  <div id="home" class="h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('assets/images/background-security.jpg');">
    <div class="text-center flex flex-col items-center">
      <img src="assets/images/title-fnaf.png" class="w-3/4 mb-8" alt="Title Image">
      <a href="#freddy">
        <button class="bg-transparent text-white py-5 px-10 rounded-lg text-4xl uppercase hover:text-red-600 transition duration-300 font-custom">
          Start
        </button>
      </a>
    </div>
  </div>

  <!-- Freddy Section -->
  <div id="freddy" class="pt-16 h-screen flex flex-col md:flex-row items-center justify-left bg-black text-white p-8 space-y-8 md:space-y-0 md:space-x-8">
    <div class="flex-shrink-0 md:ml-12"> 
      <img src="assets/images/Freddy.png" alt="Freddy Fazbear" class="w-70 h-auto">
    </div>
    <div class="text-left">
      <h1 class="text-4xl font-bold mb-4">Freddy Fazbear</h1>
      <p class="mb-2"><span class="font-semibold">Jenis :</span> Animatronik Beruang</p>
      <p class="mb-2"><span class="font-semibold">Penampilan :</span> Beruang cokelat dengan topi hitam kecil, dasi merah, dan sepatu hitam.</p>
      <h2 class="text-2xl font-bold mt-6 mb-2">Latar Belakang :</h2>
      <p class="text-justify">
        Bagian dari grup animatronik di Freddy Fazbear's Pizza. Restoran ini terlibat dalam kejadian misterius dan pembunuhan anak-anak, yang menyebabkan roh-roh terperangkap dalam animatronik, termasuk Freddy.
      </p>
    </div>
  </div>

  <!-- Bonnie Section -->
  <div id="bonnie" class="pt-16 flex flex-col md:flex-row-reverse items-center bg-black text-white px-16 md:px-24 py-8 rounded-lg shadow-lg space-y-8 md:space-y-0 md:space-x-8">
    <div class="flex-shrink-0 md:mr-12"> 
      <img src="assets/images/bonnie.png" alt="Bonnie the Bunny" class="w-150 h-auto">
    </div>
    <div class="text-left">
      <h1 class="text-4xl font-bold mb-4">Bonnie the Bunny</h1>
      <p class="mb-2"><span class="font-semibold">Jenis :</span> Animatronik Kelinci</p>
      <p class="mb-2"><span class="font-semibold">Penampilan :</span> Kelinci ungu dengan telinga panjang, dasi merah.</p>
      <h2 class="text-2xl font-bold mt-6 mb-2">Latar Belakang :</h2>
      <p class="text-justify">
        Salah satu animatronik di Freddy Fazbear's Pizza. Bonnie terkenal dalam kejadian misterius dengan roh-roh yang terperangkap, yang menyebabkan anak-anak hilang.
      </p>
    </div>
  </div>

  <!-- Chica Section -->
  <div id="chica" class="pt-16 h-screen flex flex-col md:flex-row items-center justify-left bg-black text-white p-8 space-y-8 md:space-y-0 md:space-x-8">
    <div class="flex-shrink-0 md:ml-12"> 
      <img src="assets/images/cika.png" alt="Chica The Chicken" class="w-150 h-auto">
    </div>
    <div class="text-left">
      <h1 class="text-4xl font-bold mb-4">Chica The Chicken</h1>
      <p class="mb-2"><span class="font-semibold">Jenis :</span> Animatronik Ayam</p>
      <p class="mb-2"><span class="font-semibold">Penampilan :</span>Ayam kuning dengan paruh oranye, topi koki putih, dan apron bertuliskan "LET'S EAT!".</p>
      <h2 class="text-2xl font-bold mt-6 mb-2">Latar Belakang :</h2>
      <p class="text-justify">
        Chica adalah animatronik di Freddy Fazbear's Pizza yang terlibat dalam pembunuhan anak-anak di restoran. Kejadian misterius ini mengakibatkan roh-roh anak-anak terperangkap dalam animatronik seperti Chica, menjadikannya berbahaya pada malam hari.
      </p>
    </div>
  </div>

  <!-- Foxy Section -->
  <div id="foxy" class="pt-16 flex flex-col md:flex-row-reverse items-center bg-black text-white px-16 md:px-24 py-8 rounded-lg shadow-lg space-y-8 md:space-y-0 md:space-x-8">
    <div class="flex-shrink-0 md:mr-12">
      <img src="assets/images/Foxy.png" alt="Foxy the Pirate Fox" class="w-150 h-auto">
    </div>
    <div class="text-left">
      <h1 class="text-4xl font-bold mb-4">Foxy the Pirate Fox</h1>
      <p class="mb-2"><span class="font-semibold">Jenis :</span> Animatronik Rubah</p>
      <p class="mb-2"><span class="font-semibold">Penampilan :</span> Rubah merah dengan telinga robek, mata kuning, dan mengenakan celana pendek hitam serta bandana merah.</p>
      <h2 class="text-2xl font-bold mt-6 mb-2">Latar Belakang :</h2>
      <p class="text-justify">
        Foxy adalah animatronik di Freddy Fazbear's Pizza yang rusak dan mengalami kerusakan parah. Terlibat dalam pembunuhan anak-anak di restoran, Foxy menjadi animatronik yang sangat menakutkan dengan perilaku agresif di malam hari.
      </p>
    </div>
  </div>

</body>
</html>
