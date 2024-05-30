<section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2 class="">About Us</h2>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                <p>
                    {{ $about->title }}
                </p>
                <ul>
                    <li><i class="bi bi-check2-circle"></i> <span>{{ $about->list_1 }}</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>{{ $about->list_2 }}</span></li>
                    <li><i class="bi bi-check2-circle"></i> <span>{{ $about->list_3 }}</span>
                    </li>
                </ul>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <p>{{ $about->description }}</p>
                <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
            </div>

        </div>
    </div>

</section>

