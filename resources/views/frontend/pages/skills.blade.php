<section id="skills" class="skills section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">

            <div class="col-lg-6 d-flex align-items-center">
                <img src="{{ asset($skill->image) }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0 content">

                <h3>{{ $skill->title }}</h3>
                <p class="fst-italic">
                    {{ $skill->subtitle }}
                </p>

                <div class="skills-content skills-animation">

                    <div class="progress">
                        <span class="skill"><span>{{ $skill->skill_name_1 }}</span> <i class="val">{{ $skill->skill_percent_1 }}</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->skill_fill_percent_1 }}" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>


                    <div class="progress">
                        <span class="skill"><span>{{ $skill->skill_name_2 }}</span> <i class="val">{{ $skill->skill_percent_2 }}</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->skill_fill_percent_2 }}" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="progress">
                        <span class="skill"><span>{{ $skill->skill_name_3 }}</span> <i class="val">{{ $skill->skill_percent_3 }}</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->skill_fill_percent_3 }}" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section>