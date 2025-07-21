@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')
    <!-- Breadcrumb  -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Breadcrumb -->
                    <ul class="breadcrumbs bg-light mb-4">
                        <li class="breadcrumbs__item">
                            <a href="index.html" class="breadcrumbs__url">
                                <i class="fa fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="index.html" class="breadcrumbs__url">News</a>
                        </li>
                        <li class="breadcrumbs__item breadcrumbs__item--current">
                            World
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb  -->


    <!-- Form contact -->
    <section class="wrap__contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h5>contact us</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Your name <span class="required"></span></label>
                                <input type="text" class="form-control" name="name" required="">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Your email <span class="required"></span></label>
                                <input type="email" class="form-control" name="email" required="">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>website <span class="required"></span></label>
                                <input type="text" class="form-control" name="website" required="">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Subject <span class="required"></span></label>
                                <input type="text" class="form-control" name="subject" required="">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Your message </label>
                                <textarea class="form-control" rows="8" name="message"></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <h5>Info location</h5>
                    <div class="wrap__contact-form-office">
                        <ul class="list-unstyled">
                            <li>
                                <span>
                                    <i class="fa fa-home"></i>
                                </span>

                                PO Box 16122 Collins Street West Victoria
                                8007 Australia


                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-phone"></i>
                                    <a href="tel:">(+12) 34567 890 123</a>
                                </span>

                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-envelope"></i>
                                    <a href="mailto:">mail@example.com</a>
                                </span>

                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-globe"></i>
                                    <a href="#" target="_blank"> www.yourdomain.com</a>
                                </span>
                            </li>
                        </ul>

                        <div class="social__media">
                            <h5>find us</h5>
                            <ul class="list-inline">

                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social rounded text-white facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social rounded text-white twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social rounded text-white whatsapp">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social rounded text-white telegram">
                                        <i class="fa fa-telegram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-social rounded text-white linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Form contact  -->


    <section class="wrapper__section p-0">
        <div class="wrapper__section__components">
            <!-- Footer -->
            <footer>
                <div class="wrapper__footer bg__footer-dark pb-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="widget__footer">
                                    <figure class="image-logo">
                                        <img src="images/logo2.png" alt="" class="logo-footer">
                                    </figure>

                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius magnam harum iure
                                        officia laudantium impedit voluptatem.</p>


                                    <div class="social__media mt-4">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white facebook">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white twitter">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white whatsapp">
                                                    <i class="fa fa-whatsapp"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white telegram">
                                                    <i class="fa fa-telegram"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-social rounded text-white linkedin">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget__footer">
                                    <div class="dropdown-footer">
                                        <h4 class="footer-title">
                                            entertainment
                                            <span class="fa fa-angle-down"></span>
                                        </h4>

                                    </div>

                                    <ul class="list-unstyled option-content is-hidden">
                                        <li>
                                            <a href="#">celebity news</a>
                                        </li>
                                        <li>
                                            <a href="#">movies</a>
                                        </li>
                                        <li>
                                            <a href="#">tv news</a>
                                        </li>
                                        <li>
                                            <a href="#">music news</a>
                                        </li>
                                        <li>
                                            <a href="#">life style</a>
                                        </li>
                                        <li>
                                            <a href="#">entertainment video</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget__footer">
                                    <div class="dropdown-footer">
                                        <h4 class="footer-title">
                                            health
                                            <span class="fa fa-angle-down"></span>
                                        </h4>

                                    </div>
                                    <ul class="list-unstyled option-content is-hidden">
                                        <li>
                                            <a href="#">medical research</a>
                                        </li>
                                        <li>
                                            <a href="#">healthy living</a>
                                        </li>
                                        <li>
                                            <a href="#">mental health</a>
                                        </li>
                                        <li>
                                            <a href="#">virus corona</a>
                                        </li>
                                        <li>
                                            <a href="#">children's health</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="widget__footer">
                                    <div class="dropdown-footer">
                                        <h4 class="footer-title">
                                            business
                                            <span class="fa fa-angle-down"></span>
                                        </h4>

                                    </div>

                                    <ul class="list-unstyled option-content is-hidden">
                                        <li>
                                            <a href="#">merkets</a>
                                        </li>
                                        <li>
                                            <a href="#">technology</a>
                                        </li>
                                        <li>
                                            <a href="#">features</a>
                                        </li>
                                        <li>
                                            <a href="#">property</a>
                                        </li>
                                        <li>
                                            <a href="#">business leaders</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer bottom -->
                <div class="wrapper__footer-bottom bg__footer-dark">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="border-top-1 bg__footer-bottom-section">
                                    <p class="text-white text-center">
                                        Copyright © 2023 Top News Theme by WebSolutionUS</p>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </footer>
        </div>
    </section>

    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

    <script type="text/javascript" src="{{ asset('js/index.bundle.js') }}"></script>
@endsection

