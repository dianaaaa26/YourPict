<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/build.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" href="/asset/icon.png">
    <title>YourPict</title>
</head>

<body class="bg-gray-100">
    <nav class="top-0 z-40 fixed bg-white w-full shadow-xl">
        <div class="flex items-center justify-between max-w-screen-xl mx-auto gap-4 h-16">
            <div class="flex bi bi-camera-fill text-3xl gap-3 text-red-500">
                <div class="font-fontutama text-3xl text-black">YourPict</div>
            </div>
            <div class="flex px-10 gap-4">
                <div>
                    <a href="#" class="">Home</a>
                </div>
                <div>
                    <a href="#about" class="px-7">About</a>
                </div>
                <div>
                    <a href="/login" class="bg-blue-600 px-5 py-2 rounded-full text-white">
                        Login
                    </a>
                </div>
                <div>
                    <a href="/register" class="bg-red-400 px-4 py-2 rounded-full text-white">
                        SignUp
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('contentlogin')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>


</html>
