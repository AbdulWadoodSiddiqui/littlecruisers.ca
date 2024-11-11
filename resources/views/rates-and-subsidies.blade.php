@section('content')
@extends('main')

<style>
    /* Base styles */
    .section {
        margin-bottom: 30px;
        padding: 20px;
        border-radius: 5px;
        display: flex;
        flex-wrap: wrap;
    }

    .card {
        flex: 1;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
        text-align: center;
        margin: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    /* Responsive styles */
    @media screen and (max-width: 768px) {
       

        .section {
            padding: 10px;
        }

        .card {
            flex: 1;
            margin: 5px 3px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    }

    /* tables responsive */
    @media (max-width:480px) {
        .pricing-table .table thead th {
            border: 1px solid #f0f0f0;
            color: #1b0238;
            font-family: "Roboto", sans-serif;
            font-weight: bold;
            font-size: 11px;
            padding: 16px -4px;
            border-bottom: none;
        }
    }

    @media (max-width:480px) {
        .card {
            padding: 104px;
            border-radius: 5px;
            background-color: #fff;
            text-align: center;
            margin: 10px;
        }
    }
    .fun-facts-area {
    background-image: url({{ asset('assets/images/rate-and-subsidy-bg.webp') }});
    background-position: center center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    position: relative;
    z-index: 1;
    margin-bottom: 84px;
    margin-top: 6px;
}
.fun-facts-area::before {
    position: absolute;
    content: "";
    height: 100%;
    width: 100%;
    background-color: #000000;
    left: 0;
    right: 0;
    top: 0;
    z-index: -1;
    opacity: .50;
}
.in-1 {
    color: white;
}
.single-fun-fact p {
    font-size: 16px;
    font-weight: 500;
    color: #ffffff;
}
.single-fun-fact p {
    font-size: 16px;
    font-weight: 500;
    color: #ffffff;
}

/* Adjusting buttons for mobile view */
/* @media (max-width: 768px) {
    .parents-cal-btn {
        flex: 1;
        margin: 5px;
        text-align: center;
    }

    .parents-cal-btn a {
        display: block;
        padding: 5px 0px;
        font-size: 14px;
    }
} */

/* Adjusting buttons for mobile view */
@media (max-width: 768px) {
    .mb-20.d-flex {
        flex-wrap: wrap; /* Allow wrapping for buttons */
    }

    .parents-cal-btn {
        flex: 1 0 100%; /* Each button takes full width */
        margin: 5px;
        text-align: center;
    }

    .parents-cal-btn a {
        display: block;
        padding: 5px 0px;
        font-size: 14px; /* Adjust font size as needed */
    }
    th, td {
            white-space: nowrap; /* Prevents text from wrapping */
        }
        .table-container {
            overflow-x: auto; /* Enables horizontal scrolling */
        }
}
@media(max-width:424px){
    th, td {
            white-space: nowrap !important; /* Prevents text from wrapping */
        }
        .table-container {
            overflow-x: auto !important; /* Enables horizontal scrolling */
        }
}
       
</style>
<div class="container">
    <div class="row text-center">

    </div>
</div>
<!-- Start Page Banner -->
<section class="fun-facts-area pt-100 pb-70">
    <div class="container">
        <div class="row gutter-y-30">
			<div class="col-lg-3 col-md-6">
				<div class="program-two__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='00ms' style='--accent-color: #F25334;'>
    <div class="program-two__item__bg"></div>
    <div class="program-two__item__icon">
        <span class="icon-crawling-baby-silhouette"></span>
    </div><!-- /.program-two__item__icon -->
    <div class="program-two__item__content">
        <h3 class="program-two__item__title"><a href="#">Infant</a></h3><!-- /.program-two__item__title -->
        <div class="program-two__item__age">(12 - 19 months)</div><!-- /.program-two__item__age -->
        <p class="program-two__item__text">Full time fee: $1350</p><!-- /.program-two__item__text -->
        <!-- <a class="program-two__item__rm" href="programs-d-toddler.html"><span class="icon-right-arrow"></span></a> -->
    </div><!-- /.program-two__item__content -->
</div><!-- /.program-two__item__one -->
			</div><!-- /.program-item -->
			<div class="col-lg-3 col-md-6">
				<div class="program-two__item program-two__item--order wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='100ms' style='--accent-color: #75C137;'>
    <div class="program-two__item__bg"></div>
    <div class="program-two__item__icon">
        <span class="icon-playtime"></span>
    </div><!-- /.program-two__item__icon -->
    <div class="program-two__item__content">
        <h3 class="program-two__item__title"><a href="#">Toddler</a></h3><!-- /.program-two__item__title -->
        <div class="program-two__item__age">(19 m - 3 year)</div><!-- /.program-two__item__age -->
        <p class="program-two__item__text">Full time fee: $1210</p><!-- /.program-two__item__text -->
        <!-- <a class="program-two__item__rm" href="programs-d-preschool.html"><span class="icon-right-arrow"></span></a> -->
    </div><!-- /.program-two__item__content -->
</div><!-- /.program-two__item__one -->
			</div><!-- /.program-item -->
			<div class="col-lg-3 col-md-6">
				<div class="program-two__item wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='200ms' style='--accent-color: #2390FF;'>
    <div class="program-two__item__bg"></div>
    <div class="program-two__item__icon">
        <span class="icon-fun"></span>
    </div><!-- /.program-two__item__icon -->
    <div class="program-two__item__content">
        <h3 class="program-two__item__title"><a href="#">Preschool</a></h3><!-- /.program-two__item__title -->
        <div class="program-two__item__age">(3 - 5 years)</div><!-- /.program-two__item__age -->
        <p class="program-two__item__text">Full time fee: $1140</p><!-- /.program-two__item__text -->
        <!-- <a class="program-two__item__rm" href="programs-d-kindergarten.html"><span class="icon-right-arrow"></span></a> -->
    </div><!-- /.program-two__item__content -->
</div><!-- /.program-two__item__one -->
			</div><!-- /.program-item -->
			<div class="col-lg-3 col-md-6">
				<div class="program-two__item program-two__item--order wow fadeInUp" data-wow-duration='1500ms' data-wow-delay='300ms' style='--accent-color: #FFAA23;'>
    <div class="program-two__item__bg"></div>
    <div class="program-two__item__icon">
        <span class="icon-charity"></span>
    </div><!-- /.program-two__item__icon -->
    <div class="program-two__item__content">
        <h3 class="program-two__item__title"><a href="#">Kindergarten & OOSC</a></h3><!-- /.program-two__item__title -->
        <div class="program-two__item__age">(5 - 6 years)</div><!-- /.program-two__item__age -->
        <p class="program-two__item__text">Full time fee: $1120</p><!-- /.program-two__item__text -->
        <!-- <a class="program-two__item__rm" href="programs-d-flex-care.html"><span class="icon-right-arrow"></span></a> -->
    </div><!-- /.program-two__item__content -->
</div><!-- /.program-two__item__one -->
			</div><!-- /.program-item -->
		</div>
    </div>
</section>
<!-- End Page Banner -->

    <div class="container mb-5 d-flex " style="flex-wrap: wrap;">
        <div class="rates-left col-lg-12 col-sm-12">
            <div class="row">
                <div>
                    <div class="left-description">
                        <p style="color: black;">
                            Child care subsidy is available from the Albertan government for families who make less than
                            $180,000 combined. Please see the pictures on the right for a detailed breakdown to see how much
                            subsidy you qualify for or visit the Alberta government website <a href=" https://www.alberta.ca/child-care-subsidy#subsidy">here</a> for any additional information. Feel free to contact us at
                            any time if you would like more information.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mb-20 d-flex">
                <div class="parents-cal-btn">
                    <a href="https://www.childcaresubsidy.gov.ab.ca/ccs/ccs_public.nsf/Estimator?OpenForm" target="_blank" class="default-btn">
                        <i class="fa fa-calculator" style="margin-right: 5px"></i> Calculate Subsidy
                    </a>
                </div>
                <div class="parents-cal-btn">
                    <a href="https://www.alberta.ca/child-care-subsidy#subsidy" target="_blank" class="default-btn" style="background-color: #75C137;">
                        <i class="fa fa-info" style="margin-right: 5px"></i> Learn More
                    </a>
                </div>
                <div class="parents-cal-btn">
                    <a href="https://applychildcaresubsidy.alberta.ca" target="_blank" class="default-btn" style="background-color: #2390FF;">
                        <i class="fa fa-chevron-right" style="margin-right: 5px"></i> Apply Now
                    </a>
                </div>
            </div>
            
        </div>
                
        <div class="container">
                 <div class="mb-5 mt-5">
                    <h1 class="mb-5" style="text-align:center;">FEE STRUCTURE</h1>
                    <div class="d-flex">
                        <h2>Registration Fee:</h2>
                        <h4 class="mx-3 mt-2" style="font-weight: 200;">$200 (non-refundable)</h4>
                    </div>
                </div>
            <div class="col-lg-12 col-md-12 col-sm-10 col-xs-12">
                    <div class="pricing-table table-responsive table-hight table-striped"> <!-- Wrap the table with .table-responsive -->
                        <table class="table table-bordered" style="text-align: center;">
                            <thead>
                                <tr>
                                    <th colspan="5">DAYCARE</th>
                                </tr>
                                <tr>
                                    <th style="padding-bottom:2%;">Age Group</th>
                                    <th style="padding:2% 1%;">Full Fee & Affordability Grant 5 Days</th>
                                    <th style="padding:2% 1%;">Full Fee & Affordability Grant 4 Days</th>
                                    <th style="padding:2% 1%;">Full Fee & Affordability Grant 3 Days</th> <!-- Corrected header -->
                                    <th style="padding-bottom:2%;">Full time / Part time</th> <!-- Corrected header -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <td>5 Days</td>
                                    <td>4 Days</td>
                                    <td>3 Days</td>
                                    <td>2 Days (2 consecutive days or Monday & Friday)</td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>100+ hours</td>
                                    <td>100 hours</td>
                                    <td>50 – 100 hours</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>12 m – 19 m</th>
                                    <td>$1350 | $883 | $467</td>
                                    <td>$1250 | $883</td>
                                    <td>$1190 | $317.50</td>
                                    <td>$90/d | $660/m</td>
                                </tr>
                                <tr>
                                    <th>19 m – 3 y</th>
                                    <td>$1210 | $709 | $501</td>
                                    <td>$1110 | $709</td>
                                    <td>$1010 | $225</td>
                                    <td>$80/d | $580/m</td>
                                </tr>
                                <tr>
                                    <th>3 y – 4 y</th>
                                    <td>$1140 | $626 | $514</td>
                                    <td>$1040 | $626</td>
                                    <td>$940 | $225</td>
                                    <td>$70/d | $500/m</td> <!-- Added missing <td> for consistency -->
                                </tr>
                                <tr>
                                    <th>4 y – 5 y</th>
                                    <td>$1140 | $626 | $514</td>
                                    <td>$1040 | $626</td>
                                    <td>$940 | $225</td>
                                    <td>$70/d | $500/m</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>

        <div class="container">
            <div class="mb-5 mt-5">
                <h3 class="mb-2">DAYCARE FEE INCLUDES:</h3>
                <p class="ml-3">Morning snack, Lunch and Afternoon snack.</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-10 col-xs-12">
                <div class="pricing-table table-responsive table-hight table-striped">
                    <table class="table table-bordered" style="text-align: center;">
                        <thead>
                            <tr>
                                <th colspan="4">KINDERGARTEN</th>
                            </tr>
                            <tr>
                                <th>Age Group</th>
                                <th>Full Fee</th>
                                <th>Grant</th>
                                <th>Subsidy</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- First data row with 4 columns -->
                            <tr>
                                <td>5 y – 6 y</td>
                                <td>$1120</td>
                                <td>$626</td>
                                <td>Depends on parents' annual income</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        

        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-10 col-xs-12">
                <div class="pricing-table table-responsive table-hight table-striped">
                    
                    <table class="table table-bordered" style="text-align: center;">
                        <thead>
                            <tr>
                                <th colspan="4">BEFORE & AFTER SCHOOL</th>
                            </tr>
                            <tr>
                                <th>Age Group</th>
                                <th>Full Fee</th>
                                <th>Subsidy</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>6 y – 12 y</td>
                                <td>$690</td>
                                <td>Depends on parents’ annual income</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <div class="mb-5 mt-5">
                <h3 class="mb-2">BEFORE & AFTER SCHOOL FEE INCLUDES:</h3>
                <p class="ml-3">
                    <li>Transportation to select schools.</li>
                    <li>Kindergarten & OOSC supplementary programming.</li>
                    <li>Care on all PD days.</li>
                    <li>Summer field trips.</li>
                    <li>Morning Snack, Lunch & Afternoon Snack for Kindergarten.</li>
                    <li>Morning and Afternoon Snack for OOSC.</li>
                </p>
            </div>
        </div>
    </div>
</div>


@endsection