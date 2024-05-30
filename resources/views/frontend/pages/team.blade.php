<section id="team" class="team section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">
            @foreach ($team as $item)
                
            
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="team-member d-flex align-items-start">
                    <div class="pic"><img src="{{ asset($item->image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <h4>{{ $item->name }}</h4>
                        <span>{{ $item->position }}</span>
                        <p>{{ $item->details }}</p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""> <i class="bi bi-linkedin"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End Team Member -->
        </div>

    </div>

</section>