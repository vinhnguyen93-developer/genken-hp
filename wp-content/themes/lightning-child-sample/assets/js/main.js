function openSearchForm() {
  $('#search-form').addClass('search-form-is-active');
}

$(document).ready(function () {
  $('#search-input').blur(function () {
    $('#search-form').removeClass('search-form-is-active');
    $('#search-input').val('');
  });
});
