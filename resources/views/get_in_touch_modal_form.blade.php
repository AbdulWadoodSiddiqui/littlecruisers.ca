<div class="row">
    <div class="col-lg-6">
        <div class="quote-image"></div>
    </div>

    <div class="col-lg-6">
        <div class="quote-item">
            <div class="content">
                <h3>Get in Touch</h3>
            </div>

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