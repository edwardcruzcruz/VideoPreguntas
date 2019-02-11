function loadQuestion_answer() {
    var title = $("<h1/>", {
      html: "¿Como te llamas?"
    });
    var edward =$("<a/>",{
      "class":"btn btn-small btn-info",
      "id":"nombre1",
      "name":"edward",
      html: "Edward"
    });
    var andres =$("<a/>",{
      "class":"btn btn-small btn-info",
      "id":"nombre2",
      "name":"andres",
      html: "Andres"
    });
    var salto =$("<br/>");
    var col = $( "<div/>",{
	"align":"center",
	'class':'col-12'
    });
    var row = $( "<div/>",{
	'class':'row'
    });
    title.appendTo(col);
    edward.appendTo(col);
    salto.appendTo(col);
    andres.appendTo(col);
    col.appendTo(row);
    row.appendTo( "#overlay" );
}
function tiempofuera(){
 alert("Se acabo los 10 segundos, intenta de nuevo");
}
function pregunta(){
  $("#overlay").css("display","block");
}
function responder(){
  $("#overlay").css("display","none");
  $('#video')[0].play();  
}
$(document).ready(function(){
    loadQuestion_answer();//cargando formulario 1
    var vid=document.getElementById("video"); 
    $("#overlay").css("display","none");//ocultar mientras no sea utilizado
    var bandera=0;
    $("#video").bind('timeupdate', function() {

       var lastCheckedAt = $("#video").data('lastcheck') || 0;//para que aparezaca una vez cuando se le asigne y no se repita como es lo habitual
	
       	
       $("#video").data('lastcheck', this.currentTime);
       if( (this.currentTime ) >=5 && lastCheckedAt < 5 ) {
           //console.log("5 seconds");
	   setTimeout(pregunta, 1000);//mostrar pregunta
	   this.pause();
	   //setTimeout(pregunta, 10000);//10 segundos de delay
	    if(bandera==0){
		//setTimeout(tiempofuera, 10000);
		setTimeout(pregunta, 1000);//10 segundos delay
	    }
	   
       }else if ((this.currentTime ) >=10 && lastCheckedAt < 10){
	   console.log("10 seconds");
	   setTimeout(pregunta, 1000);//mostrar pregunta
	   this.pause();
	   setTimeout(responder, 10000);
       } 
	
	console.log(this.currentTime);
    });
    
    $("#overlay").on("click", "a#nombre1", function(){//magia xD
	alert("correcto");
	responder();
	bandera=1;
    });
    $("#overlay").on("click", "a#nombre2", function(){//magia xD
	alert("incorrecto! intenta de nuevo");
	pregunta();
	bandera=0;
    });
    
    /*
    $('.playVid').on('click', function(e) {
        $.ajax({
            success:function(data){
                vid.play();				
		//setTimeout('alert(\'Surprise!\')', 10000);
            }
         });
    });
    $('.pauseVid').on('click', function(e) {
        $.ajax({
            success:function(data){
                vid.pause();
            }
         });
    });*/
    
    function failed(e) {
        // video playback failed - show a message saying why
        switch (e.target.error.code) {
            case e.target.error.MEDIA_ERR_ABORTED:
                alert('You aborted the video playback.');
                break;
            case e.target.error.MEDIA_ERR_NETWORK:
                alert('A network error caused the video download to fail part-way.');
                break;
            case e.target.error.MEDIA_ERR_DECODE:
                alert('The video playback was aborted due to a corruption problem or because the video used features your browser did not support.');
                break;
            case e.target.error.MEDIA_ERR_SRC_NOT_SUPPORTED:
                alert('The video could not be loaded, either because the server or network failed or because the format is not supported.');
                break;
            default:
                alert('An unknown error occurred.');
            break;
        }
    }

});
