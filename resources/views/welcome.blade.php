@extends('layouts.dashboard')

@section('content')
        <div class="flex" id="dribbleShot">
            <div class="main px-16 border-r border-gray-200">
              <div class="h-12 mt-8 flex items-center">
                <i class="fa fa-bars cursor-pointer"></i>
                <h6 class="font-bold text-lg mx-10">teste</h6>
                <div class="flex items-center ml-auto bg-gray-100 self-stretch custom-rounded px-4 w-2/3">
                  <i class="fa fa-search"></i>
                  <input type="text" class="px-4 self-stretch bg-transparent flex-grow outline-none" placeholder="Search">
                </div>
              </div>
              <div class="grid grid-cols-3 bg-orange-100 mt-12 rounded-lg">
                <div>
                  <img src="https://image.freepik.com/free-vector/vector-cartoon-illustration-traditional-set-fast-food-meal_1441-331.jpg" alt="fooood" class="self-end">
                </div>
                <div class="row-auto flex flex-col justify-center items-center">
                  <h3 class="tracking-wide text-orange-600 text-lg ml-6">$0 delivery for 30 days!&nbsp;&nbsp;&nbsp;🎉</h3>
                  <h5 class="text-xs text-gray-500">$0 delivery fee for orders over $10 for 30 days</h5>
                </div>
                <div class="flex justify-end items-end pb-4 pr-4">
                  <a class="font-hairline text-orange-500" href="">Learn More <i class="ml-3 fa fa-arrow-right"></i></a>
                </div>
              </div>
              <div class="flex mt-12 items-end">
                <h3 class="text-xl font-bold">Restaurants</h3>
                <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/237/hamburger_1f354.png" class="mx-4 h-8 w-8" alt="">
                <button class="ml-auto rounded-full p-2 bg-orange-600 hover:bg-orange-500 hover:shadow-lg text-white cursor-pointer text-sm">
                  <i class="fa fa-clock mx-2"></i>
                  <span class="font-hairline">Delivery: </span><span>Now</span>
                  <i class="fa fa-chevron-down mx-2"></i>
                </button>
              </div>
              <div class="grid grid-cols-9 gap-6 mt-12">
                <div class=" border rounded-full p-2 flex flex-col items-center shadow-xl cursor-pointer transition-colors duration-700 ease-in-out" :class="{'bg-yellow-400': cat.id == activeCategory}" v-for="(cat, idx) in categories">
                  <div class="border rounded-full p-2 bg-white">
                    {{-- <img class="h-12 w-12" :src="cat.icon" alt=""> --}}
                  </div>
                  <p class="mt-3 mb-10 font-bold  text-xs">teste</p>
                </div>
                <button class="h-10 rounded-lg self-center hover:shadow-xl flex justify-center items-center bg-gray-100 p-3 ml-auto"><i class="fa fa-chevron-right"></i></button>
              </div>
              <div class="mt-12 grid grid-cols-3 gap-10">
                <div class="flex flex-col" v-for="food in foodItems">
                  <div class="shadow-lg relative h-40 custom-rounded" >
                    <div class="absolute bottom-0 left-0 w-1/3 bg-gray-200 rounded-tr-lg p-2 text-center text-xs"><span class="font-bold">1</span> 20</div>
                  </div>
                  <p class="mt-4 font-medium">teste</p>
                  <div class="mt-2 flex items-center">
                    <span class="text-xs"><i class="fa fa-star"></i> teste</span>
                    <span class="text-gray-600 font-hairline text-xs mx-4">teste</span>
                    <span class="text-gray-600 font-hairline text-xs mx-4">teste</span>
                    <span class="text-gray-600 font-hairline text-xs mx-4">teste</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-gray-100 sidebar flex flex-col">
              <div class="px-6">
                <div class="h-12 mt-8 flex justify-end items-center">
                  <i class="fa fa-user"></i>
                  <div class="rounded-lg bg-yellow-400 px-3 font-bold text-xs py-1 ml-6">3</div>
                </div>
                <div class="mt-12">
                  <p class="font-medium text-xl">My Order 😎</p>
                </div>
                <div class="mt-12 p-6 bg-purple-800 custom-rounded font-hairline text-xs">
                  <div class="flex justify-between items-center">
                    <p class="text-white">625 St Marks Ave</p>
                    <p class="text-yellow-400 cursor-pointer">Edit</p>
                  </div>
                  <div class="flex items-center mt-4">
                    <div class="rounded-lg px-2 py-1 timer"><i class="fa fa-clock text-yellow-400"></i></div>
                    <p class="text-white mx-3">35 min</p>
                    <p class="text-yellow-400 cursor-pointer ml-auto">Choose time</p>
                  </div>
                </div>
                <div v-for="(item, index) in cartItems" class="grid grid-cols-4 gap-1 mb-5">
                  <div class="h-10 rounded-lg" ></div>
                  <div class="col-span-2 grid grid-cols-3 text-xxs font-semibold ">
                    <p class="flex justify-center items-center">1 <span class="ml-1">x</span></p>
                    <p class="col-span-2 flex items-center">teste</p>
                  </div>
                  <div class="flex justify-end items-center text-gray-600 font-hairline text-xs">
                    $20
                  </div>
                </div>
                 <div class="grid grid-cols-4 gap-1 mb-5">
                  <div class="h-10 rounded-lg bg-orange-200 flex">
                    <i class="fa fa-car m-auto text-orange-500"></i>
                   </div>
                  <div class="col-span-2 grid grid-cols-3 text-xxs font-semibold ">
                    <p class="col-span-2 flex justify-center items-center">Delivery</p>
                    <p class="flex items-center"></p>
                  </div>
                  <div class="flex justify-end items-center text-gray-600 font-hairline text-xs">
                    $0.00
                  </div>
                </div>
              </div>
              <div class="flex-grow flex flex-col pl-6 justify-end">
                  <div class="flex justify-between items-center border-b-2 pb-2">
                    <span>Total:</span>
                    <span class="text-xl font-medium pr-6">$25.97</span>
                  </div>
                <div class="flex justify-between pt-4 text-xs font-bold">
                  <div class="flex flex-col">
                    <span>Persons</span>
                    <div class="flex items-center mt-3">
                      <span class="border border-r-0 p-2 rounded-l-lg">-</span>
                      <span class="border-b border-t p-2 ">1</span>
                      <span class="border border-l-0 p-2 rounded-r-lg">+</span>
                    </div>
                    </div>
                  <div class="ml-auto bg-yellow-400 p-6 rounded-l-lg">
                      Checkout <i class="ml-3 fa fa-arrow-right"></i>
                  </div>
                </div>
                </div>
            </div>
          </div>
          <div class="flex h-10">
            <div class="flex-grow px-16 main border-r border-gray-200"></div>
            <div class="sidebar bg-gray-100"></div>
          </div>
  @endsection
