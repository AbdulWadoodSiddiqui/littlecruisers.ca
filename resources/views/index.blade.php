@section('content')
@extends('main')

<!-- Header Laptop section -->
<!-- <section class="main-slider-two d-none d-lg-block">
    <div class="main-slider-two__carousel kidearn-owl__carousel owl-carousel" data-owl-options='{
		"loop": true,
		"animateOut": "fadeOut",
		"animateIn": "fadeInRightBig",
		"items": 1,
		"autoplay": true,
		"autoplayTimeout": 7000,
		"smartSpeed": 1000,
		"nav": false,
        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
		"dots": false, 
		"margin": 0
	    }'>
        <div class="item">
            <div class="main-slider-two__item">
                <div class="main-slider-two__bg" > 
                <div class="image1"></div>
                <div class="image2"></div>
                <div class="image3"></div>
                <div class="image4"></div>
                </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="main-slider-two__content">
                                <h5 class="main-slider-two__sub-title">Kindergarten & Baby Care School</h5>
                                
                                <h2 class="main-slider-two__title">
                                    <span class="main-slider-two__title__anim text-black">Where Tiny Explorers</span>
                                    <span class="main-slider-two__title__anim text-black">Set Sail into Learning and Play!</span>
                                </h2>
                                <div class="main-slider-two__btn">
                                    <a href="tel: +15872543747" class="kidearn-btn">
                                    <i class="fas fa-phone-alt"></i>
                                        <span>Call Now</span>
                                    </a>
                                    <a href="{{route('contact-us')}}" class="kidearn-btn kidearn-btn--enroll">
                                        <span>Book a Tour</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="main-slider-two__bg-shape">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1010 527">
                                    <path d="M411.036 177.238C408.943 185.837 407.401 194.712 406.52 203.751C402.334 247.352 406.52 291.89 396.385 334.499C386.25 377.108 356.508 419.441 313.27 426.055C266.342 433.221 225.143 397.502 181.575 378.706C124.419 354.048 25.2223 366.83 1.01068 499.885C-5.37857 534.997 19.8596 595.003 39.1375 624.989C111.622 737.767 133.876 662.58 228.833 746.144C268.931 781.476 307.596 822.983 360.528 838.472C449.151 864.324 518.057 793.217 589.991 755.128C657.574 719.355 735.897 719.575 810.365 718.087C849.527 717.315 888.028 712.465 926.914 710.425C958.695 708.772 989.981 715.607 1010.97 683.912C1025.4 662.139 1026.66 633.752 1020.5 608.396C1014.33 583.04 1001.49 559.889 989.154 536.904C948.671 461.498 911.271 382.344 901.247 297.292C897.281 263.503 897.667 229.162 891.057 195.814C876.461 122.282 825.898 56.7984 758.535 24.0564C691.173 -8.68552 608.497 -7.96895 541.74 25.9857C479.996 57.4048 427.45 110.156 411.036 177.238Z" />
                                </svg>
                            </div>
                            <div class="main-slider-two__thumb">
                                <img src="assets/images/backgrounds/header-image.webp" alt="kidearn">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Header Mobile section -->
