$(document).ready(function(){

  var classNames = ['color-1', 'color-2', 'color-3']

  function randomColor () {

    var index = Math.floor(Math.random() * classNames.length),
        className = classNames[index]



    if ($('body').hasClass(className))
      return randomColor()

    $('body').removeClass(classNames.join(' '))
      .addClass(className)

  }

  setInterval(randomColor, 60 * 1000)
  randomColor()

})
