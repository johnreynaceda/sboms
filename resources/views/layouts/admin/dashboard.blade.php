@extends('layouts.master')
@section('content')
<div class=" h-full p-5">
<div class="header text-2xl text-gray-800 font-bold">DASHBOARD</div>
<div class=" flex space-x-3">
    <div class="w-5/12">
         <div class="bg-white rounded-md shadow-lg p-2">
             <div class="flex items-center">
                 <div class="bg-green-500 flex w-12 h-12 justify-center items-center rounded-lg shadow text-white p-1"><i class="material-icons md-36">groups</i></div>
             <span class="ml-1 font-semibold">OFFICERS</span>
             </div>
             <hr class="mt-2">
             <div class=" mt-4">
                 <h1 class="underline font-semibold">GOVERNOR</h1>
                 <div class=" flex">
                     <div class="">
                     <img src="{{asset('images/profile.jpg')}}" class="h-12 rounded-md" alt="">
                     </div>
                     <div class=" px-3">
                         <h1 class="font-semibold">JUAN DELA CRUZ</h1>
                         <h1 class="text-sm text-green-500">COLLEGE OF COMPUTER STUDIES</h1>
                     </div>
                 </div>
                 <h1 class="underline font-semibold mt-2">VICE-GOVERNOR</h1>
                 <div class=" flex">
                     <div class="">
                     <img src="{{asset('images/profile.jpg')}}" class="h-12 rounded-md" alt="">
                     </div>
                     <div class=" px-3">
                         <h1 class="font-semibold">JUAN DELA CRUZ</h1>
                         <h1 class="text-sm text-green-500">COLLEGE OF COMPUTER STUDIES</h1>
                     </div>
                 </div>
                 <h1 class="underline font-semibold mt-2">BOARD MEMBERS</h1>
                 <div class=" flex">
                     <div class="mb-2">
                     <img src="{{asset('images/profile.jpg')}}" class="h-12 rounded-md" alt="">
                     </div>
                     <div class=" px-3">
                         <h1 class="font-semibold">JUAN DELA CRUZ</h1>
                         <h1 class="text-sm text-blue-600">COLLEGE OF COMPUTER STUDIES</h1>
                     </div>
                 </div>
                 <div class=" flex">
                     <div class="mb-2">
                     <img src="{{asset('images/profile.jpg')}}" class="h-12 rounded-md" alt="">
                     </div>
                     <div class=" px-3">
                         <h1 class="font-semibold">JUAN DELA CRUZ</h1>
                         <h1 class="text-sm text-red-600">COLLEGE OF COMPUTER STUDIES</h1>
                     </div>
                 </div>
                 <div class=" flex">
                     <div class="mb-2">
                     <img src="{{asset('images/profile.jpg')}}" class="h-12 rounded-md" alt="">
                     </div>
                     <div class=" px-3">
                         <h1 class="font-semibold">JUAN DELA CRUZ</h1>
                         <h1 class="text-sm text-red-600">COLLEGE OF COMPUTER STUDIES</h1>
                     </div>
                 </div>
                 <div class=" flex">
                     <div class="mb-2">
                     <img src="{{asset('images/profile.jpg')}}" class="h-12 rounded-md" alt="">
                     </div>
                     <div class=" px-3">
                         <h1 class="font-semibold">JUAN DELA CRUZ</h1>
                         <h1 class="text-sm text-green-500">COLLEGE OF COMPUTER STUDIES</h1>
                     </div>
                 </div>
                 <div class=" flex">
                     <div class="mb-2">
                     <img src="{{asset('images/profile.jpg')}}" class="h-12 rounded-md" alt="">
                     </div>
                     <div class=" px-3">
                         <h1 class="font-semibold">JUAN DELA CRUZ</h1>
                         <h1 class="text-sm text-green-500">COLLEGE OF COMPUTER STUDIES</h1>
                     </div>
                 </div>
                 <div class=" flex">
                     <div class="mb-2">
                     <img src="{{asset('images/profile.jpg')}}" class="h-12 rounded-md" alt="">
                     </div>
                     <div class=" px-3">
                         <h1 class="font-semibold">JUAN DELA CRUZ</h1>
                         <h1 class="text-sm text-green-500">COLLEGE OF COMPUTER STUDIES</h1>
                     </div>
                 </div>
                 <div class=" flex">
                     <div class="mb-2">
                     <img src="{{asset('images/profile.jpg')}}" class="h-12 rounded-md" alt="">
                     </div>
                     <div class=" px-3">
                         <h1 class="font-semibold">JUAN DELA CRUZ</h1>
                         <h1 class="text-sm text-green-500">COLLEGE OF COMPUTER STUDIES</h1>
                     </div>
                 </div>
                 <div class=" flex">
                     <div class="mb-2">
                     <img src="{{asset('images/profile.jpg')}}" class="h-12 rounded-md" alt="">
                     </div>
                     <div class=" px-3">
                         <h1 class="font-semibold">JUAN DELA CRUZ</h1>
                         <h1 class="text-sm text-green-500">COLLEGE OF COMPUTER STUDIES</h1>
                     </div>
                 </div>
             </div>
         </div>
     </div>
    <div class=" w-7/12  flex flex-col">
        <div class="grid grid-cols-2 gap-3">
            <div class='bg-white flex rounded-md items-center '>
                <div class="bg-blue-500 w-2 rounded-tl-md h-full rounded-bl-md mr-3 "></div>
                <div class="bg-green-500 w-20 h-20 rounded-md my-2 flex justify-center shadow-md">
                    <img src="{{asset('images/css.png')}}" class="h-20 p-1" alt="">
                </div>
                <div class=" flex flex-col justify-center  px-3">
                    <h1 class="font-bold text-4xl text-gray-800">1000</h1>
                    <h1 class="font-semibold text-gray-500">NO OF CCS STUDENTS</h1>
                </div>
            </div>
            <div class='bg-white flex rounded-md '>
                <div class="bg-blue-500 w-2 rounded-tl-md h-full rounded-bl-md mr-3 "></div>
                <div class="bg-blue-300 w-20 h-20 rounded-md my-2 flex justify-center shadow-md">
                    <img src="{{asset('images/naba.png')}}" class="h-20 p-1" alt="">
                </div>
                <div class=" flex flex-col justify-center  px-3">
                    <h1 class="font-bold text-4xl text-gray-800">1000</h1>
                    <h1 class="font-semibold text-gray-500">NO OF NABA STUDENTS</h1>
                </div>
            </div>
            <div class='bg-white flex rounded-md '>
                <div class="bg-blue-500 w-2 rounded-tl-md h-full rounded-bl-md mr-3 "></div>
                <div class="bg-red-500 w-20 h-20 flex justify-center rounded-md my-2 shadow-md">
                    <img src="{{asset('images/eso.png')}}" class="h-20 p-1" alt="">
                </div>
                <div class=" flex flex-col justify-center  px-3">
                    <h1 class="font-bold text-4xl text-gray-800">1000</h1>
                    <h1 class="font-semibold text-gray-500">NO OF ESO STUDENTS</h1>
                </div>
            </div>
            
        </div>

        <div class='bg-white  my-4 p-2 shadow-lg rounded-md'>
            <div class="flex items-center">
                <div class="bg-green-500 flex w-12 h-12 justify-center items-center rounded-lg shadow text-white p-1"><i class="material-icons md-36">assessment</i></div>
            <span class="ml-1 font-semibold">STUDENT'S ATTENDANCE</span>
                
            </div>
            <hr class="mt-2 mb-3">
            <div id="myfirstchart" style="height: 250px;"></div>
        </div>
    </div>
</div>
</div>
@endsection
