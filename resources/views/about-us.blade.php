@section('content')
@extends('main')

<section class="page-header">
    <div class="page-header__bg"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">About us</h2>
        <ul class="kidearn-breadcrumb list-unstyled">
            <li><a href="/">Home</a></li>
            <li><span>About</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="about-four">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="300ms">
                <div class="about-four__image">

                    <div class="about-four__image__one kidearn-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 3, "speed": 700, "scale": 1 }'>
                        <img src="assets/images/resources/about-4-1.jpg" alt="kidearn" />
                    </div>

                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                <div class="about-four__content">
                    <div class="sec-title text-left">

                        <h6 class="sec-title__tagline">About Us</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">Welcome to Little Cruisers Daycare,</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <p class="about-three__content__text">
                        where we blend learning with laughter to create memorable experiences for our children and families. Our goal is to cultivate a warm, inviting atmosphere that fosters a deep sense of belonging and provides a secure and stimulating environment for both play and education. We firmly believe that children learn best through play, whether it's energetic and lively or calm and immersive. Our approach focuses on self-directed play, which encourages children to explore their interests and curiosities, leading to natural learning and social development. By prioritizing play that is driven by internal motivation rather than external pressures, we aim to enrich children's early years and equip them with the skills and confidence needed for a successful life journey.
                    </p>
                    <a href="{{route('about-us')}}" class="kidearn-btn">
                        <span>Learn More</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="video-two">
    <div class="video-two__bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="video-two__content">
                    <h1 class="video-two__content__title">Our Vision</h1>
                    <p class="text-white" style="font: weight 900px;">
                        Our vision is to nurture a vibrant environment where every child's dreams take flight. Through playful adventures, caring connections, and a galaxy of shared experiences, we're committed to illuminating the path towards a brilliant tomorrow for your little stars. Come, journey with us as we create a universe of growth, exploration, and endless wonder.
                    </p>
                    <a href="about.html" class="kidearn-btn">
                        <span>Learn More</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="video-two__btn-shape wow fadeInUp" data-wow-delay="200ms">
                    <div class="video-two__btn kidearn-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 5, "speed": 700, "scale": 1 }'>
                        <img src="assets/images/backgrounds/our-vision.webp" alt="kidearn" />
                        <!-- <a href="https://www.youtube.com/watch?v=0MuL8fd3pb8" class="video-popup">
                            <i class="fa fa-play"></i>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-four">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="300ms">
                <div class="about-four__image">

                    <div class="about-four__image__one kidearn-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 3, "speed": 700, "scale": 1 }'>
                        <img src="assets/images/resources/everyday-adventures-image.webp" alt="kidearn" />
                    </div>

                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                <div class="about-four__content">
                    <div class="sec-title text-left">

                        <h6 class="sec-title__tagline">About Us</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">Everyday Adventures Await</h3><!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <p class="about-three__content__text">Embark on a journey of play and learning at The Kids Planet, where each day brings new experiences. From art to storytelling, outdoor adventures to music, our diverse activities nurture growth and spark excitement.</p>
                    <div class="who-we-are d-flex">
                        <ul class="who-we-are-list">
                            <li>
                                <!-- <span>1</span> -->
                                Artistic Creations
                            </li>
                            <li>
                                Storytime Adventures
                            </li>
                            <li>
                                Outdoor Exploration
                            </li>
                            <li>
                                Music and Movement
                            </li>
                            <li>
                                Building Blocks
                            </li>
                            <li>
                                Science Sensations
                            </li>
                        </ul>
                        <ul style="margin-left: 50px;">
                            <li>
                                Dramatic Play
                            </li>
                            <li>
                                Math Magic
                            </li>
                            <li>
                                Cooking Adventures
                            </li>
                            <li>
                                Cooperative Games
                            </li>
                            <li>
                                Sensory Play
                            </li>
                            <li>
                                Gardening Fun
                            </li>
                        </ul>
                    </div>
                    <a href="{{route('about-us')}}" class="kidearn-btn">
                        <span>Learn More</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="funfact-one">
        <div class="funfact-one__shape1 kidearn-splax" data-para-options='{"orientation": "down", "scale": 1.9, "delay": ".3", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
    }'><img src="assets/images/shapes/funfact-shape-1.png" alt="kidearn" />
        </div>
        <div class="funfact-one__shape2 kidearn-splax" data-para-options='{"orientation": "right", "scale": 1.9, "delay": ".4", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
    }'><img src="assets/images/shapes/funfact-shape-2.png" alt="kidearn" />
        </div>
        <div class="funfact-one__shape3 kidearn-splax" data-para-options='{"orientation": "right", "scale": 1.9, "delay": ".3", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
    }'><img src="assets/images/shapes/funfact-shape-3.png" alt="kidearn" />
        </div>
        <div class="funfact-one__shape4 kidearn-splax" data-para-options='{"orientation": "left", "scale": 1.9, "delay": ".4", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
    }'><img src="assets/images/shapes/funfact-shape-4.png" alt="kidearn" />
        </div>
        <div class="funfact-one__shape5 kidearn-splax" data-para-options='{"orientation": "left", "scale": 1.6, "delay": ".5", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
    }'><img src="assets/images/shapes/funfact-shape-5.png" alt="kidearn" />
        </div>
    <div class="container" style="border:1px solid red;">
        <div class="row gutter-y-30">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="funfact-one__item text-center">
                    <div class="funfact-one__icon"><span class="icon-graduated"></span></div>
                    <div class="funfact-one__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="30.3" data-speed="1500"></span>
                        </span>k
                    </div>
                    <p class="funfact-one__title">Student Enrolled</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="funfact-one__item funfact-one__item--smnone text-center">
                    <div class="funfact-one__icon"><span class="icon-online-learning"></span></div>
                    <div class="funfact-one__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="40.5" data-speed="1500"></span>
                        </span>k
                    </div>
                    <p class="funfact-one__title">Class completed</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="funfact-one__item text-center">
                    <div class="funfact-one__icon"><span class="icon-rating"></span></div>
                    <div class="funfact-one__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="88.9" data-speed="1500"></span>
                        </span>%
                    </div>
                    <p class="funfact-one__title">satisfaction rate</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="funfact-one__item funfact-one__item--noborder text-center">
                    <div class="funfact-one__icon"><span class="icon-instructor"></span></div>
                    <div class="funfact-one__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="6.30" data-speed="1500"></span>
                        </span>+
                    </div>
                    <p class="funfact-one__title">Top instructors</p>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Start Choose Area -->
