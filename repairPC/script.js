let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("my-slides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

//animation hidden
// const observer = new IntersectionObserver((entries)=> {
//     entries.forEach((entry) =>{
//       console.log(entry)
//       if (entry.isIntersecting) {
//         entry.target.classList.add('show');
//       }else{
//         entry.target.classList.remove('show');
//       }

//     });
// });

// const hiddenElements = document.querySelectorAll('.hidden');
// hiddenElements.forEach((el) => observer.observe(el));

