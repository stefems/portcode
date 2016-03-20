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

var $root = $('html, body');
$('span').click(function() {
    $root.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});
