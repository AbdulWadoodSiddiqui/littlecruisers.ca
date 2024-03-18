@extends('main')
@section('content')

<style>
    /* Styles for the Parent Handbook section */
    .parent-handbook {
        background-color: #f5f5f5;
        padding: 50px 0 70px;
        text-align: center;
    }

    .handbook-button {
        background-color: #2e4a62;
        color: white;
        font-size: 18px;
        padding: 15px 30px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .handbook-button:hover {
        background-color: #1a2f3f;
    }



    @media only screen and (max-width: 767px) {
        .faq-image {
            width: 100%;
        }

        .pdf-download-btn {
            width: 280px;
            display: block;
            margin: auto;
        }

    }
    @media only screen and (min-width: 768px) and (max-width: 4000px) {
    .faq-image {
        width: 100%; /* For screens larger than 767px but smaller than 2000px, set width to 50% */
        height:100%
    }
}


    .download-button {
        background-color: #2e4a62;
        color: white;
        font-size: 18px;
        padding: 15px 30px;
        /* Increased padding for the button */
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .download-button:hover {
        background-color: #1a2f3f;
    }

    @media (min-width:768px) {
        .button-space {
            margin-left: 18px;
        }
    }

    /* Make the button responsive */
    @media screen and (max-width: 600px) {
        .download-button {
            font-size: 16px;
            padding: 15px 30px;
        }
    }

    @media screen and (max-width: 767px) {
        .button-space {
            display: block;
            margin-top: 20px;

        }
    }
</style>

<!-- start html Page -->
<section class="faq-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2 style="font-weight:bold;">Things You Might Want to Know</h2>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-image"></div>
            </div>
            <div class="col-lg-6">
                <div class="faq-accordion">
                    <ul class="accordion">
                        <li class="accordion-item">
                            <a class="accordion-title active" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                a. What are your operational hours?
                            </a>

                            <p class="accordion-content show" style="margin-left:15px; color:#7e8185;">
                                Our daycare operates from 6:30am to 6pm , Monday to Friday.
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                b. Do you operate throughout the year?
                            </a>

                            <p class="accordion-content" style="margin-left:15px; color:#7e8185;">
                                Yes, we are open the whole year through excluding weekends and statutory holidays.
                            </p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                c. What are your fees?
                            </a>

                            <p class="accordion-content" style="margin-left:15px; color:#7e8185;">
                                For detailed fee information, please visit our Rates & Subsidy page.
                            </p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                d. Do you accept subsidy?
                            </a>

                            <p class="accordion-content" style="margin-left:15px; color:#7e8185;">
                                Yes, we accept subsidy. For detailed fee information, please visit our Rates &
                                Subsidy page.
                            </p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                e. Do you offer options for part-time or half-day care?
                            </a>

                            <p class="accordion-content" style="margin-left:15px; color:#7e8185;">
                                Yes, we offer flexible enrolment options to accommodate your specific needs,
                                including part-time care.
                            </p>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                f. Are meals included in your center?
                            </a>

                            <p class="accordion-content" style="margin-left:15px; color:#7e8185;">
                                Nutritious meals are provided at our daycare center to ensure your child receives
                                balanced and healthy nourishment according to the Canada food guide. Our menu
                                accommodates halal, vegetarian, and any dietary restrictions.
                            </p>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                g. Is your facility free from nut products?
                            </a>

                            <p class="accordion-content" style="margin-left:15px; color:#7e8185;">
                                Yes, our facility is nut-free to create a safe environment for all children.
                            </p>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                h. Can you cater to my child's specific allergies?
                            </a>

                            <p class="accordion-content" style="margin-left:15px; color:#7e8185;">
                                Absolutely, we take allergies seriously. Please inform us of any allergies during the
                                enrollment process, and we'll take the necessary steps to ensure your child's
                                safety and well-being.
                            </p>
                        </li>
                        <!-- <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                i. Are your staff members certified and have they undergone thorough background
                                checks for working with children?
                            </a>

                            <p class="accordion-content">
                                Our staff are certified in working with children and have undergone thorough
                                background checks to ensure your child is in safe hands.
                            </p>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                j. Are all your staff members trained and certified in CPR and First Aid?
                            </a>

                            <p class="accordion-content">
                                Yes, all our staff members are certified in CPR and First Aid, ensuring they are
                                well-prepared for any situation.
                            </p>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- bdf food menu -->
<!-- Add jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Your script -->
<script>
    $(document).ready(function(){
        // Hide all accordion content panels initially
        $('.accordion-content').hide();

        $('.accordion-title').on('click', function(){
            // Toggle active class
            $(this).toggleClass('active');
            
            // Expand or collapse the panel
            $(this).next().slideToggle('fast');
            
            // Hide other panels
            $('.accordion-content').not($(this).next()).slideUp('fast');
            
            // Remove active class from other titles
            $('.accordion-title').not($(this)).removeClass('active');      
        });
    });
</script>



@endsection