<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="login.html">
                    <img src="vendors/images/deskapp-logo.svg" alt="">
                </a>
            </div>
            <div class="login-menu">
                <ul>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row align-items-center">
        <div class="col-md-4">
            <img src="vendors/images/banner-img.png" alt="">
        </div>
        <div class="col-md-8">
            <h4 class="font-20 weight-500 mb-10 text-capitalize">
                Welcome to Apex Recruitment Portal <div class="weight-600 font-30 text-blue">Applicant!</div>
            </h4>
            <p class="font-18 max-width-600">Create an account below to begin your application process or login to
                continue
                your application process.</p>
        </div>
    </div>
    <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="vendors/images/register-page-img.png" alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input. <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>

                    @endif
                    <div class="register-box bg-white box-shadow border-radius-10">
                        <div class="wizard-content">
                            <form action="{{ route('applicants.store') }}" method="POST"
                                class="tab-wizard2 wizard-circle wizard">
                                @csrf
                                <h5>Basic Account Credentials</h5>
                                <section>
                                    <div class="form-wrap max-width-600 mx-auto">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Email Address*</label>
                                            <div class="col-sm-8">
                                                <input name="email" type="email" class="form-control">
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Username*</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div> --}}
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Password*</label>
                                            <div class="col-sm-8">
                                                <input name="password" type="password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Confirm Password*</label>
                                            <div class="col-sm-8">
                                                <input name="password2" type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Step 2 -->
                                <h5>Personal Information</h5>
                                <section>
                                    <div class="form-wrap max-width-600 mx-auto">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">First Name*</label>
                                            <div class="col-sm-8">
                                                <input name="first_name" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Last Name*</label>
                                            <div class="col-sm-8">
                                                <input name="last_name" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Phone*</label>
                                            <div class="col-sm-8">
                                                <input name="phone" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-4 col-form-label">Gender*</label>
                                            <div class="col-sm-8">
                                                <div class="custom-control custom-radio custom-control-inline pb-0">
                                                    <input value="Male" type="radio" id="male" name="gender"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="male">Male</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline pb-0">
                                                    <input value="Female" type="radio" id="female" name="gender"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="female">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">City</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">State</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                {{-- <!-- Step 3 -->
                                <h5>Payment Method & Info</h5>
                                <section>
                                    <div class="form-wrap max-width-600 mx-auto">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Credit Card Type</label>
                                            <div class="col-sm-8">
                                                <select class="form-control selectpicker" title="Select Card Type">
                                                    <option value="1">Option 1</option>
                                                    <option value="2">Option 2</option>
                                                    <option value="3">Option 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row align-items-center">
                                            <label class="col-sm-4 col-form-label">Credit Card Number</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">CVC</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label">Expiration Date</label>
                                            <div class="col-sm-8">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <select class="form-control selectpicker" title="Month"
                                                            data-size="5">
                                                            <option value='01'>January</option>
                                                            <option value='02'>February</option>
                                                            <option value='03'>March</option>
                                                            <option value='04'>April</option>
                                                            <option value='05'>May</option>
                                                            <option value='06'>June</option>
                                                            <option value='07'>July</option>
                                                            <option value='08'>August</option>
                                                            <option value='09'>September</option>
                                                            <option value='10'>October</option>
                                                            <option value='11'>November</option>
                                                            <option value='12'>December</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-6">
                                                        <select class="form-control selectpicker" title="Year"
                                                            data-size="5">
                                                            <option>2020</option>
                                                            <option>2019</option>
                                                            <option>2018</option>
                                                            <option>2017</option>
                                                            <option>2016</option>
                                                            <option>2015</option>
                                                            <option>2014</option>
                                                            <option>2013</option>
                                                            <option>2012</option>
                                                            <option>2011</option>
                                                            <option>2010</option>
                                                            <option>2009</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> --}}
                                <!-- Step 4 -->
                                <h5>Overview Information</h5>
                                <section>
                                    <div class="form-wrap max-width-600 mx-auto">
                                        <ul class="register-info">
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4 weight-600">Email Address</div>
                                                    <div id="emailOverview" class="col-sm-8">example@hi2.in</div>
                                                </div>
                                            </li>
                                            {{-- <li>
                                                <div class="row">
                                                    <div class="col-sm-4 weight-600">Username</div>
                                                    <div class="col-sm-8">Example</div>
                                                </div>
                                            </li> --}}
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4 weight-600">Password</div>
                                                    <div id="passwordOverview" class="col-sm-8">.....000</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4 weight-600">Firt Name</div>
                                                    <div id="firstNameOverview" class="col-sm-8">john</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4 weight-600">Last Name</div>
                                                    <div id="lastNameOverview" class="col-sm-8">smith</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4 weight-600">Location</div>
                                                    <div id="locationOverview" class="col-sm-8">123 Example</div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="custom-control custom-checkbox mt-4">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">I have read and
                                                agreed to the terms of services and privacy policy</label>
                                        </div>
                                    </div>
                                </section>

                                <button type="submit" style="display: none"
                                    class="btn btn-outline-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <!-- success Popup html Start -->
    <button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal"
        data-backdrop="static">Launch modal</button>
    <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered max-width-400" role="document">
            <div class="modal-content">
                <div class="modal-body text-center font-18">
                    <h3 class="mb-20">Form Submitted!</h3>
                    <div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="login.html" class="btn btn-primary">Done</a>
                </div>
            </div>
        </div>
    </div>
    <!-- success Popup html End --> --}}
    <!-- js -->
    <script>
        document.getElementById('firstNameOverview').innerHTML =
            document.getElementsByName("first_name").value;
        document.getElementById('lastNameOverview').innerHTML =
            document.getElementsByName("last_name").value;
		document.getElementById('emailOverview').innerHTML = 
                    document.getElementsByName("email").value;
					document.getElementById('passwordOverview').innerHTML = 
                    document.getElementsByName("password").value;
    </script>
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
    <script src="src/plugins/jquery-steps/jquery.steps.js"></script>
    <script src="vendors/scripts/steps-setting.js"></script>
</body>

</html>
