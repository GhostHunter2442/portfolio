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
            <img src="images/shopping_header.jpg" alt="" class="img-fluid">
          </p>

        <div class="ftco-animate">
          <h2 class="mb-3 mt-5">ความสามารถของระบบ</h2>
          <p>1. ระบบ มีหน้าร้านขายออนไลน์ เเละระบบหลังร้านจัดการสินค้า</p>
          <p>2. ระบบ มีการตัดสต๊อก เเละคืนสต๊อกสินค้า </p>
          <p>3. ระบบ มีกานเเสดงสถานะสินค้า</p>
          <p>4. ระบบ ติตาตการส่งสินค้า Tracking</p>
          <p>5. ระบบ ตัดบัตรเครดิต</p>
          <p>6. รายงาน สรุปยอดขาย รายเดือน/ปี</p>

          <h2 class="mb-3 mt-5">รายละเอียดด้านการพัฒนา</h2>
          <p>1. Laravel+Vue</p>
          <p>2. Bootstrap 4</p>
          <p>3. jQuery</p>
          <p>4. javascript</p>
          <p>5. Mysql</p>
          </div>





        </div> <!-- .col-md-8 -->
        <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              <a href="https://shopping.dataghosthunter.com/" class="tag-cloud-link">Link Test Systems</a>

            </div>
          </div>

        <div class="sidebar-box ftco-animate">
          <h3 class="heading-sidebar">ทดสอบระบบ</h3>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/work-1-1.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="javascript:;">admin </a></h3>
              <div class="meta">
                <div><a href="javascript:;"><span class="icon-calendar"></span> Username : admin@gmail.com</a></div><br>
                <div><a href="javascript:;"><span class="icon-person"></span>Password : 123456</a></div>

              </div>
            </div>
          </div>
              <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/work-1-2.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">employee </a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span>Username : employee@gmail.com</a></div><br>
                <div><a href="#"><span class="icon-person"></span> Password : 123456 </a></div>
              </div>
            </div>
          </div>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/work-1-3.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">customer</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span>Username : customer@gamil.com</a></div><br>
                <div><a href="#"><span class="icon-person"></span> Password : 123456 </a></div>
              </div>
            </div>
          </div>
        </div>



        <div class="sidebar-box ftco-animate">
          <h3 class="heading-sidebar">ตัวอย่างภาพโปรเจค หน้าบ้าน</h3>
          <carousel :data="data_font"></carousel>

        </div>

          <div class="sidebar-box ftco-animate">
          <h3 class="heading-sidebar">ตัวอย่างภาพโปรเจค หลังบ้าน</h3>
          <carousel :data="data_end"></carousel>

        </div>

            <div class="sidebar-box ftco-animate">
                 <h3 class="heading-sidebar">ตัวอย่างวีดีโอใช้งานหน้าร้านเบื้องต้น</h3>
             <youtube :video-id="video_intro"   :player-vars="playerVars"></youtube>
            </div>

             <div class="sidebar-box ftco-animate">
                 <h3 class="heading-sidebar">ตัวอย่างวีดีโอใช้งานหลังร้าน สต๊อก รับออเดอร์ </h3>
             <youtube :video-id="video_backend"   ></youtube>
            </div>

             <div class="sidebar-box ftco-animate">
                 <h3 class="heading-sidebar">ตัวอย่างวีดีโอใช้งานระบบ ตัวบัตรเครดิต </h3>
             <youtube :video-id="video_omise"   ></youtube>
            </div>

              <div class="sidebar-box ftco-animate">
                 <h3 class="heading-sidebar">ตัวอย่างวีดีโออัพเลข พัสดุเข้าระบบ เเละติดตามสถานะสินค้า</h3>
             <youtube :video-id="video_track"   ></youtube>
            </div>

            <div class="sidebar-box ftco-animate">
                 <h3 class="heading-sidebar">ตัวอย่างวีดีโอ การตัดสต๊อกหน้าร้าน เเละยกเลิกสินค้า</h3>
             <youtube :video-id="video_stock"   ></youtube>
            </div>

             <div class="sidebar-box ftco-animate">
                 <h3 class="heading-sidebar">ตัวอย่างวีดีโอ การสร้าง คูปองส่วนลด เเละสินค้าที่ร่วมรายการ</h3>
             <youtube :video-id="video_coupon"   ></youtube>
            </div>

              <div class="sidebar-box ftco-animate">
                 <h3 class="heading-sidebar">ตัวอย่างวีดีโอ ให้คะเเนนสินค้า</h3>
             <youtube :video-id="video_review"   ></youtube>
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
        data_font: [
            '<div class="example-slide">   <img src="images/shop/font/1.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/2.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/3.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/4.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/5.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/6.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/7.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/8.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/9.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/10.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/11.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/12.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/13.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/14.png" alt="" class="img-fluid"></div>',
             '<div class="example-slide">   <img src="images/shop/font/15.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/16.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/17.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/18.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/19.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/20.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/21.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/font/22.png" alt="" class="img-fluid"></div>',
        ],
           data_end: [
            '<div class="example-slide">   <img src="images/shop/back/1.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/back/2.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/back/3.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/back/4.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/back/5.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/back/6.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/back/7.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/back/8.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/back/9.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/back/10.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/back/11.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/back/12.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/back/13.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/back/14.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/back/15.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/back/16.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/back/17.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/back/18.png" alt="" class="img-fluid"></div>',
            '<div class="example-slide">   <img src="images/shop/back/19.png" alt="" class="img-fluid"></div>',
        ],
        video_intro: 'hWPdYt64m_U',
        video_backend: 'FDJSOPgDtOM',
        video_omise: 'VCaWzDWJqew',
        video_track: 'uUWmt0scIRc',
        video_stock: 'jFLRAq73bfY',
        video_coupon: 'gXNwyg63Wac',
         video_review: '8qxsJe6y_IE',


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
