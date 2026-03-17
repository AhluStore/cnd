<div class="modal fade modal-flex homepage" id="homepage2" tabindex="-1" role="dialog" aria-labelledby="MymodalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="close">x</button>
          <h4 class="modal-title">homepage2</h4>
          <div class="actions">
               
          </div>
        </div> -->
        <div class="modal-body" style="    padding: 0;">
           
<div class="bg-gray-50 p-4">
    <div class="flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <img class="w-12 h-12 rounded-full avatarblock" data-acc="#AccountSync" src="https://demo.donggiatri.click/avatar/" alt="User profile photo">
            <div data-acc="#AccountSync">
                <div class=" text-gray-800">Good Morning 👋</div>
                <div class="font-bold text-lg text-gray-900 fullnametxt">Tony</div>
            </div>
        </div>
        <div class="flex items-center space-x-4">
             <div class="modalGetGift flex items-center bg-[#e6f4ea] text-[#34a853] px-2 py-1 rounded-full font-medium">
            <i class="fa-solid fa-gift text-[10px] mr-1"></i>
            Reward
          </div>
          <div class="relative">
            <i class="fa-regular fa-bell text-[#1c1c1c] "></i>
            <span class="absolute -top-1 -right-1 w-2 h-2 bg-[#ff3b30] rounded-full"></span>
          </div>
           
          <div class="relative">
            <img class="achat" data-setbg="https://cdn-icons-png.flaticon.com/128/1653/1653630.png" width="22" height="22" />
          </div>
          <div class="relative">
            <img class="scanqr" data-setbg="https://cdn-icons-png.flaticon.com/128/6927/6927609.png" width="22" height="22" />
          </div>
        </div>
    </div>

    <div class="mt-4">
        <div class="relative">
            <input type="text" class="w-full py-2 pl-10 pr-3 text-gray-600 border rounded-lg bg-gray-200 focus:outline-none" placeholder="Search">
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l1.414-1.414M18.364 7.364A9 9 0 1010.636 5.636" />
            </svg>
        </div>
    </div>

    <div class="mt-6">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-lg text-gray-800">Special Offers</h2>
            <button class=" text-gray-600">See All</button>
        </div>

        <div class="bg-white rounded-lg shadow-md mt-4 p-4">
            <div class="flex items-center">
                <div class="flex-1">
                    <p class="text-2xl font-bold text-gray-900">20%</p>
                    <p class="text-lg text-gray-800">Week Deals!</p>
                </div>
                <img class="w-20 h-20" src="https://placehold.co/160x90" alt="Car image">
            </div>
            <p class=" text-gray-500 mt-2">Get a new car discount, only valid this week.</p>
        </div>
    </div>

    <div class="mt-6">
        <div class="grid grid-cols-4 gap-4">
            <div class="flex flex-col items-center">
                <img class="w-12 h-12" src="https://placehold.co/48x48" alt="Mercedes logo">
                <p class=" text-gray-700 mt-2">Mercedes</p>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-12 h-12" src="https://placehold.co/48x48" alt="Tesla logo">
                <p class=" text-gray-700 mt-2">Tesla</p>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-12 h-12" src="https://placehold.co/48x48" alt="BMW logo">
                <p class=" text-gray-700 mt-2">BMW</p>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-12 h-12" src="https://placehold.co/48x48" alt="Toyota logo">
                <p class=" text-gray-700 mt-2">Toyota</p>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-12 h-12" src="https://placehold.co/48x48" alt="Volvo logo">
                <p class=" text-gray-700 mt-2">Volvo</p>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-12 h-12" src="https://placehold.co/48x48" alt="Bugatti logo">
                <p class=" text-gray-700 mt-2">Bugatti</p>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-12 h-12" src="https://placehold.co/48x48" alt="Honda logo">
                <p class=" text-gray-700 mt-2">Honda</p>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-12 h-12" src="https://placehold.co/48x48" alt="More icon">
                <p class=" text-gray-700 mt-2">More</p>
            </div>
        </div>
    </div>
     <!--  -->
  <div class="list list-row card">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-lg text-gray-800">Tài chính</h2>
            <button class="text-gray-600">See All</button>
        </div>
        <?php include_once __DIR__."/view/fin.php" ?>
  </div>
  <!--  -->
    <div class="mt-6">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-lg text-gray-800">Top Deals</h2>
            <button class=" text-gray-600">See All</button>
        </div>

        <div class="flex space-x-2 mt-4">
            <button class="py-1 px-4 bg-gray-800 text-white rounded-full">All</button>
            <button class="py-1 px-4 border border-gray-400 text-gray-800 rounded-full">Mercedes</button>
            <button class="py-1 px-4 border border-gray-400 text-gray-800 rounded-full">Tesla</button>
            <button class="py-1 px-4 border border-gray-400 text-gray-800 rounded-full">BMW</button>
            <button class="py-1 px-4 border border-gray-400 text-gray-800 rounded-full">Honda</button>
            <button class="py-1 px-4 border border-gray-400 text-gray-800 rounded-full">...</button>
        </div>
    </div>
    <!--  -->
  <div class="list list-row card">
       <div class="flex items-center justify-between">
            <h2 class="font-bold text-lg text-gray-800">Free Wifi</h2>
            <button class=" text-gray-600">See All</button>
        </div>
      <?php include_once __DIR__."/view/wifi.php" ?>
  </div>
  <!--  -->
</div>

      </div> 
      <!--  -->
      <div class="modal-footer" >
          <!-- Bottom Navigation -->
        <div class="bg-white">
            <div class="flex items-center justify-between">
                <span class="flex flex-col items-center gap-1 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l5 5-5 5h16.5a1.5 1.5 0 001.5-1.5v-2a1.5 1.5 0 00-1.5-1.5H8" />
                    </svg>
                    <span class="text-[10px] font-medium">Home</span>
                </span>
                <span class="flex flex-col items-center gap-1 text-gray-500 hover:text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3V3z" />
                </svg>
                    <span class="text-[10px] font-medium">Orders</span>
                </span>
                <span class="flex flex-col items-center gap-1 text-gray-500 hover:text-blue-600">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 21v-2a4 4 0 00-4 0v2a4 4 0 01-4-4V7a4 4 0 015.8-3.8L12 3m0 18l-1-1m4-17l1 1m-1-1v18m0-15l-1-1m-2 12l-1-1" />
                </svg>
                    <span class="text-[10px] font-medium">Inbox</span>
                </span>
                <span class="flex flex-col items-center gap-1 text-gray-500 hover:text-blue-600">
                     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12l2 2-2 2M15 12l2 2M21 5v12M3 5V8m0 9v3m0-9v1m18-2v7m0 2v1m0 5v-1m0-9V5" />
                </svg>
                    <span class="text-[10px] font-medium">Wallet</span>
                </span>
                <span data-acc="#AccountSync" class="flex flex-col items-center gap-1 text-gray-500 hover:text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3v3v4v4v2M9 9v12m3-16 1.5 1.5m7.5 7.5V21m0-18V3v3v3v3v7" />
                </svg>
                    <span class="text-[10px] font-medium">Profile</span>
                </span>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>