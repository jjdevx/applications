$(document).ready(function(){
  $('select#txtType').on('change',function(){
    $.ajax({
          url: 'getChild',
          type: "post",
          dataType: "json",
          data: {'pid':$(this).val(),'_token': $('input[name=_token]').val()},
          success: function(data){
            if (data.length > 0){
            }
          }
        });
  });
});
