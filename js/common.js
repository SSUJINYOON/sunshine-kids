function fnWinInfo(){
  window.scry = $(window).scrollTop()
  window.scrx = $(window).scrollLeft()
  window.winh = $(window).innerHeight()
  window.winw = $(window).innerWidth()
}//fnWinInfo

fnWinInfo()
$(window).resize(function(){
  fnWinInfo()
}).scroll(function(){
  fnWinInfo()
})//windowEvt

/*smooth wheel effect-------------------------------------------------- */
var scrSpeed = 0

window.addEventListener('mousewheel',function(e){
  e.preventDefault()
  delta = e.wheelDeltaY / -120 
  scrSpeed += 3 * delta
},{passive:false})

setInterval(function(){
  window.scrollTo({
    top : scry + scrSpeed
  })
  scrSpeed *= 0.93
},20)