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

            <h3 class="sec-title__title">Get In Touch</h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="row">

    <div class="col-lg-12">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        <div class="quote-item">
        <form method="POST" action="{{ route('get_in_touch_email') }}">
                 @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="git_parent_first_name" class="form-control" placeholder="Parent's First Name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="git_parent_last_name" class="form-control" placeholder="Parent's Last Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" name="git_email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="git_number" class="form-control" placeholder="Phone Number" required>
                    </div>
                    <div id="get_in_touch_child_1">
                        <div class="inpit-main" style="display: flex; justify-content:space-around; flex-wrap: wrap">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="git_child_one_first_name" style="width: 210px" class="form-control child-name-input" placeholder="Child's First Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="git_child_one_last_name" style="width: 215px" class="form-control child-name-input" placeholder="Child's Last Name" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" id="dob" name="git_child_one_dob" class="form-control" onclick="(this.type='date')" placeholder="Date of Birth" required>
                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        <button type="button" class="default-btn book-a-tour-submite-now-btn mb-3" id="get_in_touch_add_a_child_btn" onclick="get_in_touch_add_a_child()" style="display:inline;  border-radius:10px;width:210px;background-color:#f69110">Add A Child</button>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Additional Comments</label>
                        <textarea class="form-control" name="git_additional_comments" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="col-12 get-in-touch-submit-button-col">
                        <button id="get-in-touch-submit-button" type="submit" class="default-btn" value="Submit Nested Form 2">
                            Submit Now
                        </button>
                    </div>

                </div>

        </form>
        </div>
    </div>
</div>
</div>
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
<script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script>
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

<script>
    $( '#contact-us-page-form' ).on( 'submit', function(e) {
        e.preventDefault();
        console.log('not submit')
      return;

    });
</script>


@endsection