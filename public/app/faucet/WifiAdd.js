(function(win){
  var page =null;
  var modalname="WifiAdd";
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

   

     page.find("form").formValidate({
        submitHandler : function(form){
            
           var data= $(form).serializeObject();
           // data.map = encodeURIComponent(data.map);
           //valdiate again
    
           showLoader();
            try{
                 appconfig.database.model("wifi").post(data,function(res){
               console.log(res);
               Toast.Center(res.message);

               form.reset();
           });
            }catch(ee){
              console.log(ee);
            }
          
        }
      });
      
  }).on('hidden.bs.modal',"#"+modalname,function(){
   
  });


  // delegateClick('[data-page="orderitem"]',function(){
  //   var data =  $(this).data("info");
  //   openorder(data);
  // });

  
  

  function openpos(options){ 
        options = $.extend({
            title:"Quản lý bán hàng", 
            callback:function(r){

            }
        },options,true);
        var sheet = openSheet({
                backgroundClickExit:false,
                height:170,
                data:`
                <div class="boxchoosernap" style="height: 100%;overflow: hidden;display: flex;flex-direction: column;    padding-bottom: 24px;">
                <p class="welcome-s">${options.title}</p>
                <div action="" style="flex: 1;overflow-y: auto;">
                     <iframe style="    height: 100%;
    width: 100%;
    position: relative;
    border: 0;
    box-shadow: none;" name="pos" />
                </div> 
                `,
                beforeOpen:function(sheetId){
                     var box = $("#"+sheetId); 

 
                     box.find("iframe").attr({
                        src:options.url,
                        load : function(){

                        }
                     });  
                }
            });
  }


})(window);