<!-- <section class="choose-area pt-100 pb-70">
    <div class="container">
        <div class="sec-title text-center">

            <h6 class="sec-title__tagline">About Us</h6>

            <h3 class="sec-title__title">Everyday Adventures Await</h3>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6 order-6">
                        <div class="single-choose d-flex flex-column align-items-start">
                            <div class="icon">
                                <i>
                                    <img src="/assets/images/shapes/slider-shape-2.png" alt="" style="padding: 8px;">
                                </i>
                            </div>

                            <div class="content">
                                <h3 class="text-start">Nurturing Care</h3>
                                <p class="text-start">Your child's happiness and safety are our top priorities. Our
                                    loving educators create a cozy space where kids ca n learn and explore while feeling
                                    cherished and secure.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 order-5">
                        <div class="single-choose d-flex flex-column align-items-start">
                            <div class="icon">
                                <i>
                                    <img src="/assets/images/shapes/slider-shape-2.png" alt="" style="padding: 8px;">
                                </i>
                            </div>

                            <div class="content">
                                <h3 class="text-start">Playful Innovation</h3>
                                <p class="text-start">Get ready for learning that's a whole lot of fun! We use cool ways
                                    to teach your child, sparking curiosity, thinking skills, and a love for learning
                                    that lasts a lifetime.</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 order-4">
                        <div class="single-choose d-flex flex-column align-items-start">
                            <div class="icon">
                                <i>
                                    <img src="/assets/images/shapes/slider-shape-2.png" alt="" style="padding: 8px;">
                                </i>
                            </div>

                            <div class="content">
                                <h3 class="text-start">Comprehensive Learning</h3>
                                <p class="text-start"> We're all about helping your child grow in every way possible.
                                    Through inclusive play, activities, and guidance, we help them shine academically,
                                    emotionally, socially, and physically.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 order-3">
                        <div class="single-choose d-flex flex-column align-items-start">
                            <div class="icon">
                                <i>
                                    <img src="/assets/images/shapes/slider-shape-2.png" alt="" style="padding: 8px;">
                                </i>
                            </div>

                            <div class="content">
                                <h3 class="text-start">Collaborative Community</h3>
                                <p class="text-start"> We're not just a daycare - we're a big family! We love talking
                                    with parents, sharing updates, and celebrating your child's journey together. Your
                                    involvement makes all the difference.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 order-2">
                <div class="about-one__image">
                    <div class="about-one__image__one kidearn-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 5, "speed": 700, "scale": 1 }'>
                        <img src="assets/images/resources/about-1-1.jpg" alt="kidearn" />
                    </div>
                    <div class="about-one__image__border wow fadeInUp" data-wow-delay="200ms">
                        <img src="assets/images/shapes/about-1-border.jpg" alt="kidearn" />
                    </div>
                    <div class="about-one__image__leaf kidearn-splax" data-para-options='{
						"orientation": "left",
						"scale": 1.5,
						"overflow": true
						}'>
                        <img src="assets/images/shapes/about-1-leaf.png" alt="kidearn" />
                    </div>
                    <div class="about-one__image__ball wow fadeInUp" data-wow-delay="100ms"></div>
                </div>

            </div>

            <div class="col-lg-6 col-md-12 order-5">
                <div class="single-choose d-flex flex-column align-items-start">
                    <div class="icon">
                        <i>
                            <img src="/assets/images/shapes/slider-shape-2.png" alt="" style="padding: 8px;">
                        </i>
                    </div>

                    <div class="content">
                        <h3 class="text-start">Active Communication</h3>
                        <p class="text-start"> We provide daily updates through HiMama. We ensure we
                            are always available for parents to maintain a seamless
                            flow of information among parents, staff, and
                            management. We provide regular progress reports of
                            children to their parents. Our active communication policy
                            ensures transparency and collaboration, fostering an
                            environment where children thrive and parents’ input is
                            valued.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> -->
