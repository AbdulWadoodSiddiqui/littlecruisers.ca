@section('content')
@extends('main')

<section class="page-header">
    <div class="page-header__bg"></div>
    <div class="container">
        <h2 class="page-header__title">Programs</h2>
        <ul class="kidearn-breadcrumb list-unstyled">
            <li><a href="/">Home</a></li>
            <li><span>Programs</span></li>
        </ul>
    </div>
</section>

<section class="program-page">
    <div class="container">
        <div class="row gutter-y-30">
            <div class="col-lg-4 col-md-6">
                <div class="program-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms' style='--accent-color: #F25334;'>
                    <div class="program-three__item__image">
                        <img src="assets/images/services/science-experiments.webp" alt="Toddler">
                    </div><!-- /.program-one__item__image -->
                    <div class="program-three__item__content">
                        <div class="program-three__item__icon">
                            <span class="icon-crawling-baby-silhouette"></span>
                        </div><!-- /.program-three__item__icon -->
                        <h3 class="program-three__item__title"><a href="programs-d-toddler.html">Science Experiments</a></h3><!-- /.program-three__item__title -->
                        <div class="program-three__item__age">Science Experiments</div><!-- /.program-three__item__age -->
                        <p class="program-three__item__text">Discover science with Little Cruisers! Exciting hands-on experiments that inspire a lifelong love for learning.</p><!-- /.program-three__item__text -->
                        <a class="program-three__item__rm" href="{{route('contact-us')}}"><span class="icon-right-arrow"></span></a><!-- /.program-three__item__text -->
                    </div><!-- /.program-three__item__content -->
                </div><!-- /.program-three__item__one -->
            </div><!-- /.program-item -->
            <div class="col-lg-4 col-md-6">
                <div class="program-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms' style='--accent-color: #75C137;'>
                    <div class="program-three__item__image">
                        <img src="assets/images/services/storytelling.webp" alt="Preschool">
                    </div><!-- /.program-one__item__image -->
                    <div class="program-three__item__content">
                        <div class="program-three__item__icon">
                            <span class="icon-playtime"></span>
                        </div><!-- /.program-three__item__icon -->
                        <h3 class="program-three__item__title"><a href="programs-d-preschool.html">Storytelling</a></h3><!-- /.program-three__item__title -->
                        <div class="program-three__item__age">Storytelling</div><!-- /.program-three__item__age -->
                        <p class="program-three__item__text">Embark on enchanting adventures through captivating tales, where imagination knows no limits and a world of wonder awaits.</p><!-- /.program-three__item__text -->
                        <a class="program-three__item__rm" href="{{route('contact-us')}}"><span class="icon-right-arrow"></span></a><!-- /.program-three__item__text -->
                    </div><!-- /.program-three__item__content -->
                </div><!-- /.program-three__item__one -->
            </div><!-- /.program-item -->
            <div class="col-lg-4 col-md-6">
                <div class="program-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms' style='--accent-color: #2390FF;'>
                    <div class="program-three__item__image">
                        <img src="assets/images/services/drama-and-music.webp" alt="Kindergarten">
                    </div><!-- /.program-one__item__image -->
                    <div class="program-three__item__content">
                        <div class="program-three__item__icon">
                            <span class="icon-fun"></span>
                        </div><!-- /.program-three__item__icon -->
                        <h3 class="program-three__item__title"><a href="programs-d-kindergarten.html">Drama & Music</a></h3><!-- /.program-three__item__title -->
                        <div class="program-three__item__age">Drama & Music</div><!-- /.program-three__item__age -->
                        <p class="program-three__item__text">Spark your child's creativity and confidence with dynamic drama and music sessions at Little Cruisers, nurturing artistic expression and teamwork.</p><!-- /.program-three__item__text -->
                        <a class="program-three__item__rm" href="{{route('contact-us')}}"><span class="icon-right-arrow"></span></a><!-- /.program-three__item__text -->
                    </div><!-- /.program-three__item__content -->
                </div><!-- /.program-three__item__one -->
            </div><!-- /.program-item -->
            <div class="col-lg-4 col-md-6">
                <div class="program-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms' style='--accent-color: #FFAA23;'>
                    <div class="program-three__item__image">
                        <img src="assets/images/services/outside-play.webp" alt="Flex-care">
                    </div><!-- /.program-one__item__image -->
                    <div class="program-three__item__content">
                        <div class="program-three__item__icon">
                            <span class="icon-charity"></span>
                        </div><!-- /.program-three__item__icon -->
                        <h3 class="program-three__item__title"><a href="programs-d-flex-care.html">Outside Play</a></h3><!-- /.program-three__item__title -->
                        <div class="program-three__item__age">Outside Play</div><!-- /.program-three__item__age -->
                        <p class="program-three__item__text">Encourage active exploration and boundless adventures outdoors with Little Cruisers, where fresh air and fun-filled learning await.</p><!-- /.program-three__item__text -->
                        <a class="program-three__item__rm" href="{{route('contact-us')}}"><span class="icon-right-arrow"></span></a><!-- /.program-three__item__text -->
                    </div><!-- /.program-three__item__content -->
                </div><!-- /.program-three__item__one -->
            </div><!-- /.program-item -->
            <div class="col-lg-4 col-md-6">
                <div class="program-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='400ms' style='--accent-color: #26A6A1;'>
                    <div class="program-three__item__image">
                        <img src="assets/images/services/kids-yoga.webp" alt="Art program">
                    </div><!-- /.program-one__item__image -->
                    <div class="program-three__item__content">
                        <div class="program-three__item__icon">
                            <span class="icon-art-studies"></span>
                        </div><!-- /.program-three__item__icon -->
                        <h3 class="program-three__item__title"><a href="programs-d-art.html">Yoga</a></h3><!-- /.program-three__item__title -->
                        <div class="program-three__item__age">Yoga</div><!-- /.program-three__item__age -->
                        <p class="program-three__item__text">Promote physical and mental well-being with calming yoga sessions at Little Cruisers, designed to cultivate balance, strength, and inner peace.</p><!-- /.program-three__item__text -->
                        <a class="program-three__item__rm" href="{{route('contact-us')}}"><span class="icon-right-arrow"></span></a><!-- /.program-three__item__text -->
                    </div><!-- /.program-three__item__content -->
                </div><!-- /.program-three__item__one -->
            </div><!-- /.program-item -->
            <div class="col-lg-4 col-md-6">
                <div class="program-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='500ms' style='--accent-color: #5F7999;'>
                    <div class="program-three__item__image">
                        <img src="assets/images/services/enriching-experiences.webp" alt="Discipline program">
                    </div><!-- /.program-one__item__image -->
                    <div class="program-three__item__content">
                        <div class="program-three__item__icon">
                            <span class="icon-discipline"></span>
                        </div><!-- /.program-three__item__icon -->
                        <h3 class="program-three__item__title"><a href="programs-d-discipline.html">Enriching Experiences</a></h3><!-- /.program-three__item__title -->
                        <div class="program-three__item__age">Enriching Experiences</div><!-- /.program-three__item__age -->
                        <p class="program-three__item__text">Enrich your child's journey with unique experiences at Little Cruisers, from live animal encounters to mesmerizing magic shows by special guests.</p><!-- /.program-three__item__text -->
                        <a class="program-three__item__rm" href="{{route('contact-us')}}"><span class="icon-right-arrow"></span></a><!-- /.program-three__item__text -->
                    </div><!-- /.program-three__item__content -->
                </div><!-- /.program-three__item__one -->
            </div>
        </div>
    </div>
</section>


@endsection