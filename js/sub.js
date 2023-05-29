$(function () {

  var addr = location.href
  var category 
  var menu

  if (addr.match('greet')) {
    category = 1; menu = 1
  } else if (addr.match('video')) {
    category = 1; menu = 2
  } else if (addr.match('location')) {
    category = 1; menu = 3
  } else if (addr.match('biz-intro')) {
    category = 2; menu = 1
  } else if (addr.match('biz-area')) {
    category = 2; menu = 2
  } else if (addr.match('gallery-viewbox')) {
    category = 3; menu = 1
  }else if (addr.match('gallery-masonry')) {
    category = 3; menu = 2
  }else if (addr.match('gallery-isotope')) {  
    category = 3; menu = 3
  }else if (addr.match('gallery-justify')) {
    category = 3; menu = 4
  } else if (addr.match('contact')) {
    category = 4; menu = 1
  } else if (addr.match('notice')) {
    category = 5; menu = 1
  } else if (addr.match('freeboard')) {
    category = 5; menu = 2
  } else if (addr.match('faq')) {
    category = 5; menu = 3 
  }

  $('.snb .category' + category).show()
  $(`.snb .menu${category}-${menu}`).addClass('active')

  var categoryLabel = $(`.snb .category${category} em`).text()
  $('.breadcrumb .category-label').text(categoryLabel)
  var menuLabel = $(`.snb .menu${category}-${menu}`).text()
  $('.breadcrumb .menu-label').text(menuLabel)

  /* sub-visual-category형태
    $('.sub-visual .visual' + category).fadeIn().addClass('active')
    setTimeout(function(){
      //$('.sub-visual .visual' + category).addClass('active')
    },1)
  */

  /* fadeInOut 슬라이더 */
  var n = 1
  var isClick = true
  var intervalID
  var timeoutID
  
  intervalID = setInterval(function(){
    n++
    change()
  },3000)

  function change(){
    if (n > 4) n = 1
    if (n < 1) n = 4
    $('.sub-visual figure').stop().fadeOut().removeClass('active')
    $('.sub-visual .visual' + n).stop().fadeIn().addClass('active')
    $('.sub-visual .controls button').removeClass('active')
    $('.sub-visual .controls .btn' + n).addClass('active')
  }//fn change
  
  function autoplay(){
    clearInterval(intervalID)
    clearTimeout(timeoutID)
    timeoutID = setTimeout(function(){
      intervalID = setInterval(function(){
        n++
        change()
      },3000)
    },5000)
  }//fn autoplay

  function clickContrl(){
    isClick = false
    setTimeout(function(){
      isClick = true 
    },1000)
  }//fn

  $('.sub-visual .next').click(function () {
    if(isClick === false) return false
    clickContrl()
    n++
    change()
    autoplay()
  })//click

  $('.sub-visual .prev').click(function () {
    if(isClick === false) return false
    clickContrl()
    n--
    change()
    autoplay()
  })//click

  $('.sub-visual .controls button').click(function(){
    n = parseInt($(this).val())
    change()
    autoplay()
  })//click
})//ready 