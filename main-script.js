/****************************************************/
/*Sounds*/
/****************************************************/

//Length of the button
 var nr = document.querySelectorAll("button").length;

//For-loop to play a sound
 for (var i = 0; i < nr; i++) {
   document.querySelectorAll("button")[i].addEventListener("click", function () {

     var buttonInnerHTML = this.innerHTML;

     playSound(buttonInnerHTML);

   });
}

//Function for sound
function playSound(myAudio){
  myAudio = new Audio('sounds/click.mp3');
  myAudio.play();
}


/****************************************************/
/*Change Head Images*/
/****************************************************/

//Image arrays
var images = [
  "img/mainPiano.jpg",
  "img/mainSynth.jpg",
  "img/mainDoctor.png",
];

var imageHead = document.querySelector(".header");

var i = 0;

//Function to change pictures
setInterval(function() {
  imageHead.style.backgroundImage = "url(" + images[i] + ")";
  i = i + 1;

  if (i == images.length) {
    i =  0;
  }
}, 6000);


/****************************************************/
/*Load Timer*/
/****************************************************/
function pageRedirect(){

//Change visibility to true to see loading circle
document.querySelector(".loader").style.visibility = "visible";

 // // Display message
 // document.getElementById("message").innerHTML = "Please wait, you are redirecting to the new page.";

 setTimeout(function(){ window.location = "homepage.php";}, 2000);
}
