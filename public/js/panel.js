(function($) {
  $(document).ready(function() {
    $('#comment-list').on('click', '.btn', function() {
      var commentId = this.dataset.id;
      if (confirm('Desea eliminar este comentario?')) {
        console.log('kill');
        $.post('/mod/god/remove/' + commentId).done(function(res) {
          $('#comment-'+commentId).remove();
        }).error(function(err) {});
      }
    });
  });
}).call(document, jQuery);
