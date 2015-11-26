$(document).ready(function(){

  var dots = $('.gallery ul').length
  $('.gallery ul li:eq(0)').addClass('sel')

  fading()

  function fading(){
    if ( dots > 0) {
      timer = setInterval(function(){
        fade()
      },10000)
      function fade(){
        var $sel = $('.gallery ul li.sel')
          , $next = $sel.next()
        if($next.length){
          $sel.removeClass('sel')
          $next.addClass('sel')
        }else{
          $sel.removeClass('sel')
          $('.gallery ul li:eq(0)').addClass('sel')
        }
      }
    }
  }

  $('.gallery').hover( function(){ clearInterval(timer) } , function(){ fading() } )

})
