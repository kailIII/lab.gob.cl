$(document).ready(function(){

  //---------------------------------------------------------------------------
  // Hamburger Menu Toggler
  //---------------------------------------------------------------------------

  function setHamburger() {

    $(document).on("click", "a.hamburger", function() {
      $('header.global').toggleClass('mobile')
    })

  }

  //---------------------------------------------------------------------------
  // Sets up scrolling functionality for next/prev buttons
  //---------------------------------------------------------------------------


  function goToSlide() {

		$(document).on("click", "a.slide", function() {

      var slideId     = $(this).attr('href')
        , slideClass  = slideId.slice(1)

      // Clean and add classes to Menu
      $('a.slide').removeClass('slide-01 slide-02 slide-03 slide-04 slide-05 slide-06 slide-07 slide-08 slide-09 slide-10 ')
      $(this).addClass(slideClass)

      // Clean and add classes to Slide
      $('section').removeClass('open')
      $(slideId).addClass('open')

      event.preventDefault()
      return false

		})


  }
  // --------> end of setScroll <---------

  goToSlide()
  setHamburger()



})
