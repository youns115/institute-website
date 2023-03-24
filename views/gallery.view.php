<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

<main>
    <?php require('partials/banner.php') ?>

  <style>
  
  .image1 {
    content: url("https://artisthubhq.com/wp-content/uploads/2018/04/ultimate-guide.jpg")
  }

  .image2 {
    content: url("https://ozarks.edu/wp-content/uploads/DSC_0130.jpg")
  }

  .image3 {
    content: url("https://www.pacific.edu/sites/default/files/styles/two_column_header_image_desktop/public/2020-09/Club-Fair-RS87348.jpg?h=111b0dbc&itok=COA9yLC6")
  }

  .image4 {
    content: url("https://dso.college.harvard.edu/sites/hwpi.harvard.edu/files/styles/os_files_large/public/dso/files/fyfd400.png?m=1568744911&itok=2IFTahgI")
  }

  .image5 {
    content: url("https://agsci.psu.edu/students/life/activities/@@images/ad499465-066b-4c82-a1e4-75213814a5a6.jpeg")
  }
	</style>



  <section class="mx-auto max-w-2xl">
    <h2 class="text-4xl text-center tracking-wide font-extrabold font-serif leading-loose mb-2">Activities</h2>
    <div class="shadow-2xl relative">
      
      <div class="mySlides hidden">
        <div class="image1 w-full object-cover"></div>
      </div>
      <div class="mySlides hidden">
        <div class="image2 w-full object-cover"></div>
      </div>
      <div class="mySlides hidden">
        <div class="image3 w-full object-cover"></div>
      </div>
      <div class="mySlides hidden">
        <div class="image4 w-full object-cover"></div>
      </div>
      <div class="mySlides hidden">
        <div class="image5 w-full object-cover"></div>
      </div>

      
      <a class="absolute left-0 inset-y-0 flex items-center -mt-32 px-4 text-white hover:text-gray-800 cursor-pointer text-3xl font-extrabold" onclick="plusSlides(-1)">❮</a>
      <a class="absolute right-0 inset-y-0 flex items-center -mt-32 px-4 text-white hover:text-gray-800 cursor-pointer text-3xl font-extrabold" onclick="plusSlides(1)">❯</a>

      
      <div class="text-center text-white font-light tracking-wider bg-blue-700 py-2">
        <p id="caption"></p>
      </div>

      
      <div class="flex">
        <div>
          <img class="image1 description h-24 opacity-50 hover:opacity-100 cursor-pointer" src="#" onclick="currentSlide(1)" alt="Lorem1">
        </div>
        <div>
          <img class="image2 description h-24 opacity-50 hover:opacity-100 cursor-pointer" src="#" onclick="currentSlide(2)" alt="Lorem2">
        </div>
        <div>
          <img class="image3 description h-24 opacity-50 hover:opacity-100 cursor-pointer" src="#" onclick="currentSlide(3)" alt="Lorem2">
        </div>
        <div>
          <img class="image4 description h-24 opacity-50 hover:opacity-100 cursor-pointer" src="#" onclick="currentSlide(4)" alt="Lorem3">
        </div>
        <div>
          <img class="image5 description h-24 opacity-50 hover:opacity-100 cursor-pointer" src="#" onclick="currentSlide(5)" alt="Lorem4">
        </div>
      </div>
    </div>
  </section>


  <script>
    
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("description");
      let captionText = document.getElementById("caption");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" opacity-100", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " opacity-100";
      captionText.innerHTML = dots[slideIndex - 1].alt;
    }
  </script>




</main>
<?php require('partials/footer.php') ?>