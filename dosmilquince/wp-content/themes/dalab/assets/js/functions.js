$(window).load(function(){

  var $grid = $('.grid').masonry({
    itemSelector: '.item',
    columnWidth: '.columnSize',
    percentPosition: true,
    gutter: 15
  })

  $grid.imagesLoaded().progress( function() {
    $grid.masonry('layout')
  })

  // $('.posts .post').on('click',function(){
  //   var link = $(this).attr('rel')
  //   window.location = link
  // })

  $('.gallery').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true,
    fade: true,
    cssEase: 'linear',
    prevArrow: '<button type="button" class="slick-prev">Anterior</button>',
    nextArrow: '<button type="button" class="slick-next">Siguiente</button>'
  })

  $('#menu-principal li.menu-item-has-children').on('mouseover',function(){
    $('#menu-principal li').removeClass('sel')
    $(this).addClass('sel')
  })
  $('header.global').on('mouseout',function(){
    $('#menu-principal li').removeClass('sel')
  })


  // Gallery Slider
  var dots = $('div.slider ul li').length
  $('div.slider ul li:eq(0)').addClass('sel')

  // Fading Start
  fading()

  // Fading Function
  function fading(){
    if ( dots > 0) {
      timer = setInterval(function(){
        fade()
      },5000)
      function fade(){
        var $sel = $('div.slider ul li.sel')
          , $next = $sel.next()
        if($next.length){
          $sel.removeClass('sel')
          $next.addClass('sel')
        }else{
          $sel.removeClass('sel')
          $('div.slider ul li:eq(0)').addClass('sel')
        }
      }
    }
  }
  // Stop Fading on Hover
  $('div.slider ul li') .hover( function(){ clearInterval(timer) } , function(){ fading() } )
  // Go to selected Slide
  $('div.slider nav a').on('click',function(e){
    e.preventDefault();
    // Reset classes
    $('div.slider ul li').removeClass('sel')
    // Select the Slide
    var link = $(this).attr('href')
    $(link).addClass('sel')
    return false
  })

})