<!-- <section class="main-slider-two d-lg-none">
	<div class="main-slider-two__carousel kidearn-owl__carousel owl-carousel" data-owl-options='{
		"loop": true,
		"animateOut": "fadeOut",
		"animateIn": "fadeInRightBig",
		"items": 1,
		"autoplay": true,
		"autoplayTimeout": 7000,
		"smartSpeed": 1000,
		"nav": false,
        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
		"dots": true,
		"margin": 0
	    }'>
		<div class="item">
			<div class="main-slider-two__item">
				<div class="main-slider-two__bg" style="background-image: url(assets/images/backgrounds/slider-2-1.jpg);"></div>
                <div class="main-slider-two__shape-one"><img src="assets/images/shapes/slider-2-shape-1.png" alt="kidearn" /></div>
                <div class="main-slider-two__shape-two"><img src="assets/images/shapes/slider-2-shape-2.png" alt="kidearn" /></div>
                <div class="main-slider-two__shape-three"><img src="assets/images/shapes/slider-2-shape-3.png" alt="kidearn" /></div>
                <div class="main-slider-two__shape-four"><img src="assets/images/shapes/slider-2-shape-4.png" alt="kidearn" /></div>
                <div class="main-slider-two__shape-five"><img src="assets/images/shapes/slider-2-shape-5.png" alt="kidearn" /></div>
                <div class="main-slider-two__shape-six"><img src="assets/images/shapes/slider-2-shape-6.png" alt="kidearn" /></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<div class="main-slider-two__content">
								<h5 class="main-slider-two__sub-title">Kindergarten & Baby Care School</h5>
								
								<h2 class="main-slider-two__title">
									<span class="main-slider-two__title__anim">Ultimate child</span>
									<span class="main-slider-two__title__anim">education</span>
									<span class="main-slider-two__title__anim">center</span>
								</h2>
								<div class="main-slider-two__btn">
									<a href="about.html" class="kidearn-btn">
										<span>Learn More</span>
									</a>
									<a href="events-grid.html" class="kidearn-btn kidearn-btn--enroll">
										<span>Enroll Now</span>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="main-slider-two__bg-shape">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1010 627">
									<path d="M411.036 177.238C408.943 185.837 407.401 194.712 406.52 203.751C402.334 247.352 406.52 291.89 396.385 334.499C386.25 377.108 356.508 419.441 313.27 426.055C266.342 433.221 225.143 397.502 181.575 378.706C124.419 354.048 25.2223 366.83 1.01068 499.885C-5.37857 534.997 19.8596 595.003 39.1375 624.989C111.622 737.767 133.876 662.58 228.833 746.144C268.931 781.476 307.596 822.983 360.528 838.472C449.151 864.324 518.057 793.217 589.991 755.128C657.574 719.355 735.897 719.575 810.365 718.087C849.527 717.315 888.028 712.465 926.914 710.425C958.695 708.772 989.981 715.607 1010.97 683.912C1025.4 662.139 1026.66 633.752 1020.5 608.396C1014.33 583.04 1001.49 559.889 989.154 536.904C948.671 461.498 911.271 382.344 901.247 297.292C897.281 263.503 897.667 229.162 891.057 195.814C876.461 122.282 825.898 56.7984 758.535 24.0564C691.173 -8.68552 608.497 -7.96895 541.74 25.9857C479.996 57.4048 427.45 110.156 411.036 177.238Z"/>
								</svg>
							</div>
							<div class="main-slider-two__thumb">
								<img src="assets/images/backgrounds/slider-2-layer.png" alt="kidearn">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!-- Header given by abdullah -->
