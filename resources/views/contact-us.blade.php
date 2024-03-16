@section('content')
@extends('main')

<section class="page-header">
    <div class="page-header__bg"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <h2 class="page-header__title">Contact Us</h2>
        <ul class="kidearn-breadcrumb list-unstyled">
            <li><a href="/">Home</a></li>
            <li><span>Contact Us</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="contact-one">
    <div class="container">
        <div class="sec-title text-center">

            <h6 class="sec-title__tagline">Contact us</h6><!-- /.sec-title__tagline -->

            <h3 class="sec-title__title">Feel free to write us <br> anytime</h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <form class="contact-one__form contact-form-validated form-one" action="">
            <div class="form-one__group">
                <div class="form-one__control ">
                    <input type="text" name="name" placeholder="Your name">
                </div><!-- /.form-one__control  -->
                <div class="form-one__control ">
                    <input type="email" name="email" placeholder="Email address">
                </div><!-- /.form-one__control  -->
                <div class="form-one__control ">
                    <input type="text" name="phone" placeholder="Your phone">
                </div><!-- /.form-one__control  -->
                <div class="form-one__control ">
                    <div class="form-one__control__select">
                        <label class="sr-only" for="language-select">Select programs</label>
                        <!-- /#language-select.sr-only -->
                        <select class="selectpicker" id="language-select">
                            <option value="Select programs">Select programs</option>
                            <option value="Select programs 01">Select programs 01</option>
                            <option value="Select programs 02">Select programs 02</option>
                        </select>
                    </div><!-- /.main-menu__language -->

                </div><!-- /.form-one__control  -->
                <div class="form-one__control form-one__control--full">
                    <textarea name="message" placeholder="Write  a message"></textarea><!-- /# -->
                </div><!-- /.form-one__control -->
                <div class="form-one__control form-one__control--full text-center">
                    <button type="submit" class="kidearn-btn kidearn-btn--xl"><span>Send a Message</span></button>
                </div><!-- /.form-one__control -->
            </div><!-- /.form-one__group -->
        </form>
    </div><!-- /.container -->
</section><!-- /.contact-one -->

<section class="contact-info-one">
    <div class="container">
        <div class="contact-info-one__inner">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="contact-info-one__item">
                        <i class="icon-telephone contact-info-one__icon"></i>
                        <p class="contact-info-one__text">Have any question?</p>
                        <h3 class="contact-info-one__title">
                            <a href="tel: +15872543747">+1 587-254-3747</a>
                        </h3><!-- /.contact-info-one__title -->
                    </div><!-- /.contact-info-one__item -->
                </div><!-- /.col-md-12 -->
                <div class="col-md-12 col-lg-4">
                    <div class="contact-info-one__item" style="--accent-color: #2390FF;">
                        <i class="icon-email contact-info-one__icon"></i>
                        <p class="contact-info-one__text">Send Email</p>
                        <h3 class="contact-info-one__title">
                            <a href="mailto: info@littlecruisers.ca">info@littlecruisers.ca</a>
                        </h3><!-- /.contact-info-one__title -->
                    </div><!-- /.contact-info-one__item -->
                </div><!-- /.col-md-12 -->
                <div class="col-md-12 col-lg-4">
                    <div class="contact-info-one__item" style="--accent-color: #75C137; padding-bottom:35px">
                        <i class="icon-location-fill contact-info-one__icon"></i>
                        <p class="contact-info-one__text">Visit Anytime</p>
                        <h3 class="contact-info-one__title">
                            <a href="#">405 121 Main Street Airdrie AB <br>T4B0P8</a>
                        </h3><!-- /.contact-info-one__title -->
                    </div><!-- /.contact-info-one__item -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.contact-info-one__inner -->
    </div><!-- /.container -->
</section><!-- /.contact-info-one -->

<section class="contact-map">
    <div class="container-fluid">
        <div class="google-map google-map__contact">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2495.1118705593785!2d-114.01703582415985!3d51.29066532651432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53715f6ef64fb941%3A0x6432efa1d11e3186!2s121%20Main%20St%20S%20Unit%20405%2C%20Airdrie%2C%20AB%20T4B%200P8%2C%20Canada!5e0!3m2!1sen!2s!4v1709142493454!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- /.google-map -->
    </div><!-- /.container-fluid -->
</section><!-- /.contact-map -->



@endsection