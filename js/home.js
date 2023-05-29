$(function(){
  /* carousel------------------------------------------- */
  responsive_carousel_horz(".home-visual", false, 3000, 10000) 
  bubble('.bubble','./img/bubble')
  /* section1,2,3 motion-------------------------------------------- */
  var type1 = new Type_effect('.home-section1 h2',100)
  var type2 = new Type_effect('.home-section2 h2',100)
  var type3 = new Type_effect('.home-section3 h2',100)

  type1.play()

  function fn(){
    $('.home-section1 li, .home-section2 li').each(function(){
      var t = $(this).offset().top
      if(scry >= t - winh * 0.8){
        $(this).addClass('active')
      }else{
        $(this).removeClass('active')
      }
    })

    $('.home-section3 li').each(function(){
      var t = $(this).offset().top
      var h = $(this).innerHeight()
      var meta = 0 + (scry - (t - winh * 0.5 + h * 0.5)) * 0.08
      $(this).find('img').css({'transform':`scale(1.4) translateY(${meta}px)`})
    })//each

    /* typing effect */
    var t = $('.home-section2 h2').offset().top
    if(scry > t - winh * 0.8){
      type2.play()
    }else{
      type2.reverse()
    }//if else
    
    var t = $('.home-section3 h2').offset().top
    if(scry > t - winh * 0.8){
      type3.play()
    }else{
      type3.reverse()
    }//if else


  }//fn

  fn()
  $(window).scroll(function(){
    fn()
  }).resize(function(){
    fn()
  })//win event
})//ready  