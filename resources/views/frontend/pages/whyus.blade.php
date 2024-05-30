<section id="why-us" class="section why-us" data-builder="section">

    <div class="container-fluid">

        <div class="row gy-4">

            <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

                <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="">{{$whyus->title}}</h3>
                    <p class="">
                        {{$whyus->subtitle}}
                    </p>
                </div>

                <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

                    <div class="faq-item faq-active">

                        <h3><span>01</span>{{$whyus->list_title_1}}</h3>
                        <div class="faq-content">
                            <p>{{$whyus->list_1}}</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span>02</span>{{$whyus->list_title_2}}</h3>
                        <div class="faq-content">
                            <p>{{$whyus->list_2}}</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3><span>03</span>{{$whyus->list_title_3}}</h3>
                        <div class="faq-content">
                            <p>{{$whyus->list_3}}
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                </div>

            </div>

            <div class="col-lg-5 order-1 order-lg-2 why-us-img">
                <img src="http://localhost/BootstrapMade/Builder/components/img/template/Arsha/why-us.png"
                    class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
            </div>
        </div>

    </div>

</section>