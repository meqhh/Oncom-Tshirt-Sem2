<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Oncom T-shirt</title>
  @vite('resources/css/app.css')
  <link href='https://fonts.googleapis.com/css?family=Roboto Condensed' rel='stylesheet'>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        let currentSlide = 1;
        const totalSlides = document.querySelectorAll('.carousel-item').length;

        function showSlide(slideIndex) {
            const slides = document.querySelectorAll('.carousel-item');
            if (slideIndex > totalSlides) { currentSlide = 1 }
            if (slideIndex < 1) { currentSlide = totalSlides }
            slides.forEach(slide => slide.style.display = "none");
            slides[currentSlide - 1].style.display = "block";
        }

        function nextSlide() {
            showSlide(currentSlide += 1);
        }

        function prevSlide() {
            showSlide(currentSlide -= 1);
        }

        // Initial display
        showSlide(currentSlide);

        // Event listeners for next and previous buttons
        document.querySelectorAll('.btn-circle').forEach(btn => {
            btn.addEventListener('click', function() {
                if (this.getAttribute('href').startsWith('#slide')) {
                    let slideNumber = parseInt(this.getAttribute('href').substring(6));
                    if (!isNaN(slideNumber)) {
                        currentSlide = slideNumber;
                        showSlide(currentSlide);
                    }
                }
            });
        });
    });
  </script>
</head>
<body class="bg-[#BDD5EA]">
@include('partial.navbar')
<div class="flex items-center justify-center w-screen p-6">
  <div class="carousel w-3/4 rounded-3xl">
    <div id="slide1" class="carousel-item relative w-full">
      <img src="{{ asset('img/logonav.png')}}" class="w-full" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide4" class="btn btn-circle">❮</a> 
        <a href="#slide2" class="btn btn-circle">❯</a>
      </div>
    </div> 
    <div id="slide2" class="carousel-item relative w-full">
      <img src="{{ asset('img/logonav.png')}}" class="w-full" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide1" class="btn btn-circle">❮</a> 
        <a href="#slide3" class="btn btn-circle">❯</a>
      </div>
    </div> 
    <div id="slide3" class="carousel-item relative w-full">
      <img src="{{ asset('img/logonav.png')}}" class="w-full" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide2" class="btn btn-circle">❮</a> 
        <a href="#slide4" class="btn btn-circle">❯</a>
      </div>
    </div> 
    <div id="slide4" class="carousel-item relative w-full">
      <img src="{{ asset('img/logonav.png')}}" class="w-full" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide3" class="btn btn-circle">❮</a> 
        <a href="#slide1" class="btn btn-circle">❯</a>
      </div>
    </div>
  </div>
</div>
@include('partial.footer')
</body>
</html>