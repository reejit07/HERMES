var x=1;
document.getElementById("left").style.backgroundColor = "#dadada";
document.getElementById("p1").style.backgroundColor="black";

function myFunctionl() {
   if(x!=1)
   {
    x--;
    changebody(x);
    changenavigate(x);
    document.getElementById("right").style.backgroundColor = "#f3f3f3"; 
   
   }
}

function myFunctionr() {
   if(x!=4)
   {
    x++;
    changebody(x);
    changenavigate(x);
    document.getElementById("left").style.backgroundColor = "#f3f3f3";
  
   }
}




function changebody(x)
{
    switch(x) {
        case 1:
            document.getElementById("change").innerHTML = document.getElementById('one').innerHTML;
          break;
        case 2:
            document.getElementById("change").innerHTML = document.getElementById('two').innerHTML;
          break;
          case 3:
            document.getElementById("change").innerHTML = document.getElementById('three').innerHTML;
          break;
          case 4:
            document.getElementById("change").innerHTML = document.getElementById('four').innerHTML;
          break;
        default:
          return;
      }
}

function changenavigate(x)
{
    switch(x) {
        case 1:
          document.getElementById("p1").style.backgroundColor="black";
          document.getElementById("p2").style.backgroundColor=" rgb(218,220,224)";
          document.getElementById("p3").style.backgroundColor=" rgb(218,220,224)";
          document.getElementById("p4").style.backgroundColor=" rgb(218,220,224)";
          break;
        case 2:
          document.getElementById("p1").style.backgroundColor=" rgb(218,220,224)";
          document.getElementById("p2").style.backgroundColor="black";
          document.getElementById("p3").style.backgroundColor=" rgb(218,220,224)";
          document.getElementById("p4").style.backgroundColor=" rgb(218,220,224)";
          break;
          case 3:
          document.getElementById("p1").style.backgroundColor=" rgb(218,220,224)";
          document.getElementById("p2").style.backgroundColor=" rgb(218,220,224)";
          document.getElementById("p3").style.backgroundColor="black";
          document.getElementById("p4").style.backgroundColor=" rgb(218,220,224)";
          break;
          case 4:
            document.getElementById("p1").style.backgroundColor=" rgb(218,220,224)";
            document.getElementById("p2").style.backgroundColor=" rgb(218,220,224)";
            document.getElementById("p3").style.backgroundColor=" rgb(218,220,224)";
            document.getElementById("p4").style.backgroundColor="black";
          break;
        default:
          return;
      }
}




function mouseOverl() {
  document.getElementById("left").style.backgroundColor = "#dadada";
}


function mouseOutl() {
  if(x!=1)
  document.getElementById("left").style.backgroundColor = "#f3f3f3";
}

function mouseOverr() {
  document.getElementById("right").style.backgroundColor = "#dadada";
}


function mouseOutr() {
  if(x!=4)
  document.getElementById("right").style.backgroundColor = "#f3f3f3";
}

const element = document.getElementById('gesuredZone');

element.addEventListener('touchstart', handleTouchStart, false);
element.addEventListener('touchend', handleTouchEnd, false);


let startX;
let startY;

function handleTouchStart(event) {
  const touch = event.touches[0];
  startX = touch.clientX;
  startY = touch.clientY;
}

function handleTouchEnd(event) {
  const touch = event.changedTouches[0];
  const endX = touch.clientX;
  const endY = touch.clientY;

  const deltaX = endX - startX;
  const deltaY = endY - startY;

  // Minimum distance threshold for a swipe gesture
  const minDistance = 50;

  // Check if the distance traveled is above the threshold
  if (Math.abs(deltaX) > minDistance || Math.abs(deltaY) > minDistance) {
    // Check the direction of the swipe
    if (Math.abs(deltaX) > Math.abs(deltaY)) {
      if (deltaX > 0) {
        // Right swipe
        myFunctionl(x);
      } else {
        // Left swipe
        myFunctionr(x);
      }
    } else {
      if (deltaY > 0) {
        // Down swipe
       
      } else {
        // Up swipe
       
      }
    }
  }
}