<section class="main-slider-two">
    <div class="main-slider-two__carousel kidearn-owl__carousel owl-carousel" data-owl-options='{
		"loop": true,
		"animateOut": "fadeOut",
		"animateIn": "fadeInRightBig",
		"items": 1,
		"autoplay": true,
		"autoplayTimeout": 7000,
		"smartSpeed": 1000,
		"nav": false,
        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
		"dots": false,
		"margin": 0
	    }'>
        <div class="item">
            <div class="main-slider-two__item">
                <div class="main-slider-two__bg" style="background-image: url(assets/images/backgrounds/slider-2-1.webp);"></div>
                <div class="main-slider-two__shape-one"><img src="assets/images/shapes/slider-2-shape-1.png" alt="kidearn" /></div>
                <div class="main-slider-two__shape-two"><img src="assets/images/shapes/slider-2-shape-2.png" alt="kidearn" /></div>
                <div class="main-slider-two__shape-three"><img src="assets/images/shapes/slider-2-shape-3.png" alt="kidearn" /></div>
                <div class="main-slider-two__shape-four"><img src="assets/images/shapes/slider-2-shape-4.png" alt="kidearn" /></div>
                <div class="main-slider-two__shape-five"><img src="assets/images/shapes/slider-2-shape-5.png" alt="kidearn" /></div>
                <div class="main-slider-two__shape-six"><img src="assets/images/shapes/slider-2-shape-6.png" alt="kidearn" /></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="main-slider-two__content">
                                <h5 class="main-slider-two__sub-title">Kindergarten & Baby Care School</h5>
                                
                                <h2 class="main-slider-two__title">
                                    <span class="main-slider-two__title__anim text-white">Welcome To,</span>
                                    <span class="main-slider-two__title__anim text-white">The Little Cruisers</span>
                                </h2>
                                <div class="main-slider-two__btn">
                                    <a href="#" class="kidearn-btn">
                                        <span>Learn More</span>
                                    </a>
                                    <a href="#" class="kidearn-btn kidearn-btn--enroll">
                                        <span>Enroll Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="main-slider-two__bg-shape">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1010 627">
                                    <path d="M411.036 177.238C408.943 185.837 407.401 194.712 406.52 203.751C402.334 247.352 406.52 291.89 396.385 334.499C386.25 377.108 356.508 419.441 313.27 426.055C266.342 433.221 225.143 397.502 181.575 378.706C124.419 354.048 25.2223 366.83 1.01068 499.885C-5.37857 534.997 19.8596 595.003 39.1375 624.989C111.622 737.767 133.876 662.58 228.833 746.144C268.931 781.476 307.596 822.983 360.528 838.472C449.151 864.324 518.057 793.217 589.991 755.128C657.574 719.355 735.897 719.575 810.365 718.087C849.527 717.315 888.028 712.465 926.914 710.425C958.695 708.772 989.981 715.607 1010.97 683.912C1025.4 662.139 1026.66 633.752 1020.5 608.396C1014.33 583.04 1001.49 559.889 989.154 536.904C948.671 461.498 911.271 382.344 901.247 297.292C897.281 263.503 897.667 229.162 891.057 195.814C876.461 122.282 825.898 56.7984 758.535 24.0564C691.173 -8.68552 608.497 -7.96895 541.74 25.9857C479.996 57.4048 427.45 110.156 411.036 177.238Z" />
                                </svg>
                            </div>
                            <div class="main-slider-two__thumb">
                                <img src="assets/images/backgrounds/slider-2-layer.png" alt="kidearn">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ABout Area -->
<section class="about-three mt-120">
    <div class="container">
        <div class="row mr-20">
            <div class="col-xl-6 wow fadeInRight" style="padding-right:35px" data-wow-delay="300ms" >
                <div class="about-two__image">
                    <div class="about-two__image__one kidearn-tilt" data-tilt-options='{ "glare": false, "maxGlare": 0, "maxTilt": 5, "speed": 700, "scale": 1 }'>
                        <img src="assets/images/resources/about-2-1.webp" alt="kidearn" />
                    </div>
                    <div class="about-two__image__border wow fadeInUp" data-wow-delay="400ms">
                        <img src="assets/images/shapes/about-2-shape-1.webp" alt="kidearn" />
                    </div>

                    <div class="about-two__awards wow fadeInUp" data-wow-delay="500ms">
                        <div class="about-two__awards__bg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 134 128">
                                <path d="M41.3822 9.23544C71.4687 -6.84672 108.734 4.59028 124.619 34.801C140.508 65.02 129.004 102.563 98.9119 118.648C83.9233 126.66 63.7648 127.448 45.7028 123.188C27.5873 118.916 12.0817 109.694 6.05221 98.2289C0.0207618 86.7604 1.14682 68.6365 7.80242 51.1134C14.4384 33.6419 26.3954 17.254 41.3822 9.23544Z" />
                            </svg>
                        </div>
                        <div class="about-two__awards-top">
                            <div class="about-two__awards__icon"><img src="assets/images/shapes/experience-icon.svg" alt="" height="48px" width="48px" style="margin-left:20px"></div>
                            <div class="about-two__awards__number">
                                <p class="about-two__awards__title"> +15 Years Experience</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="200ms">
                <div class="about-three__content">
                    <div class="sec-title text-left">

                        <h6 class="sec-title__tagline">About Us</h6>

                        <h3 class="sec-title__title">Welcome to Little Cruisers Daycare,</h3>
                    </div>
                    <p class="about-three__content__text">
                        Where we blend learning with laughter to create memorable experiences for our children and families. Our goal is to cultivate a warm, inviting atmosphere that fosters a deep sense of belonging and provides a secure and stimulating environment for both play and education. We firmly believe that children learn best through play, whether it's energetic and lively or calm and immersive. Our approach focuses on self-directed play, which encourages children to explore their interests and curiosities, leading to natural learning and social development. By prioritizing play that is driven by internal motivation rather than external pressures, we aim to enrich children's early years and equip them with the skills and confidence needed for a successful life journey.
                    </p>

                    <a href="{{route('about-us')}}" class="kidearn-btn">
                        <span>Learn More</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Programs Area -->
