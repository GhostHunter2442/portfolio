<template>
    <div>
        <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="#">Home  <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="#">Data Hardware & Software</a></span></p>

       </div>
     </div>
   </div>
  </section>

<section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 ftco-animate">
          <h2 class="mb-3"> ระบบสำหรับเก็บข้อมูล project เเยกรายการของ hardware/software</h2>

          <p>
            <img src="images/image_3.jpg" alt="" class="img-fluid">
          </p>

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
          <p>5. ระบบจัดการผู้ใช้งาน</p>
          <p>6. Mysql</p>




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
          <h3 class="heading-sidebar">วีดีโอ</h3>
          <a href="https://www.youtube.com/watch?v=4nd8fmUF8yg"><span class="icon-calendar"></span>Link</a>
        </div>
      </div>
<carousel :items="1">

    <img src="https://placeimg.com/200/200/any?1">

    <img src="https://placeimg.com/200/200/any?2">

    <img src="https://placeimg.com/200/200/any?3">

    <img src="https://placeimg.com/200/200/any?4">

</carousel>


 </div>
  </section> <!-- .section -->


    </div>
</template>
<script>

import carousel from 'vue-owl-carousel'

export default {
 components: { carousel }
//    data() {
//         return {

//         }

//     },


//    computed: {

//     },
//      methods: {

//     },



};
</script>
