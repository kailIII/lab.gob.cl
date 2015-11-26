$(document).ready(function(){

  $('a.hamburger').on('click',function(){
    $('header.global').toggleClass('mobile')
  })

  // Gallery Slider
  var dots = $('div.slider article').length
  $('div.slider article:eq(0)').addClass('sel')
  // Fading Start
  fading()

  // Fading Function
  function fading(){
    if ( dots > 0) {
      timer = setInterval(function(){
        fade()
      },5000)
      function fade(){
        var $sel = $('div.slider article.sel')
          , $next = $sel.next()
        if($next.length){
          $sel.removeClass('sel')
          $next.addClass('sel')
        }else{
          $sel.removeClass('sel')
          $('div.slider article:eq(0)').addClass('sel')
        }
      }
    }
  }
  // Stop Fading on Hover
  $('div.slider article').hover( function(){ clearInterval(timer) } , function(){ fading() } )
  $('.nav-slider').hover( function(){ clearInterval(timer) } , function(){ fading() } )
  // Go to selected Slide
  $('.nav-slider a').on('click',function(e){
    e.preventDefault();
    // Reset classes
    $('div.slider article').removeClass('sel')
    // Select the Slide
    var link = $(this).attr('href')
    $(link).addClass('sel')
    return false
  })

})
