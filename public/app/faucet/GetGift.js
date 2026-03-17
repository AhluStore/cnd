(function(win){
  var page =null;
  var modalname="GetGift";

  var list =[
     {"ship":{"fee":[{id:"1",name:"JSEXpress",icon:"http://cdn-icons-png.flaticon.com/128/16767/16767813.png",note:"Dự kiến giao hàng trong 3 ngày",fee:3e4},{id:"2",name:"Giao hàng tiêu chuẩn",icon:"https://cdn-icons-png.flaticon.com/128/4280/4280243.png",note:"Dự kiến giao hàng trong 5-7 ngày",fee:1e4},{id:"3",name:"Gia hàng nhanh",icon:"https://cdn-icons-png.flaticon.com/128/17959/17959581.png",note:"Dự kiến giao hàng trong 1 ngày",fee:6e4}],"default":1},"shop":{"name":"Nông trại Cà Mau","location":"Hồ Chí Minh","logo":"https://cdn-icons-png.flaticon.com/128/6415/6415824.png"},"desc":"Tại cửa hàng",id:"1",name:"1 Thùng mì Hảo Hảo",image:"https://bizweb.dktcdn.net/100/514/431/products/bc807eb5970005ab95da5d73372ddd92.jpg?v=1719908832473",point:100000},
     {"ship":{"fee":[{id:"1",name:"JSEXpress",icon:"http://cdn-icons-png.flaticon.com/128/16767/16767813.png",note:"Dự kiến giao hàng trong 3 ngày",fee:3e4},{id:"2",name:"Giao hàng tiêu chuẩn",icon:"https://cdn-icons-png.flaticon.com/128/4280/4280243.png",note:"Dự kiến giao hàng trong 5-7 ngày",fee:1e4},{id:"3",name:"Gia hàng nhanh",icon:"https://cdn-icons-png.flaticon.com/128/17959/17959581.png",note:"Dự kiến giao hàng trong 1 ngày",fee:6e4}],"default":1},"shop":{"name":"Nông trại Cà Mau","location":"Hồ Chí Minh","logo":"https://cdn-icons-png.flaticon.com/128/6415/6415824.png"},"desc":"Tại cửa hàng",id:"1",name:"1 Thùng bia Hiniken",image:"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8-efNfnkBOfewXFdFtK6e4UAijtVmGlMiRg&s",point:300000},
     {"ship":{"fee":[{id:"1",name:"JSEXpress",icon:"http://cdn-icons-png.flaticon.com/128/16767/16767813.png",note:"Dự kiến giao hàng trong 3 ngày",fee:3e4},{id:"2",name:"Giao hàng tiêu chuẩn",icon:"https://cdn-icons-png.flaticon.com/128/4280/4280243.png",note:"Dự kiến giao hàng trong 5-7 ngày",fee:1e4},{id:"3",name:"Gia hàng nhanh",icon:"https://cdn-icons-png.flaticon.com/128/17959/17959581.png",note:"Dự kiến giao hàng trong 1 ngày",fee:6e4}],"default":1},"shop":{"name":"Nông trại Cà Mau","location":"Hồ Chí Minh","logo":"https://cdn-icons-png.flaticon.com/128/6415/6415824.png"},"desc":"202 đường 3/2 quận 10, TP HCM - mã code 0001",id:"1",name:"1 Vé massage chân trị liệu",image:"https://fujispacenter.vn/wp-content/uploads/2024/06/massage-chan-5_1686394927.webp",point:320000},
     {"ship":{"fee":[{id:"1",name:"JSEXpress",icon:"http://cdn-icons-png.flaticon.com/128/16767/16767813.png",note:"Dự kiến giao hàng trong 3 ngày",fee:3e4},{id:"2",name:"Giao hàng tiêu chuẩn",icon:"https://cdn-icons-png.flaticon.com/128/4280/4280243.png",note:"Dự kiến giao hàng trong 5-7 ngày",fee:1e4},{id:"3",name:"Gia hàng nhanh",icon:"https://cdn-icons-png.flaticon.com/128/17959/17959581.png",note:"Dự kiến giao hàng trong 1 ngày",fee:6e4}],"default":1},"shop":{"name":"Nông trại Cà Mau","location":"Hồ Chí Minh","logo":"https://cdn-icons-png.flaticon.com/128/6415/6415824.png"},"desc":"101 đường  Tân Kỳ Tân Quý, quận Tân Phú, TP HCM - mã code 0001",id:"1",name:"1 Buffe hải sản Alibaba",image:"https://thegioiamthuc.net/am-thuc/Cache/Uploads/thegioiamthuc/2022/buffer-bbq-hai-sai-alibaba8.jpg",point:320000},
     {"ship":{"fee":[{id:"1",name:"JSEXpress",icon:"http://cdn-icons-png.flaticon.com/128/16767/16767813.png",note:"Dự kiến giao hàng trong 3 ngày",fee:3e4},{id:"2",name:"Giao hàng tiêu chuẩn",icon:"https://cdn-icons-png.flaticon.com/128/4280/4280243.png",note:"Dự kiến giao hàng trong 5-7 ngày",fee:1e4},{id:"3",name:"Gia hàng nhanh",icon:"https://cdn-icons-png.flaticon.com/128/17959/17959581.png",note:"Dự kiến giao hàng trong 1 ngày",fee:6e4}],"default":1},"shop":{"name":"Nông trại Cà Mau","location":"Hồ Chí Minh","logo":"https://cdn-icons-png.flaticon.com/128/6415/6415824.png"},"desc":"Tại cửa hàng",id:"1",name:"Buffe Hải Sản Đại Dương",image:"https://lh3.googleusercontent.com/gps-cs-s/AG0ilSxNCCHc_WDLYpsNCRsyJ9Zb-AqXQ1qBmh7tYh424hiLaa5xZJ5y9Zy5FMsHvyGtkhvErEsk20O_sh-0HesCQEMN4UOQTR8K9C2_7ePxyMpxwnWlToYr-vX6mwiw5UAYDge0Yvjp=w228-h228-n-k-no",point:10320000},
     {"ship":{"fee":[{id:"1",name:"JSEXpress",icon:"http://cdn-icons-png.flaticon.com/128/16767/16767813.png",note:"Dự kiến giao hàng trong 3 ngày",fee:3e4},{id:"2",name:"Giao hàng tiêu chuẩn",icon:"https://cdn-icons-png.flaticon.com/128/4280/4280243.png",note:"Dự kiến giao hàng trong 5-7 ngày",fee:1e4},{id:"3",name:"Gia hàng nhanh",icon:"https://cdn-icons-png.flaticon.com/128/17959/17959581.png",note:"Dự kiến giao hàng trong 1 ngày",fee:6e4}],"default":1},"shop":{"name":"Nông trại Cà Mau","location":"Hồ Chí Minh","logo":"https://cdn-icons-png.flaticon.com/128/6415/6415824.png"},"desc":"200 đường  Tây Thạnh, quận Tân Phú, TP HCM - mã code 0001",id:"1",name:"1 Buffe hải sản Alibaba",image:"https://thegioiamthuc.net/am-thuc/Cache/Uploads/thegioiamthuc/2022/buffer-bbq-hai-sai-alibaba8.jpg",point:29000},

     {"ship":{"fee":[{id:"1",name:"JSEXpress",icon:"http://cdn-icons-png.flaticon.com/128/16767/16767813.png",note:"Dự kiến giao hàng trong 3 ngày",fee:3e4},{id:"2",name:"Giao hàng tiêu chuẩn",icon:"https://cdn-icons-png.flaticon.com/128/4280/4280243.png",note:"Dự kiến giao hàng trong 5-7 ngày",fee:1e4},{id:"3",name:"Gia hàng nhanh",icon:"https://cdn-icons-png.flaticon.com/128/17959/17959581.png",note:"Dự kiến giao hàng trong 1 ngày",fee:6e4}],"default":1},"shop":{"name":"Nông trại Cà Mau","location":"Hồ Chí Minh","logo":"https://cdn-icons-png.flaticon.com/128/6415/6415824.png"},"desc":"Tại công ty",id:"1",name:"SÒ HUYẾT CỒ(10-30CON/KG)",image:"https://hoatuoc.com/wp-content/uploads/2022/05/484794298_657940166645671_2625748068880062517_n.jpg",point:2900000},
  ];

  $(document).on('show.bs.modal',"#"+modalname,function(e){
      page = $(e.target);



      page.find("ul").html(list.map(function(v){
        return `<li  data-id='${v.id}'  data-info='${JSON.stringify(v)}'>
                <div class="item">
                   <div class="img"><img src="${v.image}" alt=""></div>
                   <div class="info">
                      <p>${v.name}</p>
                      <p class="opacity">${v.desc}</p>
                      <div class="location"><span class="badge">${v.shop.location}</span></div>
                   </div>
                   <div class="right">
                     ${show_money_none(v.point)}
                   </div>
                </div>
             </li>`
      }).join(""));

      


      
  }).on('hidden.bs.modal',"#"+modalname,function(){
  
      page.find(".modal-footer").remove();
      page.find("li.active").removeClass("active");
  });

  delegateClick("#GetGift li .item",function(){
    var footer =  page.find(".modal-footer");
    if(footer.length==0){
       page.find(".modal-content").append(`<div class="modal-footer"></div>`);
    }
    page.find(".modal-footer").html(` 
      <button type="button" class="btn btn-info btngiftinfo">Thông tin</button>
      <button type="button" class="btn btn-primary btnorder">Tiếp theo</button>
     `);
  });

  delegateClick(".btngiftinfo",function(){
      var sheet = openSheet({
                data:`
                <div class="boxchoosernap" style="height: 100%;overflow: hidden;display: flex;flex-direction: column;    padding-bottom: 24px;">
                <p class="welcome-s">Quy định và chính sách</p>
                <form action="" style="flex: 1;overflow-y: auto;">
  
                     
                    
                </form>
                <div class="text-center autogrid">
                        <button class="btn-primary btn btnclose">Đóng</button>
                    </div> 
                </div> 
                `,
                beforeOpen:function(sheetId){
                     var box = $("#"+sheetId); 
                     box.find(".btnclose").on("click",function(){
                         sheet.close();
                     }); 
                }
            });
  });


  delegateClick(".btnorder",function(){

    getUser().has("claim").then(function(r){
         var money = r.sum("money");
       

        // if(money>data.money){
            var data= page.find("li.active").data("info");
            var ship = data.ship.fee||[
                {
                    name:"JSEXpress",
                    icon:"http://cdn-icons-png.flaticon.com/128/16767/16767813.png",
                    note:"Dự kiến giao hàng trong 3 ngày",
                    fee: 30000
                },
                {
                    name:"Giao hàng tiêu chuẩn",
                    icon:"https://cdn-icons-png.flaticon.com/128/4280/4280243.png",
                    note:"Dự kiến giao hàng trong 5-7 ngày",
                    fee: 10000
                },
                {
                    name:"Gia hàng nhanh",
                    icon:"https://cdn-icons-png.flaticon.com/128/17959/17959581.png",
                    note:"Dự kiến giao hàng trong 1 ngày",
                    fee: 60000
                }
            ];
            var shop=data.shop||{
                name :"ABC",
                logo :"http://cdn-icons-png.flaticon.com/128/16767/16767813.png",
            };
            openorder({money:money,product:data,ship:ship,shop:shop,callback:function(res){

            }});
        // }else{
        //     alert("Số điểm không đủ.");
        // }
    });
      
  });

  function openorder(options){
        var user = getUser();
        var sheet = openSheet({
                height:150,
                data:`
                <div class="boxchoosernap" style="height: 100%;overflow: hidden;display: flex;flex-direction: column;    padding-bottom: 24px;">
                <p class="welcome-s">Thanh toán</p>
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
                        <div class="group-input"> 
                            <div class="form-group input-effect">
                               <input value="${user.fullname}" type="text" id="fullname" name="fullname" class="form-control effect-24 required ${user.fullname?"has-content":""}"  />  
                                <label>Họ và Tên(*)</label>
                                <span class="focus-bg"></span>
                            </div>
                            <div class="form-group input-effect">
                              <input value="${user.phone}" type="text" id="phone" name="phone" minlength="10" class="effect-24 form-control required ${user.phone?"has-content":""}"  />  
                                <label>Số điện thoại(*)</label>
                                <span class="focus-bg"></span> 
                            </div>
                            <div class="form-group input-effect">
                              <input value="${user.address}" type="text" id="address" name="address" class="form-control effect-24 required address ${user.address?"has-content":""}"  />  
                                <label>Địa chỉ</label>
                                <span class="focus-bg"></span>
                            </div>
                        </div>
                    </div>
                    <div class="infonote form-group"> 
                         <input type="text" id="note" name="note" class="form-control effect-24" />  
                            <label>Ghi chú</label>
                            <span class="focus-bg"></span>  
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

// $(document).ready(function(){
  



//   var submit = false;
//   $("#GetGift form").validate({
//     submitHandler : function(form){
//        // if(submit){
//        //    return;
//        // }
  
//        getUser().has("claim").then(function(r){
//         var money = r.sum("money");
//         // var data= $(form).serializeObject();
//           var data= $(form).find("li.active").data("info");

//         // if(money>data.money){
//           // page.find(".modal-footer button").attr("disabled","disabled");
          
           
//              submit = true;
             
           

//              //valdiate again
   

//              $.post("...",{},function(res){
//                 submit = false;
                 

//                 // if(typeof res==="object"){
//                 //    if(res.code==1){
//                 //       error_div.html(res.message).fadeIn();  
//                 //    }else{
//                 //       error_div.html(res.error).fadeIn(); 
//                 //    }
//                 // }else{
//                 //    error_div.html(res).fadeIn();
//                 // }
//                 // setTimeout(function(){
//                 //       error_div.fadeOut();
//                 // },3000);
//              });
         
//         // }else{

//         //     alert("Số điểm không đủ.");
//         // }
//       });

      
       
//     }
//   });
// });

})(window);