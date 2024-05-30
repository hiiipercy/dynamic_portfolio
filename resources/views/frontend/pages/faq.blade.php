<section id="faq-2" class="faq-2 section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
            in iste officiis commodi quidem hic quas.</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-10">

                    <div class="faq-container">
                        @foreach ($faq as $item)
                            <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>{{ $item->question }}</h3>
                                <div class="faq-content">
                                    <p>{{ $item->answer }}</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                        @endforeach
                            <!-- End Faq item-->
                    </div>

            </div>

        </div>

</section>
