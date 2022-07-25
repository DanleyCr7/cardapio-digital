<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
      
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body * {
                font-family: 'Poppins', sans-serif;
            }
            .main {
                flex: 3;
            }

            .sidebar {
                flex: 1;
            }

            .custom-rounded {
                border-radius: 25px;
            }

            .custom-tr-rounded {
                border-radius:  0 25px 0 0;
            }

            .timer {
                background: rgba(217, 194, 105, .2);
            }

            .text-xxs {
                font-size: .7rem;
            }
        </style>
    </head>
    <body class="antialiased">
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
    </body>
</html>