<section class="blog-one blog-one--home-three mt-50 mb-120">
    <div class="blog-one--home-three__top-shape"></div>
    <div class="blog-one--home-three__bg"></div>
    <div class="container">
        <div class="sec-title text-center">
            <h3 class="sec-title__title">A View of Our<br> Imaginative World</h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="blog-one__carousel kidearn-owl__carousel kidearn-owl__carousel--with-shadow kidearn-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                "items": 1,
                "margin": 0,
                "loop": false,
                "smartSpeed": 700,
                "nav": false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "dots": false,
                "autoplay": false,
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "576": {
                        "items": 2,
                        "margin": 30
                    },
                    "992": {
                        "items": 3,
                        "margin": 30
                    }
                }
		    }'>
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/services/science-experiments.webp" alt="10 Easy steps to more learn about play">

                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">

                        <h3 class="blog-card__title"><a href="#">Science Experiments</a></h3><!-- /.blog-card__title -->
                        <p class="program-three__item__text">Discover science with Little Cruisers! Exciting hands-on experiments that inspire a lifelong love for learning.</p><!-- /.program-three__item__text -->

                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/services/storytelling.webp" alt="10 Easy steps to more learn about play">
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">

                        <h3 class="blog-card__title"><a href="#">Storytelling</a></h3><!-- /.blog-card__title -->
                        <p class="program-three__item__text">Embark on enchanting adventures through captivating tales, where imagination knows no limits and a world of wonder awaits.</p><!-- /.program-three__item__text -->

                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/services/drama-and-music.webp" alt="10 Easy steps to more learn about play">
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">

                        <h3 class="blog-card__title"><a href="#">Drama & Music</a></h3><!-- /.blog-card__title -->
                        <p class="program-three__item__text">Spark your child's creativity and confidence with dynamic drama and music sessions at Little Cruisers, nurturing artistic expression and teamwork.</p><!-- /.program-three__item__text -->

                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.item -->
        </div><!-- /.row -->
        <div class="blog-one__carousel kidearn-owl__carousel kidearn-owl__carousel--with-shadow kidearn-owl__carousel--basic-nav owl-carousel owl-theme mt-50" data-owl-options='{
                "items": 1,
                "margin": 0,
                "loop": false,
                "smartSpeed": 700,
                "nav": false,
                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                "dots": false,
                "autoplay": false,
                "responsive": {
                    "0": {
                        "items": 1
                    },
                    "576": {
                        "items": 2,
                        "margin": 30
                    },
                    "992": {
                        "items": 3,
                        "margin": 30
                    }
                }
		    }'>
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/services/outside-play.webp" alt="10 Easy steps to more learn about play">
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">

                        <h3 class="blog-card__title"><a href="#">Outside Play</a></h3><!-- /.blog-card__title -->
                        <p class="program-three__item__text">Encourage active exploration and boundless adventures outdoors with Little Cruisers, where fresh air and fun-filled learning await.</p><!-- /.program-three__item__text -->

                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/services/kids-yoga.webp" alt="10 Easy steps to more learn about play">
                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">

                        <h3 class="blog-card__title"><a href="#">Yoga</a></h3><!-- /.blog-card__title -->
                        <p class="program-three__item__text">Promote physical and mental well-being with calming yoga sessions at Little Cruisers, designed to cultivate balance, strength, and inner peace.</p><!-- /.program-three__item__text -->

                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/services/enriching-experiences.webp" alt="10 Easy steps to more learn about play">

                    </div><!-- /.blog-card__image -->
                    <div class="blog-card__content">

                        <h3 class="blog-card__title"><a href="#">Enriching Experiences</a></h3><!-- /.blog-card__title -->
                        <p class="program-three__item__text">Enrich your child's journey with unique experiences at Little Cruisers, from live animal encounters to mesmerizing magic shows by special guests.</p><!-- /.program-three__item__text -->

                    </div><!-- /.blog-card__content -->
                </div><!-- /.blog-card -->
            </div><!-- /.item -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    <div class="blog-one--home-three__bottom-shape"></div>
