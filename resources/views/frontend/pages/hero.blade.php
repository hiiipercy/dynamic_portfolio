<section id="hero" class="hero section">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 class="">{{ $hero->title }}</h1>
                <p class="">{{ $hero->subtitle }}</p>
                <div class="d-flex">
                    <a href="#about" class="btn-get-started">Get Started</a>
                    <a href="{{ $hero->url }}" class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="{{ asset($hero->image) }}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section>