<section class="program-three">
    <div class="program-three__top-shape"></div>
    <div class="program-three__top-bg">
        <div class="program-three__top-bg__inner" ></div>
    </div>
    <div class="program-three__shape1 kidearn-splax" data-para-options='{"orientation": "right", "scale": 1.5, "delay": ".4", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
		}'>
        <img src="assets/images/shapes/program-3-shape-1.png" alt="kidearn" />
    </div>
    <div class="program-three__shape2 kidearn-splax" data-para-options='{"orientation": "left", "scale": 1.5, "delay": ".4", "transition": "cubic-bezier(0,0,0,1)", "overflow": true
		}'>
        <img src="assets/images/shapes/program-3-shape-2.png" alt="kidearn" />
    </div>
    <div class="container">
        <div class="sec-title text-center">

            <h6 class="sec-title__tagline">Our Programs</h6>

            <h3 class="sec-title__title">We meet kids at their level<br> regardless of their age</h3>
        <div class="row gutter-y-30">
            <div class="col-xl-3 col-md-6">
                <div class="program-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms' style='--accent-color: #F25334;'>
                    <div class="program-three__item__image">
                        <img src="assets/images/program/infant.webp" alt="Toddler">
                    </div>
                    <div class="program-three__item__content">
                        <div class="program-three__item__icon">
                            <span class="icon-crawling-baby-silhouette"></span>
                        </div>
                        <h3 class="program-three__item__title"><a href="{{route('programs')}}">Infant</a></h3>
                        <div class="program-three__item__age">(12 - 18 months)</div>
                        <p class="program-three__item__text">At Little Cruisers, our Infant Care program is tailored for babies aged 12 to 18 months. Our experienced caregivers provide a secure, loving environment and focus on nurturing early development through gentle interactions and sensory experiences.</p>
                        <a class="program-three__item__rm" href="{{route('programs')}}"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="program-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms' style='--accent-color: #75C137;'>
                    <div class="program-three__item__image">
                        <img src="assets/images/program/toddlers.webp" alt="Preschool">
                    </div>
                    <div class="program-three__item__content">
                        <div class="program-three__item__icon">
                            <span class="icon-playtime"></span>
                        </div>
                        <h3 class="program-three__item__title"><a href="{{route('programs')}}">Toddler</a></h3>
                        <div class="program-three__item__age">(19 - 36 months)</div>
                        <p class="program-three__item__text">Little Cruisers welcomes toddlers aged 19 months to 3 years to embark on an exciting adventure! Our Toddler Care program encourages their natural curiosity and growing independence through age-appropriate activities, guided play, and learning opportunities.</p>
                        <a class="program-three__item__rm" href="{{route('programs')}}"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="program-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms' style='--accent-color: #2390FF;'>
                    <div class="program-three__item__image">
                        <img src="assets/images/program/preschool.webp" alt="Kindergarten">
                    </div>
                    <div class="program-three__item__content">
                        <div class="program-three__item__icon">
                            <span class="icon-fun"></span>
                        </div>
                        <h3 class="program-three__item__title"><a href="{{route('programs')}}">Preschool</a></h3>
                        <div class="program-three__item__age">(3-4 years)</div>
                        <p class="program-three__item__text">Little Cruisers welcomes preschoolers aged 4 to 5 to a world of discovery! Our program sparks young minds with engaging activities and structured learning, preparing them for school while fostering a love for exploration and creativity.</p>
                        <a class="program-three__item__rm" href="{{route('programs')}}"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="program-three__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms' style='--accent-color: #FFAA23;'>
                    <div class="program-three__item__image">
                        <img src="assets/images/program/kindergarten.webp" alt="Flex-care">
                    </div>
                    <div class="program-three__item__content">
                        <div class="program-three__item__icon">
                            <span class="icon-charity"></span>
                        </div>
                        <h3 class="program-three__item__title"><a href="{{route('programs')}}">Kindergarten & OOSC</a></h3>
                        <div class="program-three__item__age">(5+ years)</div>
                        <p class="program-three__item__text">Little Cruisers supports school-age children aged 6+ with our Before & After School Care program, offering a blend of learning and relaxation. We provide engaging activities and a safe, enjoyable space that extends the learning and fun beyond the school day.</p>
                        <a class="program-three__item__rm" href="{{route('programs')}}"><span class="icon-right-arrow"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="program-three__bottom-shape"></div>
