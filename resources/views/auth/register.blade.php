<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Register E-EKP</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="{{ asset('backend/assets/img/favicon.png" rel="icon') }}">
<link href="{{ asset('backend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('backend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ asset('backend/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
<link href="{{ asset('backend/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
<link href="{{ asset('backend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
<link href="{{ asset('backend/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">

<!-- =======================================================
* Template Name: NiceAdmin
* Updated: Sep 18 2023 with Bootstrap v5.3.2
* Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>

<main>
    <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-3">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="{{ asset('frontend/images/logo-pn.png') }}" alt="">
                <span class="d-none d-lg-block">E-EKP</span>
                </a>
            </div><!-- End Logo -->

            <div class="d-flex justify-content-center">
                <a class="logo d-flex align-items-center w-auto">
                    <span class="d-none d-lg-block">EVALUASI KINERJA PEGAWAI</span>
                </a>
            </div><!-- End Logo -->

            <div class="d-flex justify-content-center py-1">
                <a class="logo d-flex align-items-center w-auto">
                    <p class="d-none d-lg-block">Pengadilan Negeri Banyuwangi</p>
                </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

                <div class="card-body">

                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                        <p class="text-center small">Enter your personal details to create account</p>
                    </div>

                    <form method="POST" action="{{ route('register') }}" class="row g-3 needs-validation" novalidate>
                        @csrf
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Your Name') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Your Email Address') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                <div class="invalid-feedback">You must agree before submitting.</div>
                            </div>
                        </div>

                        <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Create Account') }}
                                </button>
                        </div>
                        
                        <div class="col-12">
                        <p class="small mb-0">Already have an account? <a href="login">Log in</a></p>
                        </div>
                    </form>

                    </div>
                </div>
            
            </div>
        </div>
        </div>

    </section>

    </div>
</main><!-- End #main -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('backend/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('backend/assets/js/main.js') }}"></script>

</body>

</html>