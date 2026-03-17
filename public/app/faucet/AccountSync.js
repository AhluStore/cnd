(function(win){
  var page =null;
  var modalname="AccountSync";
  var list =[
     
  ];

  

  $(document).on('show.bs.modal',"#"+modalname,delay(function(e){
      page = $(e.target);

      
      page.find("form").bindData(e.user);

      page.find("form").find("input,textarea").filter(function() { 
        return this.value != ""; 
      }).addClass("has-content");

      page.find(".myuid").html(e.user.id);
      //
      page.find("[data-copy]").attr("data-copy",e.user.barcode);
      var url= document.location.href+(document.location.href.includes("?")?"":"&")+"ref="+e.user.barcode;
      page.find("[data-share]").attr("data-share",`Bạn đang chia sẽ ${url}`);


      if(!e.user.barcode){
         page.find(".barcode").html(e.user.id);
      }

      if(!this._loaded){
        this._loaded = 1;
        onload(page);
      }

      //auto valid
    userSDK.valid({
          barcode: e.user.barcode,
        callback: function(res){
            console.log(res);
            if(res){
              var s = Object.values(res).map(function(n){
               
                if(n=="id_parent"){
                  return `<div class="lr white-view">
                    <div></div>
                    <div>
                       <p>Chưa có mã giới thiệu</p>
                       <div><span class="btn btn-primary" data-miss="${n}">Cập nhật ngay</span></div>
                    </div>
                  </div>`;
                }
                 if(n=="newpassword"){
                  return `<div class="lr white-view">
                    <div></div>
                    <div>
                       <p>Bạn chưa cập nhật mật khẩu</p>
                       <div><span class="btn btn-primary" data-miss="${n}">Cập nhật ngay</span></div>
                    </div>
                  </div>`;
                }
                 if(n=="kycimage"){
                  return `<div class="lr white-view">
                    <div></div>
                    <div>
                       <p>Cập nhật định dạnh KYC để đảm bảo tài khoản toàn</p>
                       <div><span class="btn btn-primary" data-miss="${n}">Cập nhật ngay</span></div>
                    </div>
                  </div>`;
                } 

                return "";
              }).join("");
              page.find(".myid").html(s);
          }
        }
      });

      
  },700)).on('hidden.bs.modal',"#"+modalname,function(){
  
      page.find(".modal-footer").remove();
      page.find("li.active").removeClass("active");
  });

  
function onload(page){

  page.on("click",".btnpay",function(){
     var u = getUser();
     var me = $(this);

     showLoader();
    APay(function(){
      hideLoader();
      if(me.hasClass("d")){
        faucetpayment.deposit({}); 
      }else if(me.hasClass("w")){
        faucetpayment.withdraw({});
      }else if(me.hasClass("t")){
        faucetpayment.transfer({});
      }else if(me.hasClass("q")){
        faucetpayment.myQR({});
      }
    });
  });

  page.on("click",".mineshop",function(){
     var u = getUser();
     //check has
     "mineshop".router();  
  });

  page.on("click","[data-miss]",function(){
     var me = $(this);
     userSDK.miss(me.data("miss"),function(r){
        me.closest(".lr").remove();
     });  
   });


  var u = getUser();
   if(u.avatar){
       page.find(".vlockavatar img").attr("src",u.avatar); 
    }
   page.find(".vlockavatar img").on("click",function(){
    var me = $(this);
      File.pickerImageCrop({width:95,height:95,callback:function(v){
         me.attr("src",v.base64);
         getUser().set("avatar",v.base64);
      }});
   });
   
  page.find("form").validate({
    submitHandler : function(form){
      var data = $(form).serializeObject();

      var u = getUser();
      // page.find(".modal-footer button,.modal-footer .btn").attr("disabled","disabled");

      u.update(data);
 

           //valdiate again
          
          userSDK.update(data);
          // userSDK.register(data,function(r){
          //   console.log("register",r);
          //   if(this.code==0){
          //     u.set("barcode",this.data.barcode);
          //   }else{
          //     u.update(r);
          //   }
            
          //   page.find("form").bindData(u);
          // });

           // post(document.location.href,{},function(res){
           //    submit = false;
               
           //    page.find(".modal-footer button,.modal-footer .btn").removeAttr("disabled");
           // },true);
      
      alert("Cập nhật thành công.");
    }
  });

  
 
}

})(window);