<section id="testimonials" class="testimonials section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper">
            <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            }
          }
        </script>
            <div class="swiper-wrapper">
                @foreach ($testimonial as $item)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset($item->image) }}" class="testimonial-img" alt="">
                            <h3>{{ $item->name }}</h3>
                            <h4>{{ $item->position }}</h4>
                            <div class="stars">
                                @for ($x = 1; $x <= $item->star; $x++)
                                    <i class="bi bi-star-fill"></i>
                                @endfor
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>{{ $item->comment }}</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                @endforeach
                <div class="swiper-pagination"></div>
            </div>
        </div>

</section>
