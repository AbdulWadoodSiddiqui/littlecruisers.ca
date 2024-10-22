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

<section class="program-page pb-0">
    <div class="container">
        
        <div class="row gutter-y-30">
            <div class="col-xl-4 col-md-6">
                <div class="program-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms' style='--accent-color: #F25334;'>
                    <div class="program-three__item__image">
                        <img src="assets/images/program/infant.webp" alt="Toddler">
                    </div>
                    <div class="program-three__item__content">
                        <div class="program-three__item__icon">
                            <span class="icon-crawling-baby-silhouette"></span>
                        </div>
                        <h3 class="program-three__item__title"><span>Infant</span></h3>
                        <div class="program-three__item__age">(12 - 18 months)</div>
                        <p class="program-three__item__text">At Little Cruisers, our Infant Care program is tailored for babies aged 12 to 18 months. Our experienced caregivers provide a secure, loving environment and focus on nurturing early development through gentle interactions and sensory experiences.</p>
                        <a class="program-three__item__rm" href="{{route('contact-us')}}"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="program-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms' style='--accent-color: #75C137;'>
                    <div class="program-three__item__image">
                        <img src="assets/images/program/toddlers.webp" alt="Preschool">
                    </div>
                    <div class="program-three__item__content">
                        <div class="program-three__item__icon">
                            <span class="icon-playtime"></span>
                        </div>
                        <h3 class="program-three__item__title"><span>Toddler</span></h3>
                        <div class="program-three__item__age">(19 - 36 months)</div>
                        <p class="program-three__item__text">Little Cruisers welcomes toddlers aged 19 months to 3 years to embark on an exciting adventure! Our Toddler Care program encourages their natural curiosity and growing independence through age-appropriate activities, guided play, and learning opportunities.</p>
                        <a class="program-three__item__rm" href="{{route('contact-us')}}"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="program-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms' style='--accent-color: #2390FF;'>
                    <div class="program-three__item__image">
                        <img src="assets/images/program/preschool.webp" alt="Kindergarten">
                    </div>
                    <div class="program-three__item__content">
                        <div class="program-three__item__icon">
                            <span class="icon-fun"></span>
                        </div>
                        <h3 class="program-three__item__title"><span>Preschool</span></h3>
                        <div class="program-three__item__age">(3-4 years)</div>
                        <p class="program-three__item__text">Little Cruisers welcomes preschoolers aged 4 to 5 to a world of discovery! Our program sparks young minds with engaging activities and structured learning, preparing them for school while fostering a love for exploration and creativity.</p>
                        <a class="program-three__item__rm" href="{{route('contact-us')}}"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="program-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms' style='--accent-color: #FFAA23;'>
                    <div class="program-three__item__image">
                        <img src="assets/images/program/kindergarten.webp" alt="Flex-care">
                    </div>
                    <div class="program-three__item__content">
                        <div class="program-three__item__icon">
                            <span class="icon-charity"></span>
                        </div>
                        <h3 class="program-three__item__title"><span>Kindergarten & OOSC</span></h3>
                        <div class="program-three__item__age">(5+ years)</div>
                        <p class="program-three__item__text">Little Cruisers supports school-age children aged 6+ with our Before & After School Care program, offering a blend of learning and relaxation. We provide engaging activities and a safe, enjoyable space that extends the learning and fun beyond the school day.</p>
                        <a class="program-three__item__rm" href="{{route('contact-us')}}"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Get in Touch Form Area -->
<section class="contact-three pt-5">
    <div class="container">
        @include('get_in_touch_form')
    </div>
</section>

@endsection