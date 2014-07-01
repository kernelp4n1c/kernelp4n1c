(function() {
  var doCommentButton;
  var commentTemplate;
  $(document).ready(function() {
    doCommentButton = $('#do-comment');
    commentTemplate = _.template($('#comment-template').html());

    doCommentButton.on('click', doComment);
    $('#comment-text').on('keyup', enableButton);
    $('#comment-list').on('click', '.like', doLike);
    $('#comment-list').on('click', '.dislike', doDisLike);
    $('.date').each(function(idx, el) {
      var timestamp = parseInt(el.innerHTML, 10);
      el.innerHTML = parseDate(timestamp);
    });
  });
  enableButton = function() {
    doCommentButton.get(0).disabled = this.value.trim().length <= 0;
  };
  doComment = function(e) {
    var teacherId = e.currentTarget.dataset.id;
    var text = $('#comment-text').val().trim();
    var data = {
      comment: text
    };
    $.post('/teacher/'+teacherId+'/comment', data).done(function(res) {
      appendComment(res);
      $('#comment-text').val('');
      doCommentButton.get(0).disabled = true;
    }).error(function(res) {
      console.log(JSON.stringify(res));
    });
  };
  doLike = function(e) {
    e.preventDefault();
    var commentId = e.currentTarget.dataset.id;
    $.post('/teacher/comment/'+commentId+'/like').done(function(res) {
      $('span[data-like-id="'+res.id+'"]').each(function(idx, el) {
        el.innerHTML = "(" + res.likes +") ";
      });
    }).error(function(err) {
    });
  };
  doDisLike = function(e) {
    e.preventDefault();
    // Not implemented yet
  };
  appendComment = function(comment) {
    var compiled = commentTemplate({
      id: comment.id,
      comment: comment.comment,
      anonAuthor: comment.anonAuthor,
      anonPicture: comment.anonPicture,
      anonTeacherId: comment.teacherId,
      likes: comment.likes,
      date: parseDate(comment.date)
    });
    $('#comment-list').append(compiled);
  };
  parseDate = function(timestamp) {
    var months = ['enero', 'febrero', 'marzo', 'junio', 'julio', 'agosto',
    'septiembre', 'octubre', 'noviembre', 'diciembre'];
    var today = new Date();

    var date = new Date(timestamp*1000);
    if (date.getDate() === today.getDate() &&
        date.getMonth() === today.getMonth() &&
        date.getFullYear() === today.getFullYear()) {
      var difference = Math.abs(today.getHours() - date.getHours());
      if (difference === 0) {
        difference = Math.abs(today.getMinutes() - date.getMinutes());
        if (difference === 0) {
          difference = Math.abs(today.getSeconds() - date.getSeconds());
          return 'Publicado hace ' + difference + ' segundos.';
        }
        return 'Publicado hace ' + difference + ' minutos.';
      }
      if (difference === 1) {
        return 'Publicado hace ' + difference + ' hora.';
      }
      return 'Publicado hace ' + difference + ' horas.';
    }

    return 'Publicado el ' + date.getDate() + ' de ' + months[date.getMonth()] +
    ' del ' + date.getFullYear();
  };
}).call(document, jQuery);
