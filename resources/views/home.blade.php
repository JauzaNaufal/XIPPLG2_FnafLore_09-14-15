<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title> 
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
  </style>
</head>
<body class="bg-black text-white min-h-screen flex flex-col font-custom text-3xl">

 
  <nav class="bg-black bg-opacity-30 backdrop-filter backdrop-blur-lg text-white py-4 px-6 w-full flex justify-center space-x-8 text-3xl font-medium font-custom">
    <a href="#" class="hover:text-red-600 capitalize">Freddy</a>
    <a href="#" class="hover:text-red-600 capitalize">Bonnie</a>
    <a href="#" class="hover:text-red-600 uppercase">Home</a> 
    <a href="#" class="hover:text-red-600 capitalize">Chica</a>
    <a href="#" class="hover:text-red-600 capitalize">Foxy</a>
  </nav>


  <main class="flex-1 flex flex-col items-center justify-center bg-cover bg-center text-center" style="background-image: url('assets/images/background-security.jpg');">
    <img src="assets/images/title-fnaf.png" class="w-1/3 mb-8" />
    <button class="bg-transparent text-white py-5 px-10 rounded-lg text-4xl uppercase hover:text-red-600 transition duration-300 font-custom">
      Start
    </button>
  </main>
</body>
</html>
