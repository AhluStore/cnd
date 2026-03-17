<div class="modal fade modal-flex homepage" id="homepage" tabindex="-1" role="dialog" aria-labelledby="MymodalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- <div class="modal-header">
         
          <h4 class="modal-title">NHN</h4>
          <div class="actions">
               
          </div>
        </div> -->
        <div class="modal-body">
           
           <div class="mainhome container">
      <div class="homehead">
         Liên Minh
      </div>
      
      <canvas id="c"></canvas>

     <div class="mainbody">
        
        <div >
        <div class="flex-row white-view" style="padding: 12px 8px;">
              <div class="lr">
               <div class=""   data-acc="#AccountSync">
                <img class="avatarblock" data-setbg="https://cdn-icons-png.flaticon.com/128/17446/17446833.png" width="44" height="44" />
              </div>
              <div class="">
                  <div  data-acc="#AccountSync">Xin chào</div>
                  <div class="fullnametxt"  data-acc="#AccountSync">Tony</div>
                  <div class="uuidbox"><span class="uuid">53325</span><i data-copy="" class="fa fa-copy uuidcopy"></i></div>
              </div>

            </div>
            <div  style="min-width: 100px;">
                <div class="flex-row mb-8">
                    <div class="darkmodetheme"> </div>
                  <img class="achat" data-setbg="https://cdn-icons-png.flaticon.com/128/1653/1653630.png" width="22" height="22" />

                  <img class="scanqr" data-setbg="https://cdn-icons-png.flaticon.com/128/6927/6927609.png" width="22" height="22" />
                </div>
                  <div  class="flex modalGetGift items-center bg-[#e6f4ea] text-[#34a853] px-2 py-1 rounded-full font-medium">
                  <i class="fa-solid fa-gift text-[10px] mr-1"></i>
                  Đổi quà
                </div> 
            </div>
        </div>
        <div class="flex-center bg random mb-8"> 
        <div class="counter">
          <div class="bar"></div>
          <div class="msgclaim"><span class="btn btn-primary no btnclaim">Claim ngay</span></div>
        </div>
        </div> 
       </div>
 
       <!-- Slider main container -->
        <div class="swiper-container mainswipper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide bg" data-setbg="https://demo.donggiatri.click/bg/0.png">
                    <div>Bạn đang có <span class="totalcoin">00.00</span> NHN</div> 
                    <div class="text-center mt-8 mb-8 lr center barcodewallet">
                       <div class="barcodetxt">--</div>
                       <div>
                         <span data-copy=""><i class="fa fa-copy"></i></span> 
                       </div>
                    </div>
                </div>

                <div class="swiper-slide bg random">
                    <div>
                        Bạn đang có <span class="totalcoinsell">00.00</span> <img src="assets/cockles-logo.png" width='24' height="24" alt=""></div> 
                        <div class="text-center mt-8 mb-8 lr center barcodewallet">
                           <div class="barcodetxt">--</div>
                           <div>
                             <span data-copy=""><i class="fa fa-copy"></i></span> 
                           </div>
                        </div>
                    <div> <a data-url="https://game.donggiatri.click/bet/60sec/" class="btn btn-warning openlottery">Tăng thêm</a></div>
                </div>
                <div class="swiper-slide bg" data-page="promotion1" data-setbg="assets/hop-tac-lien-ket.png">
                    
                </div>
                <div class="swiper-slide bg" data-page="promotionReferer" data-setbg="https://skillking.fpt.edu.vn/wp-content/uploads/affiliate-marketing-15725072874221438636530.jpg">

                </div>
                <div class="swiper-slide bg" data-page="promotion1" data-setbg="https://support.pavietnam.vn/datafile/baiviet/17673348633_1-1200x628.png" >

                </div>
                <div class="swiper-slide bg" data-page="promotion1" data-setbg="assets/mo-the-tin-dung-online.jpg" >

                </div>
                <div class="swiper-slide">

                    <img data-page="promotion" width="205" data-setbg="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtRu0x_d88zEYE0pfhuD2CEzmmv7bY9LH9tg&s" alt="">
                </div>
            </div>
              <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    
       <div class="list list-row card" id="sortable" data-sortable-id="0" aria-dropeffect="move">
          
          <div class="row">
              <div class="col-md-6" id="example2-left">
                                   <div class="ptitle">
                    <div class="">
                      <span class="title-text">Tài chính</span>
                      <i class=""></i>
                    </div>
                </div>  
                  <?php include_once __DIR__."/view/fin.php" ?>

                 <div data-page="ishop" class="bg h75" data-setbg="https://insieutoc.vn/wp-content/uploads/2021/02/mau-banner-quang-cao-khuyen-mai.jpg">
                     
                </div>   
              </div>
              <!--  -->
              <div class="col-md-6" id="example2-right">
                <div class="ptitle">
                    <div class="">
                      <span class="title-text">Wifi Free</span>
                      <i class=""></i>
                    </div>
                </div>  
               
                <?php include_once __DIR__."/view/wifi.php" ?>
             
                    <div class="ptitle">
    <div class="">
      <span class="title-text">Vanilla JS</span>
      <i class=""></i>
    </div>
