<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Zulupromo</title>
    </head>
<body class="">
<img class="w-[100%] h-12 md:h-20 top-0 fixed z-30" src='./images/navbar.png' alt="Promo" />
{{-- big promo section --}}
<div class=" h-[45vh] md:h-[83vh] w-full md:pl-16 pr-6 md:pr-40 mt-5 md:mt-12">
    {{-- {/* Background image */} --}}
    <img 
    data-aos="fade-zoom-in"
    // data-aos-delay="300"
    data-aos-duration="500"
    data-aos-easing="ease-in-sine"
    class="w-[100%] h-[100%]" src="./images/snake.png" alt="Promo" />
    
    {{-- {/* Overlay image */} --}}
    <div class="absolute top-[120px] md:top-[300px] md:left-1/2 transform -translate-x-[-70px] md:-translate-x-[300px] -translate-y-[60px] md:-translate-y-1/2">
      <img
            data-aos="zoom-out"
            data-aos-delay="300"
            data-aos-duration="500"
            data-aos-easing="ease-in-sine"
      class="w-[240px] md:w-[600px] h-[31vh] md:h-[65vh]" src="./images/bigpromoGroup.png" alt="Promo" />
    </div>
  </div>



  {{-- START:: Counting SEction --}}
  <div class="relative flex justify-center top-[-50px] ">
    <div class="text-white z-10 absolute w-[80%] md:w-[40%] rounded-lg h-24 flex items-center justify-center px-5">
      <div class="bg-black w-[100%] h-[100%] opacity-85 absolute rounded-lg"></div>
      <div class="flex">
        <h1 class='md:text-3xl font-bold z-20'><span id="workers"></span>+</h1>
        <p 
              data-aos="fade-right"
              data-aos-delay="300"
              data-aos-duration="3000"
              data-aos-easing="ease-in"
        class='text-slate-400 text-start pl-1  z-20 text-sm'>Weekly workers and visitors</p>
        <h1 class='md:text-3xl font-bold  z-20'><span id="customers"></span>%+</h1>
        <p 
           data-aos="fade-right"
           data-aos-delay="300"
           data-aos-duration="3000"
           data-aos-easing="ease-in"
        class='text-slate-400 text-start pl-1  z-20 text-sm'>Customer satisfaction</p>
      </div>
    
      </div>
</div>
{{-- END:: Counting SEction --}}



{{-- FIRST:: Xmas Promo --}}
<div>
    <div class="md:flex bg-[#343434] pt-5 md:pt-0">
        <div class="bg-alfysymbol bg-cover md:w-[40%]">
            <img 
            data-aos="zoom-out"
            data-aos-delay="30"
            data-aos-duration="2000"
            data-aos-easing="ease-in-sine"
            class='w-[90%] h-[88%] md:mt-16' src="./images/alfy.png" alt="" />
        </div>
        <div class="md:w-[60%] text-white mt-5 md:mt-24">
          <img 
          data-aos="fade-down"
          data-aos-delay="300"
          data-aos-duration="2500"
          data-aos-easing="ease-in-sine"
          class='z-10 absolute mt-[-80px] md:mt-[-90px] w-32' src="./images/swirly.png" alt="" />
          <div class="ml-7">
             <h1 
             data-aos="fade-up"
             data-aos-delay="30"
             data-aos-duration="1000"
             data-aos-easing="ease-in-sine"
             class='text-4xl md:text-6xl'>Early Christmas Promo</h1>
          <p 
          data-aos="fade-left"
          data-aos-delay="30"
          data-aos-duration="2500"
          data-aos-easing="ease-in-sine"
          class='mt-5'>
            From the  month of November to the ending  of the month<br class='hidden md:block'/> of December,
            get a co-working space <br /> for 1,500 cedis ! ! ! 
             </p>
             <div class="flex justify-center items-center gap-2 md:gap-5 mt-7 md:mt-10 mb-2">
              <img  
              data-aos="fade-right"
              data-aos-delay="30"
              data-aos-duration="1000"
              data-aos-easing="ease-in-sine"
              class='w-24 h-12' src="./images/left.png" alt="" />
              <button 
              data-aos="zoom-in"
              data-aos-delay="1000"
              data-aos-duration="1500"
              data-aos-easing="ease-in-sine"
              class='bg-[#488458] px-10 md:px-20 rounded-lg p-2'>Get Offer</button>
              <img 
              data-aos="fade-left"
              data-aos-delay="30"
              data-aos-duration="1500"
              data-aos-easing="ease-in-sine"
              class='w-24 h-12' src="./images/right.png" alt="" />
             </div>
          </div>
          <div class="flex pt- items-end justify-around">
            <img
            data-aos="zoom-out"
            data-aos-delay="30"
            data-aos-duration="1500"
            data-aos-easing="ease-in-sine"
            class='w-44 h-44' src="./images/image1.png" alt="" />
            <img 
            class='w-28 h-28' src="./images/image2.png" alt="" />
            <img class='w-20 h-20' src="./images/image3.png" alt="" />
          </div>
         
        </div>
    </div>
  
</div>
{{-- END:: Xmas Promo --}}
</body>
</html>

