(function() {
  var doCommentButton;
  $(document).ready(function() {
    doCommentButton = $('#do-comment');
    doCommentButton.on('click', doComment);
    $('#comment-text').on('keyup', enableButton);
    $('.date').each(function(idx, el) {
      var timestamp = parseInt(el.innerHTML, 10);
      el.innerHTML = parseDate(timestamp);
    });
    $('#comment-list').on('click', '.like', doLike);
    $('#comment-list').on('click', '.dislike', doDisLike);
  });
  enableButton = function() {
    if(this.value.trim().length > 0) {
      doCommentButton.get(0).disabled = false;
    } else {
      doCommentButton.get(0).disabled = true;
    }
  };
  doComment = function(e) {
    var teacherId = e.currentTarget.dataset.id;
    var text = $('#comment-text').val().trim();
    var data = {
      comment: text
    };
    $.post('/teacher/'+teacherId+'/comment', data).done(function(res) {
      appendComment(res);
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
  };
  appendComment = function(comment) {
    var tpl = '<li>';
    tpl += '<div class="comment"><div class="comment-head">';
    tpl += '<img src="/uploads/teacher.png" /><span><b>'+comment.anonAuthor+'</b></span>';
    tpl += '<br><span><i class="date">'+parseDate(comment.date)+'</i></span></div>';
    tpl += '<div class="comment-body"><p>'+comment.comment;
    tpl += '</p></div>';
    tpl += '<div class="comment-footer">';
    tpl += '<span>(0) </span><span><a href="#" class="like" data-id="'+comment.id + '"';
    tpl += '>Like</a></span> · ';
    // tpl += '<span>(0) </span><span><a href="#" class="dislike" data-id="'+comment.id + '"';
    // tpl += '">Dislike</a></span>';
    tpl += '</div>';
    tpl += '</li>';
    $('#comment-list').append(tpl);
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
