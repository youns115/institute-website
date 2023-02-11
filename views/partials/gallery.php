<div id="carouselExampleCaptions" class="carousel slide relative outline-text-black" data-bs-ride="carousel">
  <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
    <button
      type="button"
      data-bs-target="#carouselExampleCaptions"
      data-bs-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-bs-target="#carouselExampleCaptions"
      data-bs-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-bs-target="#carouselExampleCaptions"
      data-bs-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>
  <div class="carousel-inner relative w-full overflow-hidden ">
    <div class="carousel-item active relative float-left w-full " >
      <img
        src="/images/uni-1.jpg"
        class="block w-full h-full object-cover "
        alt="university picture-1"
      />
      <div class="carousel-caption hidden md:block absolute text-center  ">
        <h5 class="text-xl ">First</h5>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe.</p>
      </div>
    </div>
    <div class="carousel-item relative float-left w-full ">
      <img
        src="/images/uni-2.jpg"
        class="block w-full h-full object-cover"
        alt="university picture-2"
      />
      <div class="carousel-caption hidden md:block absolute text-center">
        <h5 class="text-xl">Second</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi!</p>
      </div>
    </div>
    <div class="carousel-item relative float-left w-full">
      <img
        src="/images/uni-3.jpg"
        class="block w-full h-full object-cover"
        alt="university picture-3"
      />
      <div class="carousel-caption hidden md:block absolute text-center ">
        <h5 class="text-xl ">Third</h5>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste.</p>
      </div>
    </div>
  </div>
  <button
    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
    type="button"
    data-bs-target="#carouselExampleCaptions"
    data-bs-slide="prev"
  >
    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
    type="button"
    data-bs-target="#carouselExampleCaptions"
    data-bs-slide="next"
  >
    <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<style>

  /* resize images (Tailwind'a suk eshy nadakrd)  */
  @media screen and (min-width: 800px){ 
    
    .carousel-item{
      height: 80vh;
    }
      
     .carousel-item img{
      height: 100%;
    }
    
   }
    
   .outline-text-black{ 
    text-shadow: rgb(0, 0, 0) 1px 0px 0px, rgb(0, 0, 0) 0.540302px 0.841471px 0px, rgb(0, 0, 0) -0.416147px 0.909297px 0px, rgb(0, 0, 0) -0.989993px 0.14112px 0px, rgb(0, 0, 0) -0.653644px -0.756803px 0px, rgb(0, 0, 0) 0.283662px -0.958924px 0px, rgb(0, 0, 0) 0.96017px -0.279416px 0px;
   }


    </style>