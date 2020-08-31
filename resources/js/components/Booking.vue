<template>
    <div>
   <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
   <div class="container">

     <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
     </button>

       <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="/#home-section" class="nav-link"><span>Home</span></a></li>
                <li class="nav-item"><a href="/#about-section" class="nav-link"><span>About</span></a></li>
                <li class="nav-item"><a href="/#skills-section" class="nav-link"><span>Skills</span></a></li>
                <li class="nav-item"><a href="/#projects-section" class="nav-link"><span>Projects</span></a></li>
                <li class="nav-item"><a href="/#contact-section" class="nav-link"><span>Contact</span></a></li>
            </ul>
        </div>
   </div>
 </nav>

<section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 ftco-animate">
          <!-- <h2 class="mb-3"> ระบบสำหรับเก็บข้อมูล project เเบ่งประเภท hardware/software</h2> -->

          <p>
            <img src="images/booking_header.jpg" alt="" class="img-fluid">
          </p>

        <div class="ftco-animate">
          <h2 class="mb-3 mt-5">ความสามารถของระบบ</h2>
          <p>1. ระบบ จ้องห้องพักออนไลน์</p>
          <p>2. ระบบ มีการตรวจเช็คห้องว่าง </p>
          <p>3. ระบบ คำนวณราคาต่อห้อง</p>

          <h2 class="mb-3 mt-5">รายละเอียดด้านการพัฒนา</h2>
          <p>1. Laravel+Vue (SPA)</p>
          <p>2. Bootstrap 4</p>
          <p>3. javascript</p>
          <p>4. Mysql</p>
          </div>





        </div> <!-- .col-md-8 -->
        <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              <a href="https://booking.dataghosthunter.com/" class="tag-cloud-link">Link Test Systems</a>

            </div>
          </div>

        <div class="sidebar-box ftco-animate">
          <h3 class="heading-sidebar">ทดสอบระบบ</h3>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/work-0-0.png);"></a>
            <div class="text">
              <h3 class="heading"><a href="javascript:;">admin </a></h3>
              <div class="meta">
                <div><a href="javascript:;"><span class="icon-calendar"></span> Username : admin@gmail.com</a></div><br>
                <div><a href="javascript:;"><span class="icon-person"></span>Password : 12345678</a></div>

              </div>
            </div>
          </div>

        </div>



        <div class="sidebar-box ftco-animate">
          <h3 class="heading-sidebar">ตัวอย่างภาพโปรเจค หน้าบ้าน</h3>
          <carousel :data="data_font"></carousel>

        </div>



      </div>


 </div>
  </section> <!-- .section -->


    </div>
</template>
<script>

 export default {
    data() {
      return {
        data_font: [
            '<div class="example-slide">   <img src="images/booking/1.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/booking/2.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/booking/3.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/booking/4.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/booking/5.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/booking/6.png" alt="" class="img-fluid"></div>',


        ]



      };
    },

  };
</script>
<style>
  .example-slide {
    align-items: center;
    /* background-color: rgb(192, 192, 192); */
    /* color: #999; */
    display: flex;
    font-size: 1.5rem;
    justify-content: center;
    min-height: 30rem;

  }
 /* iframe {
  width: 100%;
  height: 200%;
   width: 650px; Also helpful. Optional.
} */
</style>