</section>

<!-- Our Core Value Area -->
<section class="choose-area pt-100 pb-70">
    <div class="container">
        <div class="sec-title allign-left">
            <h3 class="sec-title__title">Our Core Values</h3>
        </div>

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
                        <img src="assets/images/shapes/about-1-border.webp" alt="kidearn" />
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

<!-- A view to our imaginative world Area -->
<section class="blog-one blog-one--home-three mt-50">
    <div class="blog-one--home-three__top-shape"></div>
    <div class="blog-one--home-three__bg"></div>
    <div class="container">
        <div class="sec-title text-center">
            <h3 class="sec-title__title">A View of Our<br> Imaginative World</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-20">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/services/science-experiments.webp" alt="Science Experiments">
                    </div>
                    <div class="blog-card__content">
                        <h3 class="blog-card__title"><a href="#">Science Experiments</a></h3>
                        <p class="program-three__item__text">Discover science with Little Cruisers! Exciting hands-on experiments that inspire a lifelong love for learning.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-20">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/services/storytelling.webp" alt="10 Easy steps to more learn about play">
                    </div>
                    <div class="blog-card__content">
                        <h3 class="blog-card__title"><a href="#">Storytelling</a></h3>
                        <p class="program-three__item__text">Embark on enchanting adventures through captivating tales, where imagination knows no limits and a world of wonder awaits.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-20">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/services/drama-and-music.webp" alt="10 Easy steps to more learn about play">
                    </div>
                    <div class="blog-card__content">
                        <h3 class="blog-card__title"><a href="#">Drama & Music</a></h3>
                        <p class="program-three__item__text">Spark your child's creativity with dynamic drama and music sessions, nurturing artistic expression and teamwork.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-20">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/services/outside-play.webp" alt="10 Easy steps to more learn about play">
                    </div>
                    <div class="blog-card__content">
                        <h3 class="blog-card__title"><a href="#">Outside Play</a></h3>
                        <p class="program-three__item__text">Encourage active exploration and boundless adventures outdoors with Little Cruisers, where fresh air and fun-filled learning await.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-20">
                <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/services/kids-yoga.webp" alt="10 Easy steps to more learn about play">
                    </div>
                    <div class="blog-card__content">
                        <h3 class="blog-card__title"><a href="#">Yoga</a></h3>
                        <p class="program-three__item__text">Promote physical and mental well-being with calming yoga sessions at Little Cruisers, designed to cultivate balance, strength, and inner peace.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-20">
               <div class="blog-card wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='000ms'>
                    <div class="blog-card__image">
                        <img src="assets/images/services/enriching-experiences.webp" alt="10 Easy steps to more learn about play">
                    </div>
                    <div class="blog-card__content">
                        <h3 class="blog-card__title"><a href="#">Enriching Experiences</a></h3>
                        <p class="program-three__item__text">Enrich your child's journey with unique experiences at Little Cruisers, from live animal encounters to mesmerizing magic shows by special guests.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-one--home-three__bottom-shape"></div>
