(function(win){
  var page =null;
  var modalname="homepage";

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
      var mySwiper = new Swiper(".mainswipper", {
        spaceBetween: 1,
        slidesPerView: 1,
        centeredSlides: true,
        roundLengths: true,
        loop: true,
        simulateTouch: false,
        // loopAdditionalSlides: 30,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev" } 
        });
  
  
       var example2Left = document.getElementById('example2-left');
        var example2Right = document.getElementById('example2-right');
        // new Sortable(example2Left, {
        //             group: 'shared', 
        // }); 
      //new Sortable(example2Right, { group: 'shared', animation: 150 }); });
 
 
   
     $(".btnreload").on("click",function(){
        showLoader();

        document.location.reload();
      
    }); 

    $(".btnreloadout").on("click",function(){
      $.blockUI({ message: `<div class="text-center">
    <div><img src="assets/cockles-logo.png" width="34" height="34" /></div>
    <div>Đang đăng xuất...</div>
  </div>` });

      userSDK.logout(function(){
         document.location.reload();
      });
      
    });  
  }

  function getWait(m){
      m= m||30;
      return Date.now() +(m*60*1000);
  }

  function initClaim(){
     var user = getUser();

     var msgclaim = $(".counter .msgclaim");
     var bar = $(".counter .bar");
     var latest = user.pluto_claim;
     var dd = getWait();
      if(latest){ 
           dd = isNaN(latest)?new Date(latest).getTime():latest*1;
      }else{
         user.pluto_claim = dd;
         user.save();
      }

      render_money(user);
      //
      

      //go
     var timestart = progressCircleTimer(bar,{
        timer : dd,
        onFormat: function(s){
           if(this.data){
             return this.data.format;
           }
           return s;
        },
        onUpdate : function(info){
              
 
            timestart.bar.update(info.per.toFixed(2)); 
            msgclaim.html(`<span class="btn btn-primary no">Vui lòng chờ  cho lượt kế tiếp.</span>`);
        },
        onComplete: function(){

            msgclaim.html(`<span class="btn btn-primary no btnclaim">Claim ngay</span>`);
        }
     }); 


     msgclaim.on("click",".btnclaim",function(){
      if(!timestart.data || timestart.data.time<=0){
          var next = getWait();

          if(!user.claim){
            user.claim=[];
          }
          user.claim.push({date:Date.now(),money:(randomIntFromInterval(3,20)/1000).toFixed(2)});
          user.pluto_claim = next; 
          user.save();
         //ready
         timestart.timer.start(next);

         render_money(user);

         if(typeof  MyAds=="function")MyAds().then(function(){

         });
      }
      
     }); 

     
  }


  function _updateu(u){
     try{
      var id = u.barcode||"--";
       $(".fullnametxt").html(u.fullname||u.name||u.barcode||u.id);

       $(".uuid").html(id); 
       $(".uuidcopy").attr("data-copy",id);
      if(u.avatar){
         $(".avatarblock").attr("src",u.avatar); 
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
    initClaim();

    _darkmodetheme(); 

    _updateu(e.user);

    _initwifi();
 
  }).on('hidden.bs.modal',"#"+modalname,function(){
   
  });
 
  /*
window.openClaim({
   user : user
})
 */ 
window.openClaim = function(options){
      options = $.extend({
          user:null,
          title:"Claim", 
          callback:function(r){

          }
      },options,true);

      var user = options.user;

      var barcode = user.barcode||"--";

      var sheet = openSheet({
      height:170,
      data:`
      <div class="boxchoosernap" style="height: 100%;overflow: hidden;display: flex;flex-direction: column;    padding-bottom: 24px;">
      <p class="welcome-s">${options.title}</p>
      <div action="" style="flex: 1;overflow-y: auto;    text-align: center;">
           <div class="counter">
            <div class="bar"></div>
            <div class="msgclaim"><span class="btn btn-primary no btnclaim">Claim ngay</span></div>
          </div>
          <p>Bạn đang có <span class="totalcoin">00.00</span> NHN</p> 
          <div class="text-center mt-8 mb-8 lr center barcodewallet">
             <div class="barcodetxt">${barcode}</div>
             <div>
               <span data-copy="${barcode}"><i class="fa fa-copy"></i></span> 
             </div>
          </div>
      </div> 
      `,
      beforeOpen:function(sheetId){
        var box = $("#"+sheetId); 
        function getWait(m){
            m= m||30;
            return Date.now() +(m*60*1000);
        }
        function render_money(u){
            u.has("claim").then(function(r){
               box.find(".totalcoin").html(r.sum("money"));
            });
        }  

        var msgclaim = box.find(".counter .msgclaim");
         var bar = box.find(".counter .bar");
         var latest = user.pluto_claim;
         var dd = getWait();
          if(latest){ 
               dd = isNaN(latest)?new Date(latest).getTime():latest*1;
          }else{
             user.pluto_claim = dd;
             user.save();
          }

          render_money(user);
          //
          

          //go
         var timestart = progressCircleTimer(bar,{
            timer : dd,
            onFormat: function(s){
               if(this.data){
                 return this.data.format;
               }
               return s;
            },
            onUpdate : function(info){
                  
     
                timestart.bar.update(info.per.toFixed(2)); 
                msgclaim.html(`<span class="btn btn-primary no">Vui lòng chờ  cho lượt kế tiếp.</span>`);
            },
            onComplete: function(){

                msgclaim.html(`<span class="btn btn-primary no btnclaim">Claim ngay</span>`);
            }
         }); 


         msgclaim.on("click",".btnclaim",function(){
          if(!timestart.data || timestart.data.time<=0){
              var next = getWait();

              if(!user.claim){
                user.claim=[];
              }
              user.claim.push({date:Date.now(),money:(randomIntFromInterval(3,20)/1000).toFixed(2)});
              user.pluto_claim = next; 
              user.save();
             //ready
             timestart.timer.start(next);

             render_money(user);

             if(typeof  MyAds=="function")MyAds().then(function(){

             });
          }
          
         }); 
           
      }
  });
  };
})(window);