
       
          <div data-setbg="https://hoanghamobile.com/tin-tuc/wp-content/uploads/2023/12/1-1-1-1-for-pc-1.jpg" class="h-[45px] bg mb-8" style="background-size: contain;"></div>
        
          <div class="rows">
                  <?php
                  $lists = [
                    ["url"=>"https://www.66a75.com/#/register?r_code=652563","image"=>"","desc"=>"0.6% lợi nhuận và nhận 0.1% hoàn lại","name"=>"66Club"],
                    ["url"=>"https://82vn.com/#/register?invitationCode=572434","image"=>"","desc"=>"0.6% lợi nhuận và nhận 0.1% hoàn lại","name"=>"82vn"],
                    ["url"=>"https://367vn.com/#/register?invitationCode=17886456406","image"=>"","desc"=>"0.6% lợi nhuận và nhận 0.1% hoàn lại","name"=>"367vn"],
                    ["url"=>"https://f1689.email/?id=843974669","image"=>"","desc"=>"0.6% lợi nhuận và nhận 0.1% hoàn lại","name"=>"F168"],
                    
                    
                    // ["url"=>"https://ehaydn8386.com/vn/vn/","image"=>"","desc"=>"0.2% lợi nhuận và nhận 0.4% hoàn lại","name"=>"G2BET"],
                    // ["url"=>"https://boj21.net/vn/vn/","image"=>"","desc"=>"0.2% lợi nhuận và nhận 0.4% hoàn lại","name"=>"BJ88"],
                    // ["url"=>"https://sv368.cm/m/login","image"=>"","desc"=>"0.2% lợi nhuận và nhận 0.4% hoàn lại","name"=>"SV368"],
                    ["url"=>"https://mb6626.com/","image"=>"","desc"=>"0.2% lợi nhuận và nhận 0.4% hoàn lại","name"=>"MB66"],
                    ["url"=>"https://m.sc881.cc/?id=212372945","image"=>"","desc"=>"0.2% lợi nhuận và nhận 0.4% hoàn lại","name"=>"SC88"],
                    ["url"=>"https://gioithieubanbe.open88b1.vip/?referralCode=ywz0567","image"=>"","desc"=>"0.2% lợi nhuận và nhận 0.4% hoàn lại","name"=>"Open88"],

                    ["url"=>"https://www.c168b2.cc/?id=220093567","image"=>"","desc"=>"0.2% lợi nhuận và nhận 0.4% hoàn lại","name"=>"C186"],
                  ];
                  foreach ($lists as $k => $item) {
                    $img = $item["image"]?'<img src="'.$item["image"].'" width="24" height="24" />':'<span class="w-40 avatar gd-primary">'.strtoupper($item["name"][0].$item["name"][1]).'</span>';
                     echo '<div class="list-item grid-2" data-id="'.$k.'"  data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false" style="">
                        <div><a href="#" data-abc="true">'.$img.'</a></div>
                        <div class="flex-col"> <a href="#" class="item-author text-color" data-abc="true">'.$item["name"].'</a>
                            <div class="item-except text-muted ">'.($item["desc"]?$item["desc"]:"For what reason would it be advisable for me to think about business content?").'</div>
                        </div>
                        <div class="no-wrap" style="display:none;">
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
                                    <a class="dropdown-item download" href="http://faucet.donggiatri.click/ato.apk"  data-abc="true">Tải app </a>
                                    <a class="dropdown-item edit" data-abc="true">Báo cáo</a>
                                    <div class="dropdown-divider"></div> 
                                    <a class="dropdown-item trash" data-abc="true">Xoá</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                  } 
                  ?>
                </div>  