</section>

<!-- Get in Touch Form Area -->
<section class="contact-three">
    <div class="container">
        @include('get_in_touch_form')
    </div>
</section>


<!-- Gallery Area -->
<section class="gallery-one gallery-one--home-three">
    <div class="container">
        <div class="gallery-one__carousel kidearn-owl__carousel  kidearn-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
			"items": 5,
			"margin": 20,
			"loop": true,
			"smartSpeed": 700,
			"nav": false,
			"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
			"dots": false,
			"autoplay": true,
			"responsive": {
				"0": {
					"items": 1
				},
				"576": {
					"items": 2
				},
				"767": {
					"items": 3
				},
				"992": {
					"items": 4
				},
				"1300": {
					"items": 5
				}
			}
		}'>
            <div class="item">
                <div class="gallery-one__card">
                    <img src="assets/images/gallery/gallery-1-1.jpg" alt="">
                    <div class="gallery-one__card__hover">
                        <a href="assets/images/gallery/gallery-1-1.jpg" class="img-popup">
                            <span class="gallery-one__card__icon"></span>
                        </a>
                    </div><!-- /.gallery-one__card__hover -->
                </div><!-- /.gallery-one__card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="gallery-one__card">
                    <img src="assets/images/gallery/gallery-1-2.jpg" alt="">
                    <div class="gallery-one__card__hover">
                        <a href="assets/images/gallery/gallery-1-2.jpg" class="img-popup">
                            <span class="gallery-one__card__icon"></span>
                        </a>
                    </div><!-- /.gallery-one__card__hover -->
                </div><!-- /.gallery-one__card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="gallery-one__card">
                    <img src="assets/images/gallery/gallery-1-3.jpg" alt="">
                    <div class="gallery-one__card__hover">
                        <a href="assets/images/gallery/gallery-1-3.jpg" class="img-popup">
                            <span class="gallery-one__card__icon"></span>
                        </a>
                    </div><!-- /.gallery-one__card__hover -->
                </div><!-- /.gallery-one__card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="gallery-one__card">
                    <img src="assets/images/gallery/gallery-1-4.jpg" alt="">
                    <div class="gallery-one__card__hover">
                        <a href="assets/images/gallery/gallery-1-4.jpg" class="img-popup">
                            <span class="gallery-one__card__icon"></span>
                        </a>
                    </div><!-- /.gallery-one__card__hover -->
                </div><!-- /.gallery-one__card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="gallery-one__card">
                    <img src="assets/images/gallery/gallery-1-5.jpg" alt="">
                    <div class="gallery-one__card__hover">
                        <a href="assets/images/gallery/gallery-1-5.jpg" class="img-popup">
                            <span class="gallery-one__card__icon"></span>
                        </a>
                    </div><!-- /.gallery-one__card__hover -->
                </div><!-- /.gallery-one__card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="gallery-one__card">
                    <img src="assets/images/gallery/gallery-1-6.jpg" alt="">
                    <div class="gallery-one__card__hover">
                        <a href="assets/images/gallery/gallery-1-6.jpg" class="img-popup">
                            <span class="gallery-one__card__icon"></span>
                        </a>
                    </div><!-- /.gallery-one__card__hover -->
                </div><!-- /.gallery-one__card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="gallery-one__card">
                    <img src="assets/images/gallery/gallery-1-7.jpg" alt="">
                    <div class="gallery-one__card__hover">
                        <a href="assets/images/gallery/gallery-1-7.jpg" class="img-popup">
                            <span class="gallery-one__card__icon"></span>
                        </a>
                    </div><!-- /.gallery-one__card__hover -->
                </div><!-- /.gallery-one__card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="gallery-one__card">
                    <img src="assets/images/gallery/gallery-1-8.jpg" alt="">
                    <div class="gallery-one__card__hover">
                        <a href="assets/images/gallery/gallery-1-8.jpg" class="img-popup">
                            <span class="gallery-one__card__icon"></span>
                        </a>
                    </div><!-- /.gallery-one__card__hover -->
                </div><!-- /.gallery-one__card -->
            </div><!-- /.item -->
            <div class="item">
                <div class="gallery-one__card">
                    <img src="assets/images/gallery/gallery-1-9.jpg" alt="">
                    <div class="gallery-one__card__hover">
                        <a href="assets/images/gallery/gallery-1-9.jpg" class="img-popup">
                            <span class="gallery-one__card__icon"></span>
                        </a>
                    </div><!-- /.gallery-one__card__hover -->
                </div><!-- /.gallery-one__card -->
            </div><!-- /.item -->

        </div><!-- /.gallery-one__carousel -->
    </div><!-- /.container-fluid -->
