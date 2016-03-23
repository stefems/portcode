var isBlurred = false;
function OpenMenu() {
  var header = document.getElementById("headerElement");
  var content = document.getElementById("contentElement");
  var menuTOC = document.getElementById("menuTOC");
  if (isBlurred == false) {
    
    header.style.webkitFilter = "blur(0px)";
    content.style.webkitFilter = "blur(0px)";
    //menuTOC.style.display = "inline-block";
    menuTOC.style.visibility = "visible";
    isBlurred = true;
  }
  else {
    header.style.webkitFilter = "blur(0px)";
    content.style.webkitFilter = "blur(0px)";
    //menuTOC.style.display = "none";
    menuTOC.style.visibility = "hidden";
    isBlurred = false;
  }
    return true;
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
