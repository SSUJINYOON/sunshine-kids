$(function(){
  $('.faq-section button').click(function(){
    $('.faq-section p').stop().slideUp()
    $(this).siblings('p').stop().slideToggle()
    $('.faq-section button').not($(this)).removeClass('active')
    $(this).toggleClass('active')
  }) 
})//ready