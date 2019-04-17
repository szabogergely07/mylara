/*Loading page scripts*/
window.addEventListener("load", function() {
    var load_screen = document.getElementById("load_screen");
    document.body.removeChild(load_screen);
});

/*footer hide on scroll*/
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("footer").style.visibility = "hidden";
  } else {
    document.getElementById("footer").style.visibility = "visible";
  }
}

/*Welcome page scripts*/
/*function createLine(x1, y1, x2, y2, lineID){
    
    distance = Math.sqrt( ((x1 - x2) * (x1 - x2)) + ((y1 - y2) * (y1 - y2)) );
    
    xMid = (x1 + x2) / 2
    yMid = (y1 + y2) / 2
    
    salopeInRadian = Math.atan2(y1 - y2, x1 - x2)
    salopeInDegrees = (salopeInRadian * 180) / Math.PI;

    line = document.getElementById(lineID)
    line.style.width = distance
    line.style.top = yMid
    line.style.left = xMid - (distance/2)
    line.style.transform = "rotate("+salopeInDegrees+"deg)";

}
createLine(100, 400, 200, 800, "line")*/