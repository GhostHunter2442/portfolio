<template>
    <div>
        <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="/">Home  <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="#">Data Hardware & Software</a></span></p>

       </div>
     </div>
   </div>
  </section>

<section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 ftco-animate">
          <!-- <h2 class="mb-3"> ระบบสำหรับเก็บข้อมูล project เเบ่งประเภท hardware/software</h2> -->

          <p>
            <img src="images/datasave_header.jpg" alt="" class="img-fluid">
          </p>

        <div class="ftco-animate">
          <h2 class="mb-3 mt-5">ความสามารถของระบบ</h2>
          <p>1. ระบบสร้างโปรเจค เก็บรายเเยกรายการ hardware/software</p>
          <p>2. ระบบ ค้นหารายละเอียดโปรเจค เเละ  hardware/software </p>
          <p>3. ระบบจัดการ  hardware/software</p>
          <p>4. ระบบจัดการ ลูกค้า</p>
          <p>5. ระบบจัดการผู้ใช้งาน</p>
          <p>6. รายงานสรุป โปรเจค  hardware/software </p>

          <h2 class="mb-3 mt-5">รายละเอียดด้านการพัฒนา</h2>
          <p>1. Bootstrap 4</p>
          <p>2. Codeigniter</p>
          <p>3. jQuery</p>
          <p>4. javascript</p>

          <p>5. Mysql</p>
          </div>





        </div> <!-- .col-md-8 -->
        <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              <a href="https://product.dataghosthunter.com/" class="tag-cloud-link">Link Test Systems</a>

            </div>
          </div>

        <div class="sidebar-box ftco-animate">
          <h3 class="heading-sidebar">ทดสอบระบบ</h3>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/work-3.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="javascript:;">admin </a></h3>
              <div class="meta">
                <div><a href="javascript:;"><span class="icon-calendar"></span> Username : admin</a></div><br>
                <div><a href="javascript:;"><span class="icon-person"></span>Password : 123456</a></div>

              </div>
            </div>
          </div>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/work-3-2.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">user </a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span>Username : user1</a></div><br>
                <div><a href="#"><span class="icon-person"></span> Password : 123456 </a></div>

              </div>
            </div>
          </div>
        </div>



        <div class="sidebar-box ftco-animate">
          <h3 class="heading-sidebar">ตัวอย่างภาพโปรเจค</h3>
          <carousel :data="data"></carousel>

        </div>

            <div class="sidebar-box ftco-animate">
                 <h3 class="heading-sidebar">ตัวอย่างวีดีโอใช้งาน</h3>
        <youtube :video-id="videoId"   :player-vars="playerVars"></youtube>
  </div>
      </div>


 </div>
  </section> <!-- .section -->


    </div>
</template>
<script src="https://www.youtube.com/iframe_api"></script>
<script>

 export default {
    data() {
      return {
        data: [
            '<div class="example-slide">   <img src="images/datasave/1.jpg" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/datasave/2.jpg" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/datasave/3.jpg" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/datasave/4.jpg" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/datasave/5.jpg" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/datasave/6.jpg" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/datasave/7.jpg" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/datasave/8.jpg" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/datasave/9.jpg" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/datasave/10.jpg" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/datasave/11.jpg" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/datasave/12.jpg" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/datasave/13.jpg" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/datasave/14.jpg" alt="" class="img-fluid"></div>',
        ],
        videoId: '4nd8fmUF8yg',

    //    host: 'https://www.youtube.com',
        playerVars: {
        origin: window.location.origin, // or http(S)://your.domain.com
        autoplay: 1
      }
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
