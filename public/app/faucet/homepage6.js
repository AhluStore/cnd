(function(win){
  var page =null;
  var modalname="homepage6";

  var list =[
     
    ];

  function render_money(user){
      user.has("claim").then(function(r){
         $(".totalcoin").html(r.sum("money"));
      });
  }  

  var loaded = 0;
  function init(){
    if(loaded){
       
      return;
    
    }

    loaded = 1;
      // var mySwiper = new Swiper(".mainswipper", {
      //   spaceBetween: 1,
      //   slidesPerView: 1,
      //   centeredSlides: true,
      //   roundLengths: true,
      //   loop: true,
      //   simulateTouch: false,
      //   // loopAdditionalSlides: 30,
      //   navigation: {
      //     nextEl: ".swiper-button-next",
      //     prevEl: ".swiper-button-prev" } 
      //   });
    
    $(".btnreload").on("click",function(){
        showLoader();

        document.location.reload();
      
    }); 

    $(".btnreloadout").on("click",function(){
      $.blockUI({ message: `<div class="text-center">
          <div><img src="assets/cockles-logo.png" width="34" height="34" /></div>
          <div>Đang đăng xuất...</div>
        </div>` 
      });

      userSDK.logout(function(){
         document.location.reload();
      });
      
    });  
  }

   

  function _updateu(u){
     try{
      var id = u.barcode||"--";
       $(".fullnametxt").html(u.fullname||u.name||u.barcode||u.id);

       $(".uuid").html(id); 
       $(".uuidcopy").attr("data-copy",id);
      if(u.avatar){
        $(".avatarblock img,.uavatar").attr("src",u.avatar); 
      }

      if(u.barcode){
         $(".barcodetxt").html(u.barcode); 
         $(".barcodewallet").find("[data-copy]").attr("data-copy",u.barcode);
      }else{
        $(".barcodewallet").hide();
      }
     }catch(eeee){}
  }

  function _darkmodetheme(){
    /*boxdarkmode*/
      $(".darkmodetheme").html(`<div class="boxdarkmode">
           <input 
                type="checkbox"
                class="sr-only"
                id="darkmode-toggle"
              >
              <label for="darkmode-toggle" class="toggle">
                <span>Toggle dark mode</span>
              </label>
          </div>`);
      var nh = new Date().getHours();
      if(nh<=6){
        $('[for="darkmode-toggle"]').click();
        $('body').addClass('darkmode');
      }else if(nh>=18){
        $('[for="darkmode-toggle"]').click();
        $('body').addClass('darkmode');
      }
      $("#darkmode-toggle").on("click",function(){
        $('body').toggleClass('darkmode');
      });
      /*End boxdarkmode*/
  }

  function _initwifi(){


     var rowwifi =  $(".rowwifi");
     appconfig.database.model("wifi").get(function(res) {
        console.log(res);
        var html="";
        if(res.data.length){
           html =  res.data.map(function(item,i){
            var img = item.image?`<img src="${item.image}" width="24" height="24" />`:`<span class="w-40 avatar gd-primary">${item.name[0]+item.name[1]}</span>`;
            return `<div class="list-item grid-2" data-info='${JSON.stringify(item)}' data-id="${i}" data-item-sortable-id="0" draggable="true" role="option" aria-grabbed="false" style="">
                        <div class="flex items-center"><a href="#" data-abc="true">${img}</a></div>
                        <div class="flex-col"> 
                            <div  class="item-author text-color" data-abc="true">${item.name}</div>
                            <div class="item-except text-muted truncate">${item.address}</div>
                        </div>
                        <div class="no-wrap">
                            <div class="item-date text-muted d-none d-md-block btn no btn-primary btn-small btnview">Xem mật khẩu</div>
                        </div>
                        <div class="actions">
                            <div class="item-action dropdown"> <a href="#" data-toggle="dropdown" class="text-muted" data-abc="true"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="12" cy="5" r="1"></circle>
                                        <circle cx="12" cy="19" r="1"></circle>
                                    </svg> </a>
                                <div class="dropdown-menu dropdown-menu-right animate__animated animate__bounce" role="menu"> 
                                    <a class="dropdown-item" target="_blank" href="${item.url}" data-abc="true">Xem Map</a>
                                    <a class="dropdown-item download" href="http://faucet.donggiatri.click/a.apk"  data-abc="true">Tải App </a>
                                     
                                </div>
                            </div>
                        </div>
                    </div>`;
           });

          rowwifi.html(html);
        }
    });
  }

  $(document).on('show.bs.modal',"#"+modalname,function(e){
      page = $(e.target);

    init(); 
    _darkmodetheme(); 

    _updateu(e.user);

    _initwifi();
 
  }).on('hidden.bs.modal',"#"+modalname,function(){
   
  });
 

})(window);