@extends('layouts.master')
@section('content')
<div class=" h-full mb-5">
  <div class="bg-gradient-to-r from-blue-700 z-20 to-blue-600 shadow-md sticky top-20 h-14 w-screen flex px-5 space-x-2 items-center ">
    <div class="bg-white flex items-center p-1 text-gray-500 hover:bg-blue-500 hover:border-2  cursor-pointer hover:text-white rounded-md shadow-md">
        <i class="material-icons md-36">person</i>
        <span class="text-sm font-semibold">STUDENT</span>
    </div>
    <div class="bg-white flex items-center p-1 text-gray-500 hover:bg-blue-500 cursor-pointer hover:text-white rounded-md shadow-md">
        <i class="material-icons md-36">people</i>
        <span class="text-sm font-semibold ml-1">DEPARTMENT</span>
    </div>
    <div class="bg-white flex items-center p-1 text-gray-500 hover:bg-blue-500 cursor-pointer hover:text-white rounded-md shadow-md">
        <i class="material-icons md-36">amp_stories</i>
        <span class="text-sm font-semibold">ANNOUNCEMENT</span>
    </div>
    <div class="bg-white flex items-center p-1 text-gray-500 hover:bg-blue-500 cursor-pointer hover:text-white rounded-md shadow-md">
        <i class="material-icons md-36">account_box</i>
        <span class="text-sm font-semibold">OFFICERS</span>
    </div>
    <div class="bg-white flex items-center p-1 text-gray-500 hover:bg-blue-500 cursor-pointer hover:text-white rounded-md shadow-md">
        <i class="material-icons md-36"> groups</i>
        <span class="text-sm font-semibold ml-1"> POSITION</span>
    </div>  
