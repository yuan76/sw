$("#cek").click(function(){
  var data = $("#formCek :input").serializeArray();
  $.post($("#formCek").attr("action"), data, function(info){$("#hasil").html(info);});
});
