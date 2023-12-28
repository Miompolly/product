<!-- resources/views/layouts/master.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Laravel')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-900 fixed w-screen">


    <div class="bg-black w-full flex text-white py-6 px-4 justify-between mb-3">
        <div class="text-2xl font-bold">Company Name</div>
        <div><i class="fa-solid fa-gear"></i></div>
    </div>


    <div class="w-full flex gap-0 h-full bg-gray-800">


        <div class="w-1/6 bg-white h-screen p-4">
            <div class="flex items-center justify-center">Hello</div>
        </div>

        <div class="w-5/6 flex items-center justify-center h-full p-8">
            @yield('content')
        </div>

    </div>

</body>

</html>
