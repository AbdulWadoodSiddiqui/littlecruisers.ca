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
        <h3 class="program-two__item__title"><a href="programs-d-toddler.html">Infant</a></h3><!-- /.program-two__item__title -->
        <div class="program-two__item__age">(12 - 18 months)</div><!-- /.program-two__item__age -->
        <p class="program-two__item__text">Full time fee: $407/m</p><!-- /.program-two__item__text -->
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
        <h3 class="program-two__item__title"><a href="programs-d-preschool.html">Toddler</a></h3><!-- /.program-two__item__title -->
        <div class="program-two__item__age">(19 - 36 months)</div><!-- /.program-two__item__age -->
        <p class="program-two__item__text">Full time fee: $461/m</p><!-- /.program-two__item__text -->
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
        <h3 class="program-two__item__title"><a href="programs-d-kindergarten.html">PreSchool</a></h3><!-- /.program-two__item__title -->
        <div class="program-two__item__age">(3-4 years)</div><!-- /.program-two__item__age -->
        <p class="program-two__item__text">Full time fee: $464/m</p><!-- /.program-two__item__text -->
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
        <h3 class="program-two__item__title"><a href="programs-d-flex-care.html">Kindergarten & OOSC</a></h3><!-- /.program-two__item__title -->
        <div class="program-two__item__age">(5+ years)</div><!-- /.program-two__item__age -->
        <p class="program-two__item__text">Full time fee: $690</p><!-- /.program-two__item__text -->
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
                        subsidy you qualify for or visit the Alberta government website <a href="https://example.com">here</a> for any additional information. Feel free to contact us at
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

    <div class="col-lg-6 col-sm-6">
        <section class="pricing-area">
            <div class="pricing-table table-responsive table-bordered table-striped">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                Income
                            </th>
                            <th>
                                Full-time rate
                            </th>
                            <th>
                                Licensed preschool rate
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <th>0$ to 119,999</th>
                            <td>$266</td>
                            <td>Flat rate of $125/month (all income brackets)</td>
                        </tr>

                        <tr>
                            <th>$120,000 to $ 124,999</th>
                            <td>$253</td>

                        </tr>

                        <tr>
                            <th>$125.000 to $129,000</th>
                            <td>$239</td>

                        </tr>
                        <tr>
                            <th>$130.000 to $134,000</th>
                            <td>$226</td>


                        <tr>
                            <th>$135,000 to $139,999</th>
                            <td>$213</td>

                        </tr>
                        <tr>
                            <th>$140,000 to $144,999</th>
                            <td>$200</td>

                        </tr>
                        <tr>
                            <th>$145,000 to $149,999</th>
                            <td>$186</td>

                        </tr>
                        <tr>
                            <th>$150,000 to $154,999</th>
                            <td>$173</td>

                        <tr>
                            <th>$155,000 to $159,999</th>
                            <td>$160</td>

                        </tr>
                        <tr>
                            <th>$160,000 to $164,999</th>
                            <td>$146</td>

                        </tr>
                        <tr>
                            <th>$165,000 to $169,999</th>
                            <td>$133</td>

                        </tr>
                        <tr>
                            <th>$170,000 to $174,999</th>
                            <td>$120</td>

                        </tr>
                        <tr>
                            <th>$175,000 to $179,999</th>
                            <td>
                                $106
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <div class="col-lg-6 col-sm-6">
        <div class="pricing-table table-responsive  table-hight table-striped">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>
                            Family income
                        </th>
                        <th>
                            Kindergarten facility-besed care(100 hours)
                        </th>
                        <th>
                            Kindergarten Day home and group family care(100 hours)
                        </th>
                        <th>
                            School age:Grades 1-6(50 hours)
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th>$0 to $49,999</th>
                        <td >$644</td>
                        <td>$516</td>
                        <td>$366</td>
                    </tr>
                    <tr>
                        <th>$50,000 to $59,999</th>
                        <td>$612</td>
                        <td>$490</td>
                        <td>$348</td>
                    </tr>
                    <tr>
                        <th>$55,000 to $59,999</th>
                        <td>$547</td>
                        <td>$439</td>
                        <td>$311</td>
                    </tr>
                    <tr>
                        <th>$60,000 to $64,999</th>
                        <td>$483</td>
                        <td>$387</td>
                        <td>$275</td>
                    </tr>
                    <tr>
                        <th>$65,000 to $69,999</th>
                        <td>$419</td>
                        <td>$335</td>
                        <td>$238</td>
                    </tr>
                    <tr>
                        <th>$70,000 to $74,999</th>
                        <td>354</td>
                        <td>$284</td>
                        <td>$201</td>
                    </tr>
                    <tr>
                        <th>$75,000 to $79,999</th>
                        <td>$232</td>
                        <td>$284</td>
                        <td>$165</td>
                    </tr>
                    <tr>
                        <th>$80,000 to $84,999</th>
                        <td>225</td>
                        <td>$181</td>
                        <td>$128</td>
                    </tr>
                    <tr>
                        <th>$85,000 to $89,999</th>
                        <td>$161</td>
                        <td>$129</td>
                        <td>$92</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection