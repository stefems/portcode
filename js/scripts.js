function showHiddenText(id, caller) {
	var hiddenText;
	var buttoncaller = document.getElementById(caller);
	var buttonmin = document.getElementById(caller + "min");
	switch (id) {
		case '1':
			hiddenText = document.getElementById("paintingtext");
			break;
		case '2':
			hiddenText = document.getElementById("designtext");
			break;
		case '3':
			hiddenText = document.getElementById("historytext");
			break;
	}
	hiddenText.style.visibility = "visible";
	hiddenText.style.display = "inherit";
	buttoncaller.style.visibility = "hidden";
	buttoncaller.style.display = "none";
	buttonmin.style.visibility = "visible";
	buttonmin.style.display = "inherit";
	buttonmin.style.marginBottom = "1em";
}
function hideHiddenText(id, caller) {
	var hiddenText;
	var buttonmax;
	var buttoncaller = document.getElementById(caller);
	switch (id) {
		case '1':
			hiddenText = document.getElementById("paintingtext");
			buttonmax = document.getElementById("paintingbutton");
			break;
		case '2':
			hiddenText = document.getElementById("designtext");
			buttonmax = document.getElementById("designbutton");
			break;
		case '3':
			hiddenText = document.getElementById("historytext");
			buttonmax = document.getElementById("historybutton");
			break;
	}
	hiddenText.style.visibility = "hidden";
	hiddenText.style.display = "none";
	buttoncaller.style.visibility = "hidden";
	buttoncaller.style.display = "none";
	buttonmax.style.visibility = "visible";
	buttonmax.style.display = "inherit";
	buttonmax.style.marginBottom = "1em";
}

$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});
