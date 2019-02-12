let menu = $('.header-menu')
let menuClone = menu.clone()
let footer = $('footer')

footer.append(menuClone)

// acc
$('.acc-container li').on('click', function () {
  $(this).toggleClass('active')
})

// popup
$('.popup-activate').on('click', function () {
  $('.popup').show()
})
