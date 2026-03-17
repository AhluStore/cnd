(function(win){
  var page =null;
  var modalname="mineorder";
  var list =[
     
  ];

  $(document).on('show.bs.modal',"#"+modalname,function(e){
      page = $(e.target);



      // page.find("ul").html(list.map(function(v){
      //   return `<li  data-id='${v.id}'  data-info='${JSON.stringify(v)}'>
      //           <div class="item">
      //              <div class="img"><img src="${v.image}" alt=""></div>
      //              <div class="info">
      //                 <p>${v.name}</p>
      //                 <p class="opacity">${v.desc}</p>
      //                 <div class="location"><span class="badge">${v.shop.location}</span></div>
      //              </div>
      //              <div class="right">
      //                ${show_money_none(v.point)}
      //              </div>
      //           </div>
      //        </li>`
      // }).join(""));

      


      
  }).on('hidden.bs.modal',"#"+modalname,function(){
   
  });

  delegateClick('[data-page="orderitem"]',function(){
    var data =  $(this).data("info");
    openorder(data);
  });

  
  

  function openorder(options){
        var user = getUser();
        var sheet = openSheet({
                height:150,
                data:`
                <div class="boxchoosernap" style="height: 100%;overflow: hidden;display: flex;flex-direction: column;    padding-bottom: 24px;">
                <p class="welcome-s">Đơn hàng ${options.barcode}</p>
                <form action="" style="flex: 1;overflow-y: auto;">
                    <div class="ptitle">
                        <div class="">
                          <span class="title-text">Thông tin</span>
                          <i class=""></i>
                        </div>
                    </div>
                    <div class="infoproduct">
                        <div><img src="${options.shop.logo}" width="24" height="24" />${options.shop.name}</div>

                        <div class='lr' data-info=''>
                            <div class='bg micon' style="background-image:url(${options.product.image})"></div>
                            <div class='info'>
                                <div class="bold">Kem dưỡng da</div>
                                <div>1 x 30,000</div>
                            </div>
                            <div class='r'>
                                <span>30,000</span>
                            </div>
                        </div> 
                    </div>
                    <div class="ptitle">
                        <div class="">
                          <span class="title-text">Vận chuyển</span>
                          <i class=""></i>
                        </div>
                    </div>
                    <div class="infoship groupactive">
                        ${options.ship.map(function(v,i){
                            return `<div class='lr ${i==0?"active":""}' data-info='${JSON.stringify(v)}'>
                            <div class='bg icon' style="background-image:url(${v.image||v.icon})"></div>
                            <div class='info'>
                                <div>${v.name}</div>
                                <div>${v.note}</div>
                            </div>
                            <div class='r'>
                                <span>${show_money_none(v.fee)}</span>
                            </div>
                        </div> `;
                        }).join("")} 
                    </div>
                    <div class="ptitle">
                        <div class="">
                          <span class="title-text">Thông tin người nhận hàng</span>
                          <i class=""></i>
                        </div>
                    </div>
                    <div class="infocustomer"> 
                        <div class="lr"> 
                            <span>Họ và Tên</span>
                            <span data-copy="${user.fullname}">${user.fullname}</span>
                        </div>
                        <div class="lr"> 
                            <span>Số điện thoại</span>
                            <span data-copy="${user.phone}">${user.phone}</span>
                        </div>
                        <div class="lr"> 
                            <span>Địa chỉ</span>
                            <span data-copy="${user.address}">${user.address}</span>
                        </div>
                        
                    </div>
                    <div class="infonote"> 
                        <div class="form-control">${options.note}</div>
                    </div>
                     
                    
                </form>
                 <div class="text-center autogrid">
                        <button type="button" class="btn-primary btn btnclose">Đóng</button>
                        <button class="btn-primary btngo">Thanh toán(<span>30,000</span>)</button>
                    </div>
                </div> 
                `,
                beforeOpen:function(sheetId){
                     var box = $("#"+sheetId); 


                     box.find("form").validate({
                        submitHandler : function(form){
                            
                        
                              // page.find(".modal-footer button").attr("disabled","disabled");
                              
                               
                                 submit = true;
                                 
                               

                                 //valdiate again
                       

                                 $.post("...",{},function(res){
                                    submit = false;
                                     

                                    // if(typeof res==="object"){
                                    //    if(res.code==1){
                                    //       error_div.html(res.message).fadeIn();  
                                    //    }else{
                                    //       error_div.html(res.error).fadeIn(); 
                                    //    }
                                    // }else{
                                    //    error_div.html(res).fadeIn();
                                    // }
                                    // setTimeout(function(){
                                    //       error_div.fadeOut();
                                    // },3000);
                                 });
                             
                           
                           
                        }
                      });
                     box.find(".btnclose").on("click",function(){
                         sheet.close();
                     }); 
                     box.find(".btngo").on("click",function(){
                         box.find("form").submit();
                     }); 
                }
            });
  }


})(window);