$(document).ready(function(){
  $('.test').on('click', function(e) {
    //var resource = $(this).data("resource");

     $.ajax({
        //url: 'http://localhost/api/proyectos',//+ resource 
        //dataType:'json',
        //type: 'get',
        success:function(data){
            console.log("hola");
        }
    });
  });

});