</div>  
                  <?php
                  $lists = [
                    ["url"=>"https://f7.donggiatri.click/users/demo/pluto/dist/?test","image"=>"","desc"=>"","name"=>"Ato"],
                    ["url"=>"https://f7.donggiatri.click/users/demo/aship/dist/","image"=>"","desc"=>"","name"=>"AShip"],
                    ["url"=>"https://f7.donggiatri.click/users/demo/wc/dist/","image"=>"","desc"=>"Framework7 + Woo","name"=>"WC"],
                    ["url"=>"https://f7.donggiatri.click/users/demo/f7vay/admin/","image"=>"","desc"=>"Admin for App VayAdmin","name"=>"VayAdmin"],
                    ["url"=>"https://f7.donggiatri.click/users/demo/f7vay/","image"=>"","desc"=>"App Vay","name"=>"Vay"],

                    ["url"=>"https://banhang.donggiatri.click/cafe/","image"=>"","desc"=>"FaucetPOS Merchant","name"=>"FaucetPOS Merchant"],
                    ["url"=>"https://banhang.donggiatri.click/","image"=>"","desc"=>"FaucetPOS","name"=>"FaucetPOS"],

                    ["url"=>"https://wp.donggiatri.click/pos.php","image"=>"","desc"=>"","name"=>"WP POS"],
                    ["url"=>"https://chat.donggiatri.click/","image"=>"","desc"=>"Chat","name"=>"Chat"],
                    ["url"=>"http://game.donggiatri.click/bet/60sec/","image"=>"","desc"=>"Lottory 60s","name"=>"Lottory 60s"],
                  ];
                  foreach ($lists as $k => $item) {
                    $img = $item["image"]?'<img src="'.$item["image"].'" width="24" height="24" />':'<span class="w-40 avatar gd-primary">'.strtoupper($item["name"][0].$item["name"][1]).'</span>';
                     echo '<div class="list-item" data-id="'.$k.'" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false" style="">
                        <div><a href="#" data-abc="true">'.$img.'</a></div>
                        <div class="flex-col"> 
                        <a href="#" class="item-author text-color" data-abc="true">'.$item["name"].'</a>
                            <div class="item-except text-muted ">'.($item["name"]?$item["name"]:"'For what reason would it be advisable for me to think about business content?").'</div>
                        </div>
                        <div class="no-wrap">
                            <div class="item-date text-muted d-none d-md-block">15 weeks ago</div>
                        </div>
                        <div class="actions">
                            <div class="item-action dropdown"> <a href="#" data-toggle="dropdown" class="text-muted" data-abc="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="5" r="1"></circle>
                                        <circle cx="12" cy="19" r="1"></circle>
                                    </svg> </a>
                                <div class="dropdown-menu dropdown-menu-right animate__animated animate__bounce" role="menu"> 
                                    <a class="dropdown-item" target="_blank" href="'.$item["url"].'" data-abc="true">Xem </a>
                                    <a class="dropdown-item download" href="http://faucet.donggiatri.click/ato.apk"  data-abc="true">Tải về </a>
                                    <a class="dropdown-item edit" data-abc="true">Edit</a>
                                    <div class="dropdown-divider"></div> 
                                    <a class="dropdown-item trash" data-abc="true">Delete item</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                  } 
                  ?>
                  
              </div>
              <!--  -->
              <div class="col-md-6" id="example2-right">
                  <div class="ptitle">
    <div class="">
      <span class="title-text">NextJS</span>
      <i class=""></i>
    </div>
