<section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row gy-4 justify-content-center">
            @foreach ($service as $item )
            <div class="col-xl-3 col-md-6 " data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon"><img src="{{ asset($item->image) }}" height="50" width="50" class="img-fluid" alt=""></div>
                    <h4><a href="" class="stretched-link">{{ $item->ser_title }}</a></h4>
                    <p>{{ $item->ser_details }}</p>
                </div>
                
            </div>
            @endforeach
        </div>

    </div>

</section>