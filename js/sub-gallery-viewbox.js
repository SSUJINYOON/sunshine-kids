$(function(){
  /* viewbox */
  $(window).load(function(){
    $('.viewbox-gallery-section a').viewbox()
  })//load  

  /* scroll motion */
  function fn(){
    $('.viewbox-gallery-section li').each(function(){
      var offsetTop = $(this).offset().top
      if(scry >= offsetTop - winh*0.9){
        $(this).addClass('active')
      }else{
        $(this).removeClass('active')
      }//if else
    })//each
  }//fn

  fn()
  $(window).scroll(function(){
    fn()
  }).resize(function(){
    fn()
  })//win event
})//ready 