</div>  
               
                  <div class="rows">
                  <?php
                  $lists = [
                    ["url"=>"https://mb.posfin.click/","image"=>"","desc"=>"mb","name"=>"Vay"],
                    ["url"=>"https://mbadmin.posfin.click/","image"=>"","desc"=>"mbadmin","name"=>"VayAdmin"],
                    ["url"=>"https://ato.posfin.click/","image"=>"","desc"=>"ato","name"=>"Ato"],
                    ["url"=>"https://aship.posfin.click/","image"=>"","desc"=>"aship","name"=>"Aship"],
                    ["url"=>"https://posfin.click/cafe/","image"=>"","desc"=>"merchant","name"=>"FaucetPOS Merchant"],
                    ["url"=>"https://cafe.posfin.click/","image"=>"","desc"=>"Cafe POS","name"=>"FaucetPOS"],

                    ["url"=>"https://pos-ndm.vercel.app","image"=>"","desc"=>"","name"=>"POSDEMO"],
                    ["url"=>"https://chat.posfin.click/","image"=>"","desc"=>"Chat POS","name"=>"Chat"], 
                  ];
                  foreach ($lists as $k => $item) {
                    $img = $item["image"]?'<img src="'.$item["image"].'" width="24" height="24" />':'<span class="w-40 avatar gd-primary">'.strtoupper($item["name"][0].$item["name"][1]).'</span>';
                     echo '<div class="list-item grid-2" data-id="'.$k.'" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false" style="">
                        <div><a href="#" data-abc="true">'.$img.'</a></div>
                        <div class="flex-col"> <a href="#" class="item-author text-color" data-abc="true">'.$item["name"].'</a>
                            <div class="item-except text-muted ">'.($item["name"]?$item["name"]:"'For what reason would it be advisable for me to think about business content?").'</div>
                        </div>
                        <div class="no-wrap">
                            <div class="item-date text-muted d-none d-md-block">15 weeks ago</div>
                        </div>
                        <div class="actions">
                            <div class="item-action dropdown"> <a href="#" data-toggle="dropdown" class="text-muted" data-abc="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="5" r="1"></circle>
                                        <circle cx="12" cy="19" r="1"></circle>
                                    </svg> </a>
                                <div class="dropdown-menu dropdown-menu-right animate__animated animate__bounce" role="menu"> 
                                    <a class="dropdown-item" target="_blank" href="'.$item["url"].'" data-abc="true">Xem </a>
                                    <a class="dropdown-item download" href="http://faucet.donggiatri.click/ato.apk"  data-abc="true">Tải về </a>
                                    <a class="dropdown-item edit" data-abc="true">Edit</a>
                                    <div class="dropdown-divider"></div> 
                                    <a class="dropdown-item trash" data-abc="true">Delete item</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                  } 
                  ?>
                  </div>
              </div>
              <!--  -->
          </div>
      </div>

     
<div class="ptitle">
    <div class="">
      <span class="title-text">Vanilla JS Popup</span>
      <i class=""></i>
    </div>
</div>
 
<div class="text-center apps">
  <a openWindow-auto="https://f7.donggiatri.click/users/demo/pluto/dist/?test" target="_blank" class="btn btn-default">Ato</a>
  <a openWindow-auto="https://f7.donggiatri.click/users/demo/aship/dist/?test" target="_blank" class="btn btn-default">AShip</a>

  <a openWindow-auto="https://f7.donggiatri.click/users/demo/wc/dist/" target="_blank" class="btn btn-default">Wordpress Woo</a>

  <a openWindow-auto="https://f7.donggiatri.click/users/demo/f7vay/admin/" target="_blank" class="btn btn-default">VayAdmin</a>

  <a openWindow-auto="https://f7.donggiatri.click/users/demo/f7vay/dist/" target="_blank" class="btn btn-default">Vay</a>

  <a openWindow-auto="https://donggiatri.click/cafe/" target="_blank" class="btn btn-default">FaucetPOS Merchant</a>
 
 
  
<a href="https://banhang.donggiatri.click/" target="_blank" class="btn btn-default">Faucet POS</a>
<a openWindow-auto="https://chat.donggiatri.click/" target="_blank" class="btn btn-success">Chat</a>
 


</div> 


<div class="list list-row card" id="sortable" data-sortable-id="0" aria-dropeffect="move">
          
          <div class="row">
              <div class="col-md-6" id="example2-left">
 
<div class="ptitle">
                <div class="">
                  <span class="title-text">CDN FaucetPOS</span>
                  <i class=""></i>
                </div>
            </div>
<?php
$lists = [
  ["url"=>"https://trasua.posfin.click","image"=>"","desc"=>"Trasua POS","name"=>"Trasua"], 
  ["url"=>"https://lamdep.posfin.click","image"=>"","desc"=>"Lamdep POS","name"=>"Lamdep"],
  ["url"=>"https://bida.posfin.click","image"=>"","desc"=>"Bida POS","name"=>"Bida"],
  ["url"=>"https://karaoke.posfin.click","image"=>"","desc"=>"Karaoke POS","name"=>"Karaoke"],
  ["url"=>"https://cafe.posfin.click","image"=>"","desc"=>"Cafe POS","name"=>"Cafe"],
  ["url"=>"https://anvat.posfin.click","image"=>"","desc"=>"Anvat POS","name"=>"Anvat"], 
  ["url"=>"https://sieuthi.posfin.click","image"=>"","desc"=>"Sieuthi POS","name"=>"Sieuthi"], 
  ["url"=>"https://khachsan.posfin.click","image"=>"","desc"=>"Khachsan POS","name"=>"Khachsan"], 
  ["url"=>"https://nhatro.posfin.click","image"=>"","desc"=>"Nhatro POS","name"=>"Nhatro"], 
  ["url"=>"https://thuoctay.posfin.click","image"=>"","desc"=>"Thuoctay POS","name"=>"Thuoctay"]
];
foreach ($lists as $k => $item) {
  $img = $item["image"]?'<img src="'.$item["image"].'" width="24" height="24" />':'<span class="w-40 avatar gd-primary">'.strtoupper($item["name"][0].$item["name"][1]).'</span>';
   echo '<div class="list-item" data-id="'.$k.'" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false" style="">
      <div><a href="#" data-abc="true">'.$img.'</a></div>
      <div class="flex-col"> <a href="#" class="item-author text-color" data-abc="true">'.$item["name"].'</a>
          <div class="item-except text-muted ">For what reason would it be advisable for me to think about business content?</div>
      </div>
      <div class="no-wrap">
          <div class="item-date text-muted d-none d-md-block">15 weeks ago</div>
      </div>
      <div class="actions">
          <div class="item-action dropdown"> <a href="#" data-toggle="dropdown" class="text-muted" data-abc="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                      <circle cx="12" cy="12" r="1"></circle>
                      <circle cx="12" cy="5" r="1"></circle>
                      <circle cx="12" cy="19" r="1"></circle>
                  </svg> </a>
              <div class="dropdown-menu dropdown-menu-right animate__animated animate__bounce" role="menu"> 
                  <a class="dropdown-item" target="_blank" href="'.$item["url"].'" data-abc="true">Xem </a>
                  <a class="dropdown-item download" href="http://faucet.donggiatri.click/ato.apk"  data-abc="true">Tải về </a>
                  <a class="dropdown-item edit" data-abc="true">Edit</a>
                  <div class="dropdown-divider"></div> 
                  <a class="dropdown-item trash" data-abc="true">Delete item</a>
              </div>
          </div>
      </div>
  </div>';
} 
?>
 </div>
 </div>
</div>

<div class="text-center autogrid">
<a href="#"  class="btn btn-default btnreload">Tải lại</a>
<a href="#"  class="btn btn-default btnreloadout">Đăng xuất</a>

     </div>
     </div>

</div>
      </div> 
    </div>
  </div>
</div>