$(document).ready(function(){
    var vid = document.getElementById("video");
    var count;
    
    vid.addEventListener("timeupdate", function(){
	window.count=vid.currentTime;  //To declare JavaScript global variables inside function, you need to use window object.  
    });

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
		console.log(count);
            }
         });
    });
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
