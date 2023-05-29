$(function () {

  function fnHeaderMotion() {
    if(winw < 1000){//모바일이라면...
      if( scry>=35){
        $('header').addClass('active')
      }else{
        $('header').removeClass('active')
      }
    }else{//데스크탑이라면.. 
      if(scry >=105){
        $('header').addClass('active')
      }else{
        $('header').removeClass('active')
      }
    }//if else winw  

    if(scry >= 100){
      $('.top-btn').fadeIn()
    }else{
      $('.top-btn').fadeOut()
    }
  }//fnHeaderMotion

  fnHeaderMotion()
  $(window).scroll(function () {
    fnHeaderMotion()
  }).resize(function () {
    fnHeaderMotion()
  })

  $('.top-btn').click(function(){
    /* window.scrollTo({top:0,behavior:'smooth'}) */
    $('body,html').stop().animate({'scrollTop': 0})
  })//click

  /* gnb-sm -----------------------------------------------------*/
  $('.mbtn').click(function () {
    $(this).toggleClass('active')
    $('.gnb-sm').stop().fadeToggle().toggleClass('active')
    TweenMax.to(".gnb-sm.active .bar",0.8,{morphSVG:".gnb-sm .triangle",ease:Elastic.easeIn})
    TweenMax.to(".gnb-sm:not(.active) .bar",0.3,{morphSVG:".gnb-sm .bar-copy",ease:Elastic.easeIn})
    $('.gnb-sm .inner>ul>li>ul').stop().slideUp()
    $('.gnb-sm .inner>ul>li>a').removeClass('active')
  })
  $('.gnb-sm .inner>ul>li>a').click(function (e) {
    e.preventDefault()
    $('.gnb-sm .inner>ul>li>ul').stop().slideUp()
    $(this).siblings('ul').stop().slideToggle()
    $('.gnb-sm .inner>ul>li>a').not($(this)).removeClass('active')
    $(this).toggleClass('active')
  })
  /* gnb-lg -----------------------------------------------------*/
  $('.gnb-lg>ul').mouseenter(function () {
    $('.gnb-lg>ul>li>ul').stop().slideDown()
    TweenMax.to(".gnb-lg svg .bar",0.5,{morphSVG:".gnb-lg svg .triangle",ease:Linear.easeNone})
  })
  $('.gnb-lg').mouseleave(function () {
    $('.gnb-lg>ul>li>ul').stop().slideUp()
    TweenMax.to(".gnb-lg svg .bar",0.5,{morphSVG:".gnb-lg svg .bar-copy",ease:Linear.easeNone})
  })
  /* ------------------------------------- */
})//ready