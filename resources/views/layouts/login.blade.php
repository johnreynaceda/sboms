<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-gradient-to-r from-blue-600 to-blue-700">
       
    <img src="{{asset('images/sbologo.png')}}" class="h-5/5 w-2/5 opacity-25 absolute" alt="">

    <div class=" relative flex justify-center items-center h-screen">
    <div class="bg-blue-400 h-3/4 w-2/6 rounded-tl-lg rounded-bl-lg"><img src="{{asset('images/sksu2.jpg')}}" class="h-full rounded-tl-lg rounded-bl-lg" alt=""></div>
        <div class="bg-white h-3/4 w-2/6 rounded-tr-lg rounded-br-lg p-3 px-4">
        <div class="bg-white p-2 w-20 border-gray-500 flex items-center justify-center rounded-md shadow-lg"><img src="{{asset('images/sbologo.png')}}" class="h-16 " alt=""></div>
            <div class=" p-2 mt-5 ">
                <h1 class="font-black text-gray-800 text-xl">LOGIN</h1>
                <h1 class=" text-sm text-gray-600">Please enter a valid email and password.</h1>
            </div>
            <form action="">
                <div class=" p-5 px-10">
                    <input type="mail" class="w-full h-10 border rounded-tl rounded-tr focus:outline-none focus:shadow-outline-blue px-4" placeholder="Email">
                    <input type="text" class="w-full h-10 border rounded-bl rounded-br focus:outline-none focus:shadow-outline-blue px-4" placeholder="Password">
                    <button class=" bg-blue-600 mt-8 p-2 text-center focus:outline-none  w-full shadow-lg font-bold rounded-lg text-white">SIGN IN</button>
                    <h1 class="mt-2 text-sm">Forgot Password? <a href="" class="text-blue-700"> Click Here!</a></h1>
                </div>
            </form>
        </div>
        <div class=" absolute bottom-12 right-56 text-white">Powered By: <span class="text-com  ">J2BrosSolution</span></div>
    </div>
  

        @livewireScripts
    </body>
</html>
