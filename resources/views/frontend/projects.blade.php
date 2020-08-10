<section class="ftco-section ftco-project" id="projects-section">
    <div class="container-fluid px-md-4">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Accomplishments</span>
                <h2 class="mb-4">Our Projects</h2>
                <p>You can see the work I add to my Projects</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/work-1.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="{{route('detali.shop')}}">Watch &amp; Shopping</a></h3>
                        <span>Web Design</span>
                        <div class="view-eye">
                            <a href="javascript:;"><i class="fa fa-eye" aria-hidden="true" id="shop" ></i></a>
                            <input type="hidden" id="value_shop" value="{{$post_shop->view_count}}">
                           </div>
                    </div>

                </div>


            </div>
            <div class="col-md-3">
                <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/work-2.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                        <h3><a href="{{route('detali.clocktime')}}">Clock &amp; Timer</a></h3>
                        <span>Web Design</span>
                        <div class="view-eye">
                            <a href="javascript:;"><i class="fa fa-eye" aria-hidden="true" id="clocktime" ></i></a>
                            <input type="hidden" id="value_clocktime" value="{{$post_clocktime->view_count}}">
                           </div>
                    </div>


                </div>
            </div>
            <div class="col-md-3">
                <div class="project img shadow ftco-animate d-flex justify-content-center align-items-center" style="background-image: url(images/work-3.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center p-4">
                    <h3><a href="{{route('detali.hardandsoft')}}"> Data  Hardware &amp; Software</a></h3>
                        <span>Web Design</span>
                        <div class="view-eye">
                            <a href="javascript:;"><i class="fa fa-eye" aria-hidden="true" id="hardandsoft" ></i></a>
                        <input type="hidden" id="value_hardandsoft" value="{{$post_savedata->view_count}}">
                           </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

 