</section><!-- /.gallery-one -->

<script>
    function get_in_touch_add_a_child() {
        if ($('#get_in_touch_child_2').length === 0) {
            $('#get_in_touch_child_1').after(
                `
                    <div id="get_in_touch_child_2">
                        <div class="inpit-main" style="display: flex; justify-content:space-around; flex-wrap: wrap">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="git_child_two_first_name" style="width: 210px" class="form-control child-name-input" placeholder="Child's First Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="git_child_two_last_name"  class="form-control child-name-input" placeholder="Child's Last Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                             <div class="form-group">
                                <input type="text" id="dob" name="git_child_two_dob" class="form-control" onclick="(this.type='date')"
                                    placeholder="Date of Birth" required>
                            </div>
                        </div>
                        <div class="col-md-6  col-12" id="get-in-touch-child_2">
                            <button type="button" class="default-btn book-a-tour-submite-now-btn mb-3" onclick="remove_get_in_touch_child_2()" style="display:inline;margin:auto;border-radius:10px;width:100%;">Remove Child</button>
                        </div>
                    </div>
                    `
            )
        } else if ($('#get_in_touch_child_2').length > 0 && $('#get_in_touch_child_3').length === 0) {
            $('#get_in_touch_child_2').after(
                `
                    <div id="get_in_touch_child_3">
                        <div class="inpit-main" style="display: flex; justify-content:space-around; flex-wrap: wrap">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="git_child_three_first_name" style="width: 210px" class="form-control child-name-input" placeholder="Child's First Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="git_child_three_last_name"  class="form-control child-name-input" placeholder="Child's Last Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                             <div class="form-group">
                                <input type="text" name="git_child_three_dob" id="dob" class="form-control" onclick="(this.type='date')"
                                    placeholder="Date of Birth" required>
                            </div>
                        </div>
                        <div class="col-md-6  col-12" id="get-in-touch-child_2">
                            <button type="button" class="default-btn book-a-tour-submite-now-btn mb-3" onclick="remove_get_in_touch_child_3()" style="display:inline;margin:auto;border-radius:10px;width:100%;">Remove Child</button>
                        </div>
                    </div>
                    `
            )
            $('#get_in_touch_add_a_child_btn').hide();
        }
    }

    function remove_get_in_touch_child_2() {
        $('#get_in_touch_child_2').remove();
        $('#get_in_touch_add_a_child_btn').show();
    }

    function remove_get_in_touch_child_3() {
        $('#get_in_touch_child_3').remove();
        $('#get_in_touch_add_a_child_btn').show();
    }
</script>

@endsection