</div>
<div class="w-full px-10 py-2">
  <div class="header text-xl text-gray-800 font-bold">STUDENT</div>
  <div class=" flex mt-2 mb-3">
      <div class=" flex space-x-1  w-6/12">
          <div class="bg-print h-10 w-14 cursor-pointer hover:bg-yellow-500  text-white flex items-center shadow-md justify-center p-1"><i class="material-icons">print</i></div>
          <div class="bg-white h-10 flex items-center shadow-md w-64  border">
              <div class=" flex items-center text-gray-800 justify-center border-r w-2/12"><i class="material-icons">filter_alt</i></div>
              <div class=" w-10/12 px-1">
                  <div class="relative">
                      <select class="block appearance-none w-full cursor-pointer  border-gray-200 text-gray-800 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white " id="grid-state" ">
                          <option>Department</option>
                          <option>CCS</option>
                          <option>ESO</option>
                          <option>NABA</option>
                      </select>
                      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                      </div>
                    </div>
              </div>
          </div>
      </div>
      <div class=" w-6/12 flex space-x-1">
          <div class="bg-white w-8/12 shadow-md flex">
              <div class="bg-blue-300 w-11/12">
                  <input type="text" class=" h-full w-full border outline-none px-3" placeholder="Search Student">
              </div>
              <div class=" w-1/12 flex items-center border text-gray-800 justify-center border-l">
                  <i class="material-icons">search</i>
              </div>
          </div>
          <div class=" w-4/12" x-data="{open:false}">
              <div @click="open = true" class="bg-blue-700 px-4 text-white rounded-md flex hover:bg-blue-800 cursor-pointer justify-center items-center h-full">
                  <i class="material-icons md-24">person_add</i>
                  <span class="ml-2 font-semibold">ADD STUDENT</span>
              </div>
              <div tabindex="0" class="z-40 overflow-auto left-0 top-0 bottom-0 right-0 w-full h-full fixed" style="background-color: rgba(0,0,0,.5);" x-show="open">
                <div class="text-left bg-white h-auto mx-96 rounded-md p-3 px-6 mt-20" @click.away="open = false">
                  <div class="flex">
                   <div class=" w-10/12 text-xl font-bold text-gray-700">ADD STUDENT</div>
                   <div class="w-2/12 flex justify-end">
                      <div @click="open = false" class="bg-white cursor-pointer rounded-md hover:bg-red-700 w-8 flex justify-center hover:text-white items-center h-8"><i class="material-icons">close</i></div>
                   </div>
                  
                  </div>
                  <div class="content mt-2">
                    <form action="" class="flex">
                      <div class="w-3/12">
                        <div>
                          <div class="w-32 h-32 mb-1 border rounded-lg overflow-hidden relative bg-gray-100">
                            <img id="image" class="object-cover w-full h-32" src="https://www.pngkey.com/png/detail/114-1149878_setting-user-avatar-in-specific-size-without-breaking.png" />
                            
                            <div class="absolute top-0 left-0 right-0 bottom-0 w-full  cursor-pointer flex items-center justify-center" onClick="document.getElementById('fileInput').click()">
                              <div type="button"
                                style="background-color: rgba(255, 255, 255, 0.65)"
                                class="hover:bg-gray-100 outline-none text-gray-700 font-semibold py-2 px-4 text-sm border border-gray-300 rounded-lg shadow-sm"
                              >
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-camera" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                  <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                  <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                                  <circle cx="12" cy="13" r="3" />
                                </svg>							  
                              </div>
                            </div>
                          </div>
                          <input name="photo" id="fileInput" accept="image/*" class="hidden" type="file" onChange="let file = this.files[0]; 
                            var reader = new FileReader();
                  
                            reader.onload = function (e) {
                              document.getElementById('image').src = e.target.result;
                              document.getElementById('image2').src = e.target.result;
                            };
                          
                            reader.readAsDataURL(file);
                          ">
                        </div>
                      </div>
                      <div class="w-9/12">
                      <div class="mb-2 flex flex-col">
                        
                        <input type="text" class="h-10 border-b" placeholder="Lastname">
                      </div>
                      </div>
                    </form>
                  </div>
                   </div>
                </div>
              </div>
          </div>
      </div>
  </div>
  <div class="bg-white rounded-md shadow-lg mx-10 ">
      <div class="bg-blue-600 h-1 rounded-tl rounded-tr"></div>
      <div class="content p-2 ">
          <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
              <thead>
                <tr>
                  <th width="50" class="py-2 px-2 b font-bold uppercase text-sm text-grey-dark border-b border-grey-light">IMAGE</th>
                  <th class="py-2 px-2 b font-bold uppercase text-sm text-grey-dark border-b border-grey-light">FULLNAME</th>
                  <th class="py-2 px-2 b font-bold uppercase text-sm text-grey-dark border-b border-grey-light">ID NO.</th>
                  <th class="py-2 px-2 b font-bold uppercase text-sm text-grey-dark border-b border-grey-light">YEAR</th>
                  <th class="py-2 px-2 b font-bold uppercase text-sm text-grey-dark border-b border-grey-light">ADDRESS</th>
                  <th class="py-2 px-2 b font-bold uppercase text-sm text-grey-dark border-b border-grey-light">DEPARTMENT</th>
                  <th width="100" class="py-2 px-2 b font-bold uppercase text-sm text-grey-dark border-b border-grey-light">ACTIONS</th>
                </tr>
              </thead>
              <tbody>
                <tr class="hover:bg-blue-300">
                  <td class="py-2 px-2 border-b border-grey-light">
                    <img src="{{asset('images/profile.jpg')}}" class="h-10 rounded-md"  alt="">
                  </td>
                  <td class="py-2 px-2 border-b border-grey-light">DELA CRUZ, JUAN T.</td>
                  <td class="py-2 px-2 border-b border-grey-light">24976</td>
                  <td class="py-2 px-2 border-b border-grey-light">3RD YEAR</td>
                  <td class="py-2 px-2 border-b border-grey-light">TACURONG CITY S.K</td>
                  <td class="py-2 px-2 border-b border-grey-light">CCS</td>
                  <td class="py-2 px-2 border-b border-grey-light">
                    <div class="flex cursor-pointer">
                      <div class="bg-print hover:bg-yellow-500 w-6/12 flex items-center justify-center border-r rounded-tl rounded-bl text-white h-8"><i class="material-icons">edit</i></div>
                      <div class="bg-red-600 hover:bg-red-800 w-6/12 flex items-center rounded-tr rounded-br justify-center text-white h-8"><i class="material-icons">delete</i></div>
                    </div>
                  </td>
                 
                </tr>
                <tr class="hover:bg-blue-300">
                  <td class="py-2 px-2 border-b border-grey-light">
                    <img src="{{asset('images/profile.jpg')}}" class="h-10 rounded-md"  alt="">
                  </td>
                  <td class="py-2 px-2 border-b border-grey-light">DELA CRUZ, JUAN T.</td>
                  <td class="py-2 px-2 border-b border-grey-light">24976</td>
                  <td class="py-2 px-2 border-b border-grey-light">3RD YEAR</td>
                  <td class="py-2 px-2 border-b border-grey-light">TACURONG CITY S.K</td>
                  <td class="py-2 px-2 border-b border-grey-light">CCS</td>
                  <td class="py-2 px-2 border-b border-grey-light">
                    <div class="flex cursor-pointer">
                      <div class="bg-print hover:bg-yellow-500 w-6/12 flex items-center justify-center border-r rounded-tl rounded-bl text-white h-8"><i class="material-icons">edit</i></div>
                      <div class="bg-red-600 hover:bg-red-800 w-6/12 flex items-center rounded-tr rounded-br justify-center text-white h-8"><i class="material-icons">delete</i></div>
                    </div>
                  </td>
                 
                </tr>
                <tr class="hover:bg-blue-300">
                  <td class="py-2 px-2 border-b border-grey-light">
                    <img src="{{asset('images/profile.jpg')}}" class="h-10 rounded-md"  alt="">
                  </td>
                  <td class="py-2 px-2 border-b border-grey-light">DELA CRUZ, JUAN T.</td>
                  <td class="py-2 px-2 border-b border-grey-light">24976</td>
                  <td class="py-2 px-2 border-b border-grey-light">3RD YEAR</td>
                  <td class="py-2 px-2 border-b border-grey-light">TACURONG CITY S.K</td>
                  <td class="py-2 px-2 border-b border-grey-light">CCS</td>
                  <td class="py-2 px-2 border-b border-grey-light">
                    <div class="flex cursor-pointer">
                      <div class="bg-print hover:bg-yellow-500 w-6/12 flex items-center justify-center border-r rounded-tl rounded-bl text-white h-8"><i class="material-icons">edit</i></div>
                      <div class="bg-red-600 hover:bg-red-800 w-6/12 flex items-center rounded-tr rounded-br justify-center text-white h-8"><i class="material-icons">delete</i></div>
                    </div>
                  </td>
                 
                </tr>
                <tr class="hover:bg-blue-300">
                  <td class="py-2 px-2 border-b border-grey-light">
                    <img src="{{asset('images/profile.jpg')}}" class="h-10 rounded-md"  alt="">
                  </td>
                  <td class="py-2 px-2 border-b border-grey-light">DELA CRUZ, JUAN T.</td>
                  <td class="py-2 px-2 border-b border-grey-light">24976</td>
                  <td class="py-2 px-2 border-b border-grey-light">3RD YEAR</td>
                  <td class="py-2 px-2 border-b border-grey-light">TACURONG CITY S.K</td>
                  <td class="py-2 px-2 border-b border-grey-light">CCS</td>
                  <td class="py-2 px-2 border-b border-grey-light">
                    <div class="flex cursor-pointer">
                      <div class="bg-print hover:bg-yellow-500 w-6/12 flex items-center justify-center border-r rounded-tl rounded-bl text-white h-8"><i class="material-icons">edit</i></div>
                      <div class="bg-red-600 hover:bg-red-800 w-6/12 flex items-center rounded-tr rounded-br justify-center text-white h-8"><i class="material-icons">delete</i></div>
                    </div>
                  </td>
                 
                </tr>
                <tr class="hover:bg-blue-300">
                  <td class="py-2 px-2 border-b border-grey-light">
                    <img src="{{asset('images/profile.jpg')}}" class="h-10 rounded-md"  alt="">
                  </td>
                  <td class="py-2 px-2 border-b border-grey-light">DELA CRUZ, JUAN T.</td>
                  <td class="py-2 px-2 border-b border-grey-light">24976</td>
                  <td class="py-2 px-2 border-b border-grey-light">3RD YEAR</td>
                  <td class="py-2 px-2 border-b border-grey-light">TACURONG CITY S.K</td>
                  <td class="py-2 px-2 border-b border-grey-light">CCS</td>
                  <td class="py-2 px-2 border-b border-grey-light">
                    <div class="flex cursor-pointer">
                      <div class="bg-print hover:bg-yellow-500 w-6/12 flex items-center justify-center border-r rounded-tl rounded-bl text-white h-8"><i class="material-icons">edit</i></div>
                      <div class="bg-red-600 hover:bg-red-800 w-6/12 flex items-center rounded-tr rounded-br justify-center text-white h-8"><i class="material-icons">delete</i></div>
                    </div>
                  </td>
                 
                </tr>
                <tr class="hover:bg-blue-300">
                  <td class="py-2 px-2 border-b border-grey-light">
                    <img src="{{asset('images/profile.jpg')}}" class="h-10 rounded-md"  alt="">
                  </td>
                  <td class="py-2 px-2 border-b border-grey-light">DELA CRUZ, JUAN T.</td>
                  <td class="py-2 px-2 border-b border-grey-light">24976</td>
                  <td class="py-2 px-2 border-b border-grey-light">3RD YEAR</td>
                  <td class="py-2 px-2 border-b border-grey-light">TACURONG CITY S.K</td>
                  <td class="py-2 px-2 border-b border-grey-light">CCS</td>
                  <td class="py-2 px-2 border-b border-grey-light">
                    <div class="flex cursor-pointer">
                      <div class="bg-print hover:bg-yellow-500 w-6/12 flex items-center justify-center border-r rounded-tl rounded-bl text-white h-8"><i class="material-icons">edit</i></div>
                      <div class="bg-red-600 hover:bg-red-800 w-6/12 flex items-center rounded-tr rounded-br justify-center text-white h-8"><i class="material-icons">delete</i></div>
                    </div>
                  </td>
                 
                </tr>
                <tr class="hover:bg-blue-300">
                  <td class="py-2 px-2 border-b border-grey-light">
                    <img src="{{asset('images/profile.jpg')}}" class="h-10 rounded-md"  alt="">
                  </td>
                  <td class="py-2 px-2 border-b border-grey-light">DELA CRUZ, JUAN T.</td>
                  <td class="py-2 px-2 border-b border-grey-light">24976</td>
                  <td class="py-2 px-2 border-b border-grey-light">3RD YEAR</td>
                  <td class="py-2 px-2 border-b border-grey-light">TACURONG CITY S.K</td>
                  <td class="py-2 px-2 border-b border-grey-light">CCS</td>
                  <td class="py-2 px-2 border-b border-grey-light">
                    <div class="flex cursor-pointer">
                      <div class="bg-print hover:bg-yellow-500 w-6/12 flex items-center justify-center border-r rounded-tl rounded-bl text-white h-8"><i class="material-icons">edit</i></div>
                      <div class="bg-red-600 hover:bg-red-800 w-6/12 flex items-center rounded-tr rounded-br justify-center text-white h-8"><i class="material-icons">delete</i></div>
                    </div>
                  </td>
                </tr>
                <tr class="hover:bg-blue-300">
                  <td class="py-2 px-2 border-b border-grey-light">
                    <img src="{{asset('images/profile.jpg')}}" class="h-10 rounded-md"  alt="">
                  </td>
                  <td class="py-2 px-2 border-b border-grey-light">DELA CRUZ, JUAN T.</td>
                  <td class="py-2 px-2 border-b border-grey-light">24976</td>
                  <td class="py-2 px-2 border-b border-grey-light">3RD YEAR</td>
                  <td class="py-2 px-2 border-b border-grey-light">TACURONG CITY S.K</td>
                  <td class="py-2 px-2 border-b border-grey-light">CCS</td>
                  <td class="py-2 px-2 border-b border-grey-light">
                    <div class="flex cursor-pointer">
                      <div class="bg-print hover:bg-yellow-500 w-6/12 flex items-center justify-center border-r rounded-tl rounded-bl text-white h-8"><i class="material-icons">edit</i></div>
                      <div class="bg-red-600 hover:bg-red-800 w-6/12 flex items-center rounded-tr rounded-br justify-center text-white h-8"><i class="material-icons">delete</i></div>
                    </div>
                  </td>
                </tr>
                <tr class="hover:bg-blue-300">
                  <td class="py-2 px-2 border-b border-grey-light">
                    <img src="{{asset('images/profile.jpg')}}" class="h-10 rounded-md"  alt="">
                  </td>
                  <td class="py-2 px-2 border-b border-grey-light">DELA CRUZ, JUAN T.</td>
                  <td class="py-2 px-2 border-b border-grey-light">24976</td>
                  <td class="py-2 px-2 border-b border-grey-light">3RD YEAR</td>
                  <td class="py-2 px-2 border-b border-grey-light">TACURONG CITY S.K</td>
                  <td class="py-2 px-2 border-b border-grey-light">CCS</td>
                  <td class="py-2 px-2 border-b border-grey-light">
                    <div class="flex cursor-pointer">
                      <div class="bg-print hover:bg-yellow-500 w-6/12 flex items-center justify-center border-r rounded-tl rounded-bl text-white h-8"><i class="material-icons">edit</i></div>
                      <div class="bg-red-600 hover:bg-red-800 w-6/12 flex items-center rounded-tr rounded-br justify-center text-white h-8"><i class="material-icons">delete</i></div>
                    </div>
                  </td>
                </tr>
                <tr class="hover:bg-blue-300">
                  <td class="py-2 px-2 border-b border-grey-light">
                    <img src="{{asset('images/profile.jpg')}}" class="h-10 rounded-md"  alt="">
                  </td>
                  <td class="py-2 px-2 border-b border-grey-light">DELA CRUZ, JUAN T.</td>
                  <td class="py-2 px-2 border-b border-grey-light">24976</td>
                  <td class="py-2 px-2 border-b border-grey-light">3RD YEAR</td>
                  <td class="py-2 px-2 border-b border-grey-light">TACURONG CITY S.K</td>
                  <td class="py-2 px-2 border-b border-grey-light">CCS</td>
                  <td class="py-2 px-2 border-b border-grey-light">
                    <div class="flex cursor-pointer">
                      <div class="bg-print hover:bg-yellow-500 w-6/12 flex items-center justify-center border-r rounded-tl rounded-bl text-white h-8"><i class="material-icons">edit</i></div>
                      <div class="bg-red-600 hover:bg-red-800 w-6/12 flex items-center rounded-tr rounded-br justify-center text-white h-8"><i class="material-icons">delete</i></div>
                    </div>
                  </td>
                </tr>
                
               
              </tbody>
            </table>
      </div>
  </div>
</div>
</div>
@endsection
