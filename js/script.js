$(document).ready(function() {
  $('#modal-from-dom').bind('hide', function () {
    $('#btn_delete').unbind('click');
  });
  $('#btn_delete_hide').click(function(e){
    e.preventDefault();
    $('#modal-from-dom').modal('hide');
  });
  $('a[data-repo-name]').click(function(e){
    e.preventDefault();
    dlg_delete($(this).attr('data-repo-name'));
  });
  $('#btn_create').click(function(e){
    e.preventDefault();
    $.post('/admin/create',
      {'repo_name':$('input[name=repo_name]').val()},
      function(data){
        var stat = 'Success!';
        var error = '';
        if(data.status == 'fail') {
          error = ' error';
          stat  = 'Fail!';
        }
        $('#main').prepend('<div class="alert-message warning fade in'+error+'" data-alert="alert"><a class="close" href="#" onclick="$(this).parent(\'.alert-message\').remove();">×</a><p><strong>'+stat+'</strong> '+data.msg+'</p></div>');
    }, "json");
  });
});

function dlg_delete(name) {
  $('#btn_delete').one('click', function(e){
    e.preventDefault();
    $.post('/admin/delete',
      {'repo_name':name},
      function(data){
        var stat = 'Success!';
        var error = '';
        if(data.status == 'fail') {
          error = ' error';
          stat  = 'Fail!';
        }
        $('#main').prepend('<div class="alert-message warning fade in'+error+'" data-alert="alert"><a class="close" href="#" onclick="$(this).parent(\'.alert-message\').remove();">×</a><p><strong>'+stat+'</strong> '+data.msg+'</p></div>');
        $('#modal-from-dom').modal('hide');
    }, "json");
  });
  $('#modal-from-dom').modal({
    keyboard: true,
    backdrop: true,
    show: true
  });
}





