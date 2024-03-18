<div class="row">
            <div class="col-xl-6 col-sm-6 wow fadeInLeft get-in-touch-image" data-wow-delay="300ms">
              <img src="assets/images/get-in-touch/get-in-touch.webp" alt="kidearn" style=""/>
            </div>

    <div class="col-lg-6">
        <div class="quote-item">
            <div class="content">
                <h3>Get in Touch</h3>
            </div>
            <form method="POST">
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
                    <!-- <div id="get_in_touch_child_1"> -->
                    <!-- <div class="inpit-main" style="dispay:flex flex-wrap:wrap;"> -->
                    <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="git_child_one_first_name" class="form-control child-name-input" placeholder="Child's First Name" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="git_child_one_last_name"  class="form-control child-name-input" placeholder="Child's Last Name" required>
                                </div>
                            </div>
                        <!-- </div> -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" id="dob" name="git_child_one_dob" class="form-control" onclick="(this.type='date')" placeholder="Date of Birth" required>
                            </div>
                        </div>
                    <!-- </div> -->
                    <div class="col-12">
                        <button type="button" class="default-btn book-a-tour-submite-now-btn mb-3" id="get_in_touch_add_a_child_btn" onclick="get_in_touch_add_a_child()" style="display:inline;  border-radius:10px;width:210px;background-color:#88c045">Add A Child</button>
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
          <!-- <div class="col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                <div class="sec-title text-left">

                    <h6 class="sec-title__tagline">Contact with Us</h6>

                    <h3 class="sec-title__title">Feel free to write us <br> anytime</h3>
                </div>
                <form class="contact-one__form contact-form-validated form-one" action="https://bracketweb.com/kidearn-html/inc/sendemail.php">
                    <div class="form-one__group">
                        <div class="form-one__control ">
                             <input type="text" name="git_parent_first_name" class="form-control" placeholder="Parent's First Name" required>
                        </div>
                        <div class="form-one__control ">
                             <input type="text" name="git_parent_last_name" class="form-control" placeholder="Parent's Last Name" required>
                        </div>
                        <div class="form-one__control ">
                             <input type="email" name="git_email" class="form-control" placeholder="Email Address" required>
                        </div>
                        <div class="form-one__control ">
                             <input type="tel" name="git_number" class="form-control" placeholder="Phone Number" required>
                        </div>
                        <div class="form-one__control ">
                            <input type="text" name="git_child_one_first_name" class="form-control child-name-input" placeholder="Child's First Name" required>
                        </div>
                        <div class="form-one__control ">
                            <input type="text" name="git_child_one_last_name" class="form-control child-name-input" placeholder="Child's Last Name" required>
                        </div>
                        <div class="form-one__control ">
                            <input type="text" id="dob" name="git_child_one_dob" class="form-control form-one__control--dob" onclick="(this.type='date')" placeholder="Date of Birth" required style="width: 100%;">
                        </div>
                        <div class="form-one__control form-one__control--full">
                            <textarea name="message" placeholder="Additional Comments"></textarea>
                        </div>
                        <div class="form-one__control form-one__control--full">
                            <button type="submit" class="kidearn-btn kidearn-btn--xl"><span>Get In Touch</span></button>
                        </div>
                    </div>
                </form>
            </div> -->
</div>
