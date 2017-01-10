$(document).ready(function(){
  $('select#txtType').on('change',function(){
    $.ajax({
          url: 'getChild',
          type: "post",
          dataType: "json",
          data: {'pid':$(this).val(),'_token': $('input[name=_token]').val()},
          beforeSend: function() { 
            $('#txtModel').empty();
          },
          success: function(data){
            if (data.length > 0){
              $('#txtModel').append(' <option value="0">Select</option>');
              $.each(data,function(inx,val){ 
                var ucword = val.name.toLowerCase().replace(/\b[a-z]/g, function(e) { return e.toUpperCase();});
                $('#txtModel').append(' <option value="'+val.id+'">'+ucword+'</option>');
              });
              
            }
          }
        });
  });
});