</section><!-- /.blog-one blog-one--home-three -->


<section class="choose-area  pb-70 mb-50">
    <div class="container">
        <div class="sec-title allign-left">
            <h3 class="sec-title__title">Our Core Values</h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->

        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6 order-6">
                        <div class="single-choose d-flex flex-column align-items-start">
                            <div class="icon">
                                <i>
                                    <img src="/assets/images/shapes/nurturing-care.png" alt="" style="padding: 8px; height:70px; width:70px">
                                </i>
                            </div>

                            <div class="content">
                                <h3 class="text-start">Nurturing Care</h3>
                                <p class="text-start">Your child's happiness and safety are our top priorities. Our
                                    loving educators create a cozy space where kids ca n learn and explore while feeling
                                    cherished and secure.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 order-5">
                        <div class="single-choose d-flex flex-column align-items-start">
                            <div class="icon">
                                <i>
                                    <img src="/assets/images/shapes/playful-innovation.png" alt="" style="padding: 8px; height:70px; width:70px" >
                                </i>
                            </div>

                            <div class="content">
                                <h3 class="text-start">Playful Innovation</h3>
                                <p class="text-start">Get ready for learning that's a whole lot of fun! We use cool ways
                                    to teach your child, sparking curiosity, thinking skills, and a love for learning
                                    that lasts a lifetime.</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 order-4">
                        <div class="single-choose d-flex flex-column align-items-start">
                            <div class="icon">
                                <i>
                                    <img src="/assets/images/shapes/comprehensive-learning.png" alt="" style="padding: 8px; height:70px; width:70px">
                                </i>
                            </div>

                            <div class="content">
                                <h3 class="text-start">Comprehensive Learning</h3>
                                <p class="text-start"> We're all about helping your child grow in every way possible.
                                    Through inclusive play, activities, and guidance, we help them shine academically,
                                    emotionally, socially, and physically.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 order-3">
                        <div class="single-choose d-flex flex-column align-items-start">
                            <div class="icon">
                                <i>
                                    <img src="/assets/images/shapes/collaborative-community.png" alt="" style="padding: 8px; height:70px; width:70px">
                                </i>
                            </div>

                            <div class="content">
                                <h3 class="text-start">Collaborative Community</h3>
                                <p class="text-start"> We're not just a daycare - we're a big family! We love talking
                                    with parents, sharing updates, and celebrating your child's journey together. Your
                                    involvement makes all the difference.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 order-2">
                <div class="about-one__image">
                    <div class="about-one__image__one kidearn-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 5, "speed": 700, "scale": 1 }'>
                        <img src="assets/images/resources/about-1-1.jpg" alt="kidearn" />
                    </div>
                    <div class="about-one__image__border wow fadeInUp" data-wow-delay="200ms">
                        <img src="assets/images/shapes/about-1-border.jpg" alt="kidearn" />
                    </div>
                    <div class="about-one__image__leaf kidearn-splax" data-para-options='{
						"orientation": "left",
						"scale": 1.5,
						"overflow": true
						}'>
                        <img src="assets/images/shapes/about-1-leaf.png" alt="kidearn" />
                    </div>
                    <div class="about-one__image__ball wow fadeInUp" data-wow-delay="100ms"></div>
                </div>

            </div>

            <div class="col-lg-6 col-md-12 order-5 mt-10">
                <div class="single-choose d-flex flex-column align-items-start">
                    <div class="icon">
                        <i>
                            <img src="/assets/images/shapes/active-communication.png" alt="" style="padding: 8px; height:70px; width:70px">
                        </i>
                    </div>

                    <div class="content">
                        <h3 class="text-start">Active Communication</h3>
                        <p class="text-start"> We provide daily updates through HiMama. We ensure we
                            are always available for parents to maintain a seamless
                            flow of information among parents, staff, and
                            management. We provide regular progress reports of
                            children to their parents. Our active communication policy
                            ensures transparency and collaboration, fostering an
                            environment where children thrive and parents’ input is
                            valued.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- <section class="cta-one cta-one--about-page">
    <div class="container">
        <div class="cta-one__inner">
            <div class="cta-one__shape1 kidearn-splax" data-para-options='{"orientation": "right", "scale": 1.5, "delay": ".4", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
        }'>
                <img src="assets/images/shapes/cta-shape-1.png" alt="kidearn" />
            </div>
            <div class="cta-one__shape2 kidearn-splax" data-para-options='{"orientation": "down", "scale": 1.5, "delay": ".4", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
        }'>
                <img src="assets/images/shapes/cta-shape-2.png" alt="kidearn" />
            </div>
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="cta-one__content">
                        <h3 class="cta-one__title">How to enroll your child to a class?</h3>
                        <a href="about.html" class="kidearn-btn"><span>Visit Now</span></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta-one__one wow fadeInUp" data-wow-delay="300ms">
                        <img src="assets/images/resources/cta-1.png" alt="kidearn" />
                        <div class="cta-one__one__text">All in<br> One</div>
                    </div>
                    <div class="cta-one__thumb">
                        <div class="cta-one__thumb__two"><img src="assets/images/shapes/cta-2.png" alt="kidearn" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->



