$(document).ready(function() {
  return $('[data-form_approve=true]').submit(function(e) {
    var p;
    e.preventDefault();
    p = {
      id: $(this).find('[name=id]').val(),
      _token: $('[data-hidden=true]').val()
    };
    return $.ajax({
      url: $(this).attr('action'),
      type: $(this).attr('method'),
      data: p,
      complete: function(s) {
        if (s.responseJSON.status === 'OK') {
          return $("[data-id=" + s.responseJSON.id + "]").remove();
        }
      },
      content: 'json'
    });
  });
});