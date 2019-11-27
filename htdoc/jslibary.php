<?php include("header.php"); ?>
<style>

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>

<TABLE  align="center" width="624" height="800" border="1" class="pa2">
<center>
<h2>Date Time</h2>

<button class='button'  type="button"onclick="document.getElementById('demo').innerHTML = Date()">
Click เพื่อดูเวลาปัจจุบันของเครื่องเรา.</button><br>
<br><h5><p id="demo"></p></h5><br>

</center>
<h2 style="text-align:center">Lightbox</h2>

<div class="row">
  <div class="column">
    <img src="image/05.jpg" style="width:95%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="image/09.jpg" style="width:95%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="image/08.jpg" style="width:95%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="image/225.jpg" style="width:95%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
	<center>
      <div class="numbertext">1 / 4</div>
      <img src="image/05.jpg" style="width:50%">
	  </center>
    </div>

    <div class="mySlides">
	<center>
      <div class="numbertext">2 / 4</div>
      <img src="image/09.jpg" style="width:50%">
	  </center>
    </div>

    <div class="mySlides">
	<center>
      <div class="numbertext">3 / 4</div>
      <img src="image/08.jpg" style="width:50%">
	  </center>
    </div>
    
    <div class="mySlides">
	<center>
      <div class="numbertext">4 / 4</div>
      <img src="image/225.jpg" style="width:50%">
	  </center>
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
	 <div class="column">
      <img class="demo cursor" src="image/05.jpg" style="width:100%" onclick="currentSlide(1)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="image/09.jpg" style="width:100%" onclick="currentSlide(2)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="image/08.jpg" style="width:100%" onclick="currentSlide(3)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="image/225.jpg" style="width:100%" onclick="currentSlide(4)" >
    </div>
  </div>
</div>




<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<br/><center/><h1>My Animation Image</h1><br/>

<div id="img" style="position:absolute;">
<img  class='circle' src="image/P1.png" onMouseDown="pauseResume();">
</div>
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
var step = 1;
var delay = 10;
var height = 0;
var Hoffset = 0;
var Woffset = 0;
var yon = 0;
var xon = 0;
var pause = true;
var interval;
var name = navigator.appName;
if(name == "Microsoft Internet Explorer") name = true;
else name = false;
var xPos = 80;
if(name) var yPos = document.body.clientHeight;
else var yPos = window.innerHeight;
function changePos() {
if(name) {
width = document.body.clientWidth;
height = document.body.clientHeight;
Hoffset = img.offsetHeight;
Woffset = img.offsetWidth;
img.style.left = xPos + document.body.scrollLeft;
img.style.top = yPos + document.body.scrollTop;
}
else {
height = window.innerHeight;
width = window.innerWidth;
Hoffset = document.img.clip.height;
Woffset = document.img.clip.width;
document.img.pageY = yPos + window.pageYOffset;
document.img.pageX = xPos + window.pageXOffset;
}
if (yon) {
yPos = yPos + step;
}
else {
yPos = yPos - step;
}
if (yPos < 0) {
yon = 1;
yPos = 0;
}
if (yPos >= (height - Hoffset)) {
yon = 0;
yPos = (height - Hoffset);
}
if (xon) {
xPos = xPos + step;
}
else {
xPos = xPos - step;
}
if (xPos < 0) {
xon = 1;
xPos = 0;
}
if (xPos >= (width - Woffset)) {
xon = 0;
xPos = (width - Woffset);
   }
}
function start() {
if(name) img.visibility = "visible";
else document.img.visibility = "visible";
interval = setInterval('changePos()',delay);
}
function pauseResume() {
if(pause) {
clearInterval(interval);
pause = false;
}
else {
interval = setInterval('changePos()',delay);
pause = true;
   }
}
start();
//  End -->
</script>

	 </TABLE>

<?php include("footer.php"); ?>