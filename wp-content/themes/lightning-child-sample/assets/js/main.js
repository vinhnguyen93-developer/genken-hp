function openSearchForm() {
  $('#search-form').addClass('search-form-is-active');
}

$(document).ready(function () {
  $('#search-input').blur(function () {
    $('#search-form').removeClass('search-form-is-active');
    $('#search-input').val('');
  });

  $('#toggle-custom').click(function () {
    $(this).addClass('toggle-custom-non-active');
    $('.toggle-close').addClass('toggle-close-active');
    $('.header-nav').addClass('menu-is-active');
  });

  $('.toggle-close').click(function () {
    $(this).removeClass('toggle-close-active');
    $('#toggle-custom').removeClass('toggle-custom-non-active');
    $('.header-nav').removeClass('menu-is-active');
  });
});
