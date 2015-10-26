function jqueryLoaded12() {
	var $ = jQuery;
	console.log('Crazy');

	var isMobile = false; //initiate as false
	
	// device detection
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		// some code..
		isMobile = true;
	}
	console.log(isMobile);

	// Hide whatsapp widget
	if(!isMobile){
		$('.whatsapp').remove();
	}

}
// Check if jQuery is loaded
function checkJquery12() {
    if (window.jQuery ) {
        jqueryLoaded12();
    } else {
        window.setTimeout(checkJquery12, 100);
    }
}

checkJquery12();