(function() {
  var doCommentButton;
  $(document).ready(function() {
    doCommentButton = $('#do-comment');
    doCommentButton.on('click', doComment);
    $('#comment-text').on('keyup', enableButton);
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
  appendComment = function(comment) {
    var tpl = '<li>';
    tpl += '<div class="comment"><div class="comment-head">';
    tpl += '<img src="/uploads/teacher.png" /><span><b>'+comment.anonAuthor+'</b></span>';
    tpl += '<br><span><i class="date">'+parseDate(comment.date)+'</i></span></div>';
    tpl += '<div class="comment-body"><p>'+comment.comment;
    tpl += '</p></div>';
    tpl += '<div class="comment-footer">';
    tpl += '<span>(0) </span><span><a href="#" class="like" title="">Like</a></span> · ';
    tpl += '<span>(0) </span><span><a href="#" class="dislike" title="">Dislike</a></span>';
    tpl += '</div>';
    tpl += '</li>';
    console.log(tpl);
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
          return 'Hace ' + difference + ' segundos.';
        }
        return 'Hace ' + difference + ' minutos.';
      }
      return 'Hace ' + difference + ' horas.';
    }

    return 'Publicado el ' + date.getDate() + ' de ' + months[date.getMonth()] +
    ' del ' + date.getFullYear();
  };
}).call(document, jQuery);
