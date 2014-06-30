(function() {
  var teachers;
  var txtName, teacherList;
  $(document).ready(function() {
    $('#name').focus();
    teacherList = $('#teacher-list');
    txtName = $('#name');
    txtName.on('keyup', search);
    getTeachers();
  });
  search = function(e) {
    console.log(e.keyCode);
    if ((e.keyCode>=65 && e.keyCode<=90) ||
      (e.keyCode>=97 && e.keyCode<=122) ||
      e.keyCode === 190 || e.keyCode ===189 || e.keyCode === 188 || e.keyCode === 32 ||
      e.keyCode === 8
    ) {
      var q = txtName.val().toLowerCase();
      var res = [], i;
      for(i = 0; i < teachers.length; ++i) {
        if(teachers[i].name.toLowerCase().indexOf(q) >= 0) {
          res.push(teachers[i]);
        }
      }
      $('#teacher-list').html('');
      for(i = 0; i < res.length; ++i) {
        appendTeacher(res[i]);
      }
    }
  };
  appendTeacher = function(teacher) {
    var tpl = '';
    tpl += '<a href="/teacher/'+teacher.id+'">';
    tpl += '<div class="teacher-item">';
    tpl += '<img src="/uploads/'+teacher.picture+'" />';
    tpl += '<div class="counter" title="'+teacher.comments+' comentarios">';
    tpl += teacher.comments;
    tpl += '</div>';
    tpl += '<span>'+teacher.name+'</span>';
    tpl += '</div>';
    tpl += '</a>';

    teacherList.append(tpl);
  };
  getTeachers = function() {
    $.get('/teachers').done(function(res) {
      teachers = res;
    }).error(function(err){});
  };
}).call(document, jQuery);
