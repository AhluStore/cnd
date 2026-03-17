(function(win){
  var page =null;
  var modalname="ishop";

  var list =[
     
     ];


  


  $(document).on('show.bs.modal',"#"+modalname,function(e){
      page = $(e.target);


        var mySwiper = new Swiper(page.find(".mainswipper")[0], {
        spaceBetween: 1,
        slidesPerView: 1,
        centeredSlides: true,
        roundLengths: true,
        loop: true,
        simulateTouch: false,
        loopAdditionalSlides: 30,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev" } 
        });
  
      var deg = Math.floor(Math.random() * 360);

      var gradient = "linear-gradient(" + deg + "deg, " + "#" + createHex() + ", " + "#" + createHex() + ")";
      page.find(".modal-header").css("background",gradient);
      
  }).on('hidden.bs.modal',"#"+modalname,function(){
   
  });
 

})(window);