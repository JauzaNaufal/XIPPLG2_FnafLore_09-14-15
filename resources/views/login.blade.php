<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center min-h-screen bg-cover bg-center bg-fixed relative" 
      style="background-image: url('assets/images/background-login.png');">

    <div class="absolute inset-0 backdrop-blur-md"></div>
    

    <div class="bg-white bg-opacity-80 p-6 rounded-lg shadow-lg w-72 relative z-10">

        <form>

            <div class="mb-3">
                <label class="block text-red-500 font-semibold mb-1" for="username">Username :</label>
                <input class="block w-full px-3 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500" 
                       type="text" id="username" placeholder="Username" required>
            </div>
            

            <div class="mb-4">
                <label class="block text-red-500 font-semibold mb-1" for="password">Password :</label>
                <input class="block w-full px-3 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500" 
                       type="password" id="password" placeholder="Password" required>
            </div>
            

            <div class="text-center">
                <button class="bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-600 transition duration-200" 
                        type="submit">LOGIN</button>
            </div>
        </form>
    </div>
</body>
</html>
