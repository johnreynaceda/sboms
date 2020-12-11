<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{asset('images/sbologo.png')}}" />
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/earlyaccess/hanna.css">
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <style>
                    /* Rules for sizing the icon. */
        .material-icons.md-18 { font-size: 18px; }
        .material-icons.md-24 { font-size: 24px; }
        .material-icons.md-36 { font-size: 36px; }
        .material-icons.md-48 { font-size: 48px; }

        /* Rules for using icons as black on a light background. */
        .material-icons.md-dark { color: rgba(0, 0, 0, 0.54); }
        .material-icons.md-dark.md-inactive { color: rgba(0, 0, 0, 0.26); }

        /* Rules for using icons as white on a dark background. */
        .material-icons.md-light { color: rgba(255, 255, 255, 1); }
        .material-icons.md-light.md-inactive { color: rgba(255, 255, 255, 0.3); }

         /* width */
         ::-webkit-scrollbar {
              width: 3px;
            }
            
            /* Track */
            ::-webkit-scrollbar-track {
              box-shadow: inset 0 0 5px white; 
              border-radius: 10px;
            }
             
            /* Handle */
            ::-webkit-scrollbar-thumb {
              background: #006FBF; 
              border-radius: 10px;
            }
            
            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
              background: #006FBF; 
            }
        </style>
        <style>
          [x-cloak] {
            display: none;
          }
      
          .duration-300 {
            transition-duration: 300ms;
          }
      
          .ease-in {
            transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
          }
      
          .ease-out {
            transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
          }
      
          .scale-90 {
            transform: scale(.9);
          }
      
          .scale-100 {
            transform: scale(1);
          }
        </style>
        <style>
          .model-open{
          overflow: hidden; 
            height: 100vh;
          }
        </style>
        
    </head>
    <body class="font-sans antialiased bg-gray-200  overflow-x-hidden">
     <div class="wrapper fixed z-50 h-screen w-screen flex justify-center  items-center bg-gradient-to-r from-blue-600 via-blue-800 to-blue-600 inset-0">
        <div class="bg-white w-28 rounded-md shadow-md p-1 h-28 animate-bounce ">
        <img src="{{asset('images/sbologo.png')}}" alt="">
        <h1 class="text-center text-white">SBOMS</h1>
        </div>
     </div>
   <div class="section">
       @include('layouts.partials.navbar')
       
        @yield('content')
       
       @include('layouts.partials.footer')
   </div>
        @livewireScripts
       
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
        <script>
            new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
    { year: '2008', value: 20 },
    { year: '2009', value: 10 },
    { year: '2010', value: 5 },
    { year: '2011', value: 5 },
    { year: '2012', value: 20 }
  ],
  // The name of the data record attribute that contains x-values.
  xkey: 'year',
  // A list of names of data record attributes that contain y-values.
  ykeys: ['value'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['Value']
});
        </script>
        <script>
          $(document).ready(function() {
  setTimeout(function() {
    $('.wrapper').addClass('hidden');
    
  }, 3000);
});



jQuery(function(){

  $(window).onload(function(){
  
  $('.wrapper').removeClass('preload');
  
  });

});
        </script>
    </body>
</html>
