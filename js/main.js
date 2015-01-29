$(document).ready(function(){
    $status = $(".status");
    
    
    
	//sequence
	init_sequence()
   
    
    
    
    //popup

    $(".popup").popup({
		transition: 'all 0.1s',
		escape:false,
		blur:false
	}).find(".popup-close").click(function(){
		$(this).parents(".popup").popup("hide");
	});

	
	//popup shutdown

	$("#dialog_shutdown").popup("show");


	
	
});



function init_sequence(){
	var options = {
        autoPlay: true,
        autoPlayDelay: 4000,
        pauseOnHover: true,
        hidePreloaderDelay: 500,
        nextButton: true,
        prevButton: true,
        pauseButton: true,
        preloader: true,
        hidePreloaderUsingCSS: false,                   
        animateStartingFrameIn: true,    
        navigationSkipThreshold: 750,
        preventDelayWhenReversingAnimations: true,
        customKeyEvents: {
            80: "pause"
        }
    };
	var sequence = $("#sequence").sequence(options).data("sequence");
	
	if(sequence){
		sequence.afterNextFrameAnimatesIn = function() {
	        if(sequence.settings.autoPlay && !sequence.hardPaused && !sequence.isPaused) {
	            $status.addClass("active").css("opacity", 1);
	        }
	        $(".prev, .next").css("cursor", "pointer").animate({"opacity": 1}, 500);
	    };
	    sequence.beforeCurrentFrameAnimatesOut = function() {
	        if(sequence.settings.autoPlay && !sequence.hardPaused) {
	            $status.css({"opacity": 0}, 500).removeClass("active");
	        }
	        $(".prev, .next").css("cursor", "auto").animate({"opacity": .7}, 500);
	    };
	    sequence.paused = function() {
	        $status.css({"opacity": 0}).removeClass("active").addClass("paused");
	    };
	    sequence.unpaused = function() {
	        if(!sequence.hardPaused) {
	            $status.removeClass("paused").addClass("active").css("opacity", 1)
	        }               
	    };
	}
    
}



function showDialog(domid){
	 $("#"+domid).popup("show");
}
