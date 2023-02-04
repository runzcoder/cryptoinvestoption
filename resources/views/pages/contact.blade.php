@extends("layouts.app")

@section("content")



<!-- Hero Start -->
<section class="bg-half bg-dark d-table w-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="text-center col-lg-12">
                <div class="page-next-level">
                    <h4 class="title">Contact Us</h4>
                    <div class="page-next">
                        <nav aria-label="breadcrumb" class="d-inline-block">
                            {{-- <ul class="mb-0 bg-white rounded shadow breadcrumb">
                                <i class="bi bi-chevron-right">
                                    <a href="/">{{env("APP_NAME")}}</a>
                                </li>

                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                            </ul> --}}
                        </nav>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!--end section-->
<!-- Hero End -->

<!-- Shape Start -->
<div class="position-relative">
    <div class="overflow-hidden text-white shape">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!--Shape End-->

<!-- Start Contact -->
<section class="pb-4 section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center border-0 card features feature-clean">
                    <div class="mx-auto text-center icons text-primary">
                        <i class="mb-0 rounded uil uil-phone d-block h3"></i>
                    </div>
                    <div class="mt-3 content">
                        <h5 class="font-weight-bold">Phone Number</h5>

                        <a href="tel:{{env("APP_PHONE")}}"
                            class="text-primary">{{env("APP_PHONE")}}</a>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="pt-2 mt-4 col-md-4 mt-sm-0 pt-sm-0">
                <div class="text-center border-0 card features feature-clean">
                    <div class="mx-auto text-center icons text-primary">
                        <i class="mb-0 rounded uil uil-envelope d-block h3"></i>
                    </div>
                    <div class="mt-3 content">
                        <h5 class="font-weight-bold">Email</h5>

                        <a href="mailto:{{env("MAIL_SUPPORT")}}"
                            class="text-primary">{{env("MAIL_SUPPORT")}}</a>
                    </div>
                </div>
            </div>
            <!--end col-->

            <div class="pt-2 mt-4 col-md-4 mt-sm-0 pt-sm-0">
                <div class="text-center border-0 card features feature-clean">
                    <div class="mx-auto text-center icons text-primary">
                        <i class="mb-0 rounded uil uil-map-marker d-block h3"></i>
                    </div>
                    <div class="mt-3 content">
                        <h5 class="font-weight-bold">Address</h5>
                        <p class="text-muted">Watchmoor Park, Building Eight, Camberley GU15 3YL, United Kingdom</p>

                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
    </div>
    <!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div>
</div>                    <div>
</div>                </div>
            <div class="pt-2 col-lg-12 col-md-6 pt-sm-0">
                <div class="border-0 rounded shadow card">
                    <div class="py-5 card-body">
                        <h4 class="card-title">Get in Touch !</h4>
                        <div class="mt-4 custom-form">
                            <div id="message"></div>
                            <form method="post" action="#">
                                <input type="hidden" name="_token" value="xrKKv7ySQdREfCPO02M9DPCxLoFfldu7Vkti4gVB">                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Your Name <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>

                                                <input name="name" id="name" type="text" class="pl-5 form-control" placeholder="Full Name :">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Your Email <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                
                                                <input name="email" id="email" type="email"
                                                    class="pl-5 form-control" placeholder="Your email">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <div class="position-relative">
                                                <i data-feather="book" class="fea icon-sm icons"></i>
                                                <input name="subject" id="subject" type="text"
                                                    class="pl-5 form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Comments</label>
                                            <div class="position-relative">
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea id="comments" rows="4"
                                                    class="pl-5 form-control" name="message"
                                                    placeholder="Your Message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="text-center col-sm-12">
                                        <input type="submit" id="submit" name="send"
                                            class="submitBnt btn btn-primary btn-block" value="Send Message">
                                        <div id="simple-msg"></div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                            <!--end form-->
                        </div>
                        <!--end custom-form-->
                    </div>
                </div>
            </div>
            <!--end col-->


            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->


    <!--end container-->
</section>
<!--end section-->
<!-- End contact -->



@endsection