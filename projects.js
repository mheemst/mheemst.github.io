let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// project row content controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("project-slide");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "inline-block";
  dots[slideIndex-1].className += " active";
}

function expandThumbnail(el){
  //When the next/previous buttons OR the dots are clicked, all thumbnails reset to
  //display: inline-block and original small size.
  var dots = document.getElementById("dots");
  var expandThumbnail = document.getElementById("expand-thumbnail");
  var imageContainer = document.getElementById("big-thumbnail");
  //collect the image source from the selected thumbnail image
  var imgSrc = el.src;
  var img = document.createElement("img");
  img.src = imgSrc;
  img.setAttribute("id", "selected-thumbnail");
  imageContainer.append(img);
  expandThumbnail.style.display = "inline-block";
  dots.style.display = "none";

}

function minimize(){
  var expandThumbnail = document.getElementById("expand-thumbnail");
  var selectedThumbnail = document.getElementById("selected-thumbnail");
  var dots = document.getElementById("dots");

  selectedThumbnail.remove();
  expandThumbnail.style.display = "none";
  dots.style.display = "block";
}