<!-- <section class="testimonial-one testimonial-one--home-two testimonial-one--about-page">
    <div class="testimonial-one__left-shape kidearn-splax" data-para-options='{
"orientation": "left",
"scale": 2.5,
"overflow": true
}'>
        <img src="assets/images/shapes/testimonial-shape-2.png" alt="kidearn" />
    </div>
    <div class="testimonial-one__right-shape kidearn-splax" data-para-options='{
"orientation": "right",
"scale": 2.5,
"overflow": true
}'>
        <img src="assets/images/shapes/testimonial-shape-3.png" alt="kidearn" />
    </div>
    <div class="container">
        <div class="testimonial-one__area">
            <div class="testimonial-one__bg"></div>
            <div class="testimonial-one__bg-shape kidearn-splax" style="background-image: url(assets/images/shapes/testimonial-shape-4.png);" data-para-options='{
        "orientation": "right",
        "scale": 1.2,
        "delay": ".3",
        "transition": "cubic-bezier(0,0,0,1)",
        "overflow": true
        }'>
            </div>
            <div class="sec-title text-center">

                <h6 class="sec-title__tagline">Testimonial</h6>

                <h3 class="sec-title__title">Parents' words are the<br> key to happy kids</h3>
            </div>
            <div class="testimonial-one__carousel kidearn-owl__carousel owl-carousel owl-theme" data-owl-options='{
        "items": 1,
        "margin": 0,
        "loop": true,
        "smartSpeed": 700,
        "nav": true,
        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
        "dots": false,
        "autoplay": false
        }'>
                <div class="item">
                    <div class="testimonial-one__item">
                        <div class="testimonial-one__item__quote">
                            Flexible Classes refers to the process of acquiring knowledge or skills through the use of digital technologies and the internet.
                            Flexible Classes refers to the process flexible Classes refers to the process
                        </div>
                        <div class="testimonial-one__item__author">
                            <img src="assets/images/resources/testi-author-1.png" alt="kidearn" />
                            <h5 class="testimonial-one__item__author__name">Savannah Nguyen</h5>
                            <p class="testimonial-one__item__author__designation">Martin’s Father</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-one__item">
                        <div class="testimonial-one__item__quote">
                            Flexible Classes refers to the process of acquiring knowledge or skills through the use of digital technologies and the internet.
                            Flexible Classes refers to the process flexible Classes refers to the process
                        </div>
                        <div class="testimonial-one__item__author">
                            <img src="assets/images/resources/testi-author-2.png" alt="kidearn" />
                            <h5 class="testimonial-one__item__author__name">Sarah Taylor</h5>
                            <p class="testimonial-one__item__author__designation">Martin’s Mother</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

@endsection