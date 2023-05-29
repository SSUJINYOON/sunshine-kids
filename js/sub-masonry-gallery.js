$(function(){

  /* masonry ----------------*/
  $(window).load(function(){
    $('.masonry-gallery-section ul').masonry(
      {itemSelector:'.masonry-gallery-section li'}
    )
  })//load
  /* motion */  
  function fn(){
    $('.masonry-gallery-section li').each(function(){
      var offsetTop = $(this).offset().top 
      var h = $(this).innerHeight() 
      var meta = 0 + (scry - (offsetTop - winh*0.5 + h*0.5)) * 0.1
      $(this).find('img').css({'transform':`scale(1.4) translateY(${meta}px)`})
    })//each
  }//fn

  fn()
  $(window).scroll(function(){
    fn()
  }).resize(function(){
    fn()
  })
})//ready