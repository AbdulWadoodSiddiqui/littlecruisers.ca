@extends('main')
@section('content')
<!-- Start Page Banner -->
<!-- End Page Banner -->
<section class="quote-area pb-100 pt-100">
    <div class="container">
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
        <div class="row">
            <div class="quote-item">
                <div class="content text-center">
                    <h3>Join Our Team</h3>
                </div>
                <form method="post" action="{{ route('career_email') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="career_first_name" class="form-control" placeholder=" First Name" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="career_last_name" class="form-control" placeholder=" Last Name" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="career_email_address" class="form-control" placeholder="Email Address" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="career_phone_number" class="form-control" placeholder="Phone Number" required>
                    </div>

                    <div class="form-group">
                        <input type="text" name="career_desired_position" class="form-control" placeholder="Desired Position"required>
                    </div>
                    <div class="mb-4">
                        <label for="file" class="form-label label-1">Attach resume</label>
                        <input type="file" name="career_attach_resume" class="form-control" placeholder="Attach resume" required>
                    </div>
                    <div class="mb-4">
                        <label for="file" class="form-label label-1">Attach cover letter (optional)</label>
                        <input type="file" name="career_cover_letter" class="form-control" placeholder="Attach resume">
                    </div>
                    <div class="form-group">
                        <input type="text" name="career_addition_comments" class="form-control" placeholder="Additional Comments" required>
                    </div>
                    <button type="submit" class="default-btn">
                        Submit Now
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
