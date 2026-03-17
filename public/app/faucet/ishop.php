<div class="modal fade modal-flex" id="ishop" tabindex="-1" role="dialog" aria-labelledby="MymodalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="close">x</button>
          <h4 class="modal-title">Cộng đồng</h4>
          <div class="actions">
               
          </div>
        </div>
        <div class="modal-body">
           <!-- Slider main container -->
        <div class="swiper-container mainswipper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
               
                <div class="swiper-slide bg" openwindow-auto="https://banhang.donggiatri.click/cafe/" data-setbg="https://intphcm.com/data/upload/mau-banner-noi-bat.jpg">

                </div>
                <div class="swiper-slide bg" openwindow-auto="https://banhang.donggiatri.click/cafe/" data-setbg="https://intphcm.com/data/upload/mau-banner-dep-khai-truong.jpg" >

                </div>
                <div class="swiper-slide bg" openwindow-auto="https://banhang.donggiatri.click/cafe/" data-setbg="https://shoop.vn/shoop_vn/uploads/2018/03/fe254fe5b0913d2884ecd1e8efec5720.jpg" >

                </div>
                <div class="swiper-slide">

                    <img openwindow-auto="https://banhang.donggiatri.click/cafe/" width="205" data-setbg="https://intphcm.com/data/upload/mau-banner-do.jpg" alt="">
                </div>
            </div>
              <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>

        <!--  -->

        <div class="ptitle">
            <div class="">
              <span class="title-text">Thương hiệu</span>
              <i class=""></i>
            </div>
        </div>  
        <div class="list list-row card">
        <div class="rows">
            <?php
                  $lists = [
                    ["url"=>"https://f1689.email/?id=843974669","total_sale"=>13,"bg"=>"https://i.pinimg.com/736x/02/d6/9e/02d69ec538facf328b8b02f300333315.jpg","image"=>"","desc"=>"Tân Phú, Hồ Chí Minh","name"=>"CK Coffee"],
                    ["url"=>"https://www.66a75.com/#/register?r_code=652563","total_sale"=>13,"bg"=>"https://png.pngtree.com/thumb_back/fh260/background/20231221/pngtree-shopping-cart-gift-box-orange-creative-background-image_15551116.png","image"=>"","desc"=>"Thủ Đức, Hồ Chí Minh","name"=>"Shop Vạn An"],
                    
                    ["url"=>"https://ehaydn8386.com/vn/vn/","total_sale"=>13,"bg"=>"","image"=>"https://cong-news.appwifi.com/wp-content/uploads/2023/04/MicrosoftTeams-image-6-Large.png","desc"=>"Tân Bình, Hồ Chí Minh","name"=>"Coffee Vina"],
                    ["url"=>"https://boj21.net/vn/vn/","total_sale"=>13,"bg"=>"","image"=>"https://yenkhanhhoa.net.vn/wp-content/uploads/banner-trang-chu.jpg","desc"=>"Tân An, Tây Ninh","name"=>"Long Yến"],
                    ["url"=>"https://sv368.cm/m/login","total_sale"=>13,"bg"=>"","image"=>"https://danviet.ex-cdn.com/files/f1/296231569849192448/2022/10/7/b1-1665158999467-1665159000065764501875.jpg","desc"=>"Năm Căn, cà Mau","name"=>"Đảo Hải Khô"],
                    ["url"=>"https://mb6626.com/","total_sale"=>13,"bg"=>"","image"=>"https://down-vn.img.susercontent.com/vn-11134259-7r98o-lwhi80uh75y1c6@resize_ss640x400","desc"=>"Gò Vấp, Hồ Chí Minh","name"=>"MB66 Coffee"],
                    ["url"=>"https://m.sc881.cc/?id=212372945","total_sale"=>13,"bg"=>"","image"=>"https://thegioihaisan.vn/wp-content/uploads/2019/08/Cua-2016.png","desc"=>"Đầm dơi, Hồ Chí Minh","name"=>"Cua Cà Mau"],
                    ["url"=>"https://gioithieubanbe.open88b1.vip/?referralCode=ywz0567","total_sale"=>13,"bg"=>"","image"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdDs8tTZhOAjLWKJOnXdfPUVgSesxY2Bh_yA&s","desc"=>"Châu Phú, Hồ Chí Minh","name"=>"Cá Lóc AG"],
                  ];
                  foreach ($lists as $k => $item) {
                    $img = $item["image"]?'<img src="'.$item["image"].'" width="24" height="24" />':'<span class="w-40 avatar gd-primary">'.strtoupper($item["name"][0].$item["name"][1]).'</span>';
                     echo '<div class="list-item grid-2 bg '.($item["bg"]?"hasbg":"").'" data-setbg="'.$item["bg"].'" data-id="'.$k.'">
                        <div><a href="#" data-abc="true">'.$img.'</a></div>
                        <div class="flex flexbody"> <a href="#" class="item-author text-color" data-abc="true">'.$item["name"].'</a>
                            <div class="item-except text-muted text-sm h-1x">'.$item["desc"].'</div>
                        </div>
                        <div class="no-wrap">
                            <div class="item-date text-muted text-sm d-none d-md-block"> đã bán'.$item["total_sale"].'</div>
                        </div>
                        <div class="actions">
                            <div class="item-action dropdown"> <a href="#" data-toggle="dropdown" class="text-muted" data-abc="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="5" r="1"></circle>
                                        <circle cx="12" cy="19" r="1"></circle>
                                    </svg> </a>
                                <div class="dropdown-menu dropdown-menu-right animate__animated animate__bounce" role="menu"> 
                                    <a class="dropdown-item" href="#" data-page="ishopmenu">Truy cập </a>
                                    <a class="dropdown-item" openwindow-auto="'.$item["url"].'" data-abc="true">Website </a>
                                    <a class="dropdown-item" href="#"  data-abc="true">Trò chuyện</a>
                                    <a class="dropdown-item edit" data-abc="true">Báo cáo vi phạm</a>
                                    <div class="dropdown-divider"></div> 
                                    <a class="dropdown-item trash" data-abc="true">Xoá</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                  } 
                  ?>
        </div>
        </div>
      </div> 
    </div>
  </div>
</div>