<div class="modal fade modal-flex homepage" id="homepage3" tabindex="-1" role="dialog" aria-labelledby="MymodalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="close">x</button>
          <h4 class="modal-title">Thông báo</h4>
          <div class="actions">
               
          </div>
        </div> -->
        <div class="modal-body bg-[#fff]" style="padding: 0;">
           
            <div class="p-8 bg-[#fff] flex flex-col justify-between">

    <!-- Top Section -->
    <div>
      <!-- Status Bar -->
      

      <!-- Greeting -->
      <div class="flex justify-between items-start mb-4">
        <div>
          <h1 data-acc="#AccountSync" class="text-[16px] font-semibold text-[#1c1c1c]">Hi, <span class="fullnametxt">John</span> !</h1>
          <p class=" text-[#8e8e93]">How are you today?</p>
        </div>
        <div class="flex items-center space-x-2">
          <div  class="modalGetGift flex items-center bg-[#e6f4ea] text-[#34a853] px-2 py-1 rounded-full font-medium">
            <i class="fa-solid fa-gift text-[10px] mr-1"></i>
            Reward
          </div>
          <div class="relative">
            <i class="fa-regular fa-bell text-[#1c1c1c] "></i>
            <span class="absolute -top-1 -right-1 w-2 h-2 bg-[#ff3b30] rounded-full"></span>

            <img class="achat" data-setbg="https://cdn-icons-png.flaticon.com/128/1653/1653630.png" width="22" height="22" />
            
            <img class="scanqr" data-setbg="https://cdn-icons-png.flaticon.com/128/6927/6927609.png" width="22" height="22" />
          </div>
        </div>
      </div>

      <!-- Balance Card -->
      <div class="bg-[#143ea8] rounded-[20px] p-4 text-white shadow-md mb-4">
        <div class="flex justify-between items-start">
          <div>
            <p class="text-[18px] font-semibold">$16,567.00</p>
            <p class=" text-[#a6c0ff] mt-1">+3.50% from last month</p>
          </div>
          <i class="fa-solid fa-link  text-[#a6c0ff]"></i>
        </div>

        <div class="flex justify-between items-end mt-6">
          <div>
            <p class=" text-[#cbd5ff]">Number</p>
            <p class="text-[13px] tracking-widest mt-1">•••• 1214</p>
          </div>
          <div>
            <p class=" text-[#cbd5ff]">Exp</p>
            <p class="text-[13px] mt-1">02/15</p>
          </div>
          <button data-route="" class="bg-[#1c1c1c] text-white  px-4 py-2 rounded-full shadow-md">
            Add money
          </button>
        </div>
      </div>

      <!-- Actions -->
      <div class="grid grid-cols-4 gap-3 mb-4">
        <div class="flex flex-col items-center">
          <div class="w-12 h-12 bg-[#e5e7eb] rounded-xl flex items-center justify-center text-[#4b5563] mb-1">
            <i class="fa-solid fa-arrow-up"></i>
          </div>
          <span class=" text-[#6b7280]">Send</span>
        </div>
        <div class="flex flex-col items-center">
          <div class="w-12 h-12 bg-[#e5e7eb] rounded-xl flex items-center justify-center text-[#4b5563] mb-1">
            <i class="fa-solid fa-arrow-down"></i>
          </div>
          <span class=" text-[#6b7280]">Receive</span>
        </div>
        <div class="flex flex-col items-center">
          <div class="w-12 h-12 bg-[#e5e7eb] rounded-xl flex items-center justify-center text-[#4b5563] mb-1">
            <i class="fa-solid fa-wallet"></i>
          </div>
          <span class=" text-[#6b7280]">Withdraw</span>
        </div>
        <div class="flex flex-col items-center">
          <div class="w-12 h-12 bg-[#e5e7eb] rounded-xl flex items-center justify-center text-[#4b5563] mb-1">
            <i class="fa-solid fa-ellipsis"></i>
          </div>
          <span class=" text-[#6b7280]">More</span>
        </div>
      </div>
      <!--  -->
      <div class="list list-row card">
          <h2 class="text-[16px] font-semibold text-[#1c1c1c]">Tài chính</h2>  
          <?php include_once __DIR__."/view/fin.php" ?>
      </div>

       <!--  -->
      <div class="list list-row card">
          <h2 class="text-[16px] font-semibold text-[#1c1c1c]">Free Wifi</h2>  
          <?php include_once __DIR__."/view/wifi.php" ?>
      </div>
      <!-- Transactions Header -->
      <div class="flex justify-between items-center mb-2">
        <h2 class="text-[16px] font-semibold text-[#1c1c1c]">Transactions</h2>
        <a href="#" class=" text-[#1f4ed8] font-medium">See All</a>
      </div>

      <!-- Transactions List -->
      <div class="space-y-2">
        <div class="bg-[#e5e7eb] rounded-xl p-3 flex justify-between items-center">
          <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-[#d1fae5] rounded-lg flex items-center justify-center text-[#10b981]">
              <i class="fa-solid fa-dollar-sign "></i>
            </div>
            <div>
              <p class=" font-medium text-[#1c1c1c]">Top up</p>
              <p class="text-[10px] text-[#6b7280]">Today 1:53 PM</p>
            </div>
          </div>
          <div class="text-right">
            <p class=" font-semibold text-[#1c1c1c]">+$100.00</p>
            <p class="text-[10px] text-[#6b7280]">Deposit</p>
          </div>
        </div>

        <div class="bg-[#e5e7eb] rounded-xl p-3 flex justify-between items-center">
          <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-[#fee2e2] rounded-lg flex items-center justify-center text-[#ef4444]">
              <i class="fa-solid fa-arrow-right "></i>
            </div>
            <div>
              <p class=" font-medium text-[#1c1c1c]">Transfer</p>
              <p class="text-[10px] text-[#6b7280]">Today 2:33 PM</p>
            </div>
          </div>
          <div class="text-right">
            <p class=" font-semibold text-[#1c1c1c]">-$500.00</p>
            <p class="text-[10px] text-[#6b7280]">Send</p>
          </div>
        </div>

        <div class="bg-[#e5e7eb] rounded-xl p-3 flex justify-between items-center">
          <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-[#dcfce7] rounded-lg flex items-center justify-center text-[#22c55e]">
              <i class="fa-solid fa-arrow-down "></i>
            </div>
            <div>
              <p class=" font-medium text-[#1c1c1c]">Received</p>
              <p class="text-[10px] text-[#6b7280]">Today 3:32 PM</p>
            </div>
          </div>
          <div class="text-right">
            <p class=" font-semibold text-[#1c1c1c]">+$50.00</p>
            <p class="text-[10px] text-[#6b7280]">Deposit</p>
          </div>
        </div>

        <div class="bg-[#e5e7eb] rounded-xl p-3 flex justify-between items-center">
          <div class="flex items-center space-x-2">
            <div class="w-8 h-8 bg-[#d1fae5] rounded-lg flex items-center justify-center text-[#10b981]">
              <i class="fa-solid fa-dollar-sign "></i>
            </div>
            <div>
              <p class=" font-medium text-[#1c1c1c]">Top up</p>
              <p class="text-[10px] text-[#6b7280]">Jan 15, 5:15 AM</p>
            </div>
          </div>
          <div class="text-right">
            <p class=" font-semibold text-[#1c1c1c]">+$20.00</p>
            <p class="text-[10px] text-[#6b7280]">Deposit</p>
          </div>
        </div>
      </div>
    </div>

  

  </div>
      </div> 
      <!--  -->
      <div class="modal-footer" style="padding-left: 0;padding-right: 0;">
            <!-- Bottom Navigation -->
 
      <div class="bg-white rounded-2xl py-2 px-4 flex justify-between items-center shadow-inner">
        <div class="flex flex-col items-center text-[#1c1c1c]">
          <i class="fa-solid fa-house "></i>
          <span class="text-[10px] mt-1">Home</span>
        </div>
        <div class="flex flex-col items-center text-[#9ca3af]">
          <i class="fa-regular fa-chart-bar "></i>
          <span class="text-[10px] mt-1">Activity</span>
        </div>
        <div class="w-14 h-14 bg-[#1f4ed8] rounded-full flex items-center justify-center shadow-lg border-4 border-[#f2f2f2]">
          <i class="fa-solid fa-fingerprint text-white text-[20px]"></i>
        </div>
        <div class="flex flex-col items-center text-[#9ca3af]">
          <i class="fa-regular fa-credit-card "></i>
          <span class="text-[10px] mt-1">Card</span>
        </div>
        <div data-acc="#AccountSync" class="flex flex-col items-center text-[#9ca3af]">
          <i class="fa-regular fa-user "></i>
          <span class="text-[10px] mt-1">Profile</span>
        </div>
      </div>
 
      </div>
    </div>
  </div>
</div>