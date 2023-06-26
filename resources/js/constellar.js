//Slide for pic constellar
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (slideIndex > slides.length) {slideIndex = 1} 
  if(slideIndex < 1){slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].style.background = "grey";
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].style.background= "black";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}

$(document).ready(function(){
  //An content
$('.tab-content-item').hide();
$('.tab-content-item:first-child').fadeIn();
$('.nav-tabs li').click(function(){
  //Active nav-tabs
  $('.nav-tabs li').removeClass('active');
  $(this).addClass('active');

  //Show tab-content star
  let id_tab_content = $(this).children('a').attr('href');
  $('.tab-content-item').hide();
  $(id_tab_content).fadeIn();
  return false;
});
});