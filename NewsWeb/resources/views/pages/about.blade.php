@extends('layouts.main')
@section('title', 'About Us')
@push('txtcolor')
<style>
    #head{
        color: red;
    }
</style>
@endpush
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- breadcrumb -->
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
                    <!-- End breadcrumb -->

                    <div class="wrap__about-us">
                        <h2>Our Mission</h2>
                        <h4>It is a long established fact that a reader will be distracted</h4>
                        <p>

                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions
                            of
                            Lorem Ipsum.
                        </p>

                        <figure class="float-left mr-3">
                            <img src="images/newsimage1.png" alt="" class="img-fluid">
                        </figure>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since when an unknown printer took a galley of
                            type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                        <p>

                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions
                            of
                            Lorem Ipsum.
                        </p>
                        <div class="clearfix"></div>
                        <h2>Our Valuable Team Members</h2>
                        <!-- team member -->
                        <div class="team-member row">
                            <div class="col-md-4 col-xl-3">
                                <figure class="member"> <img src="images/newsimage2.png" class="img-fluid" alt="Image">
                                    <figcaption>
                                        <h4>Debora Hilton</h4>
                                        <small>Editor</small>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-youtube-play"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-4 col-xl-3">
                                <figure class="member"> <img src="images/newsimage3.png" class="img-fluid" alt="Image">
                                    <figcaption>
                                        <h4>Debora Hilton</h4>
                                        <small>Editor</small>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-youtube-play"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-4 col-xl-3">
                                <figure class="member"> <img src="images/newsimage4.png" class="img-fluid" alt="Image">
                                    <figcaption>
                                        <h4>Debora Hilton</h4>
                                        <small>Publisher</small>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-youtube-play"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-4 col-xl-3">
                                <figure class="member"> <img src="images/newsimage5.png" class="img-fluid" alt="Image">
                                    <figcaption>
                                        <h4>Debora Hilton</h4>
                                        <small>Project Manager</small>
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-youtube-play"
                                                        aria-hidden="true"></i></a>
                                            </li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"
                                                        aria-hidden="true"></i></a></li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>

                    </div>
                </div>


            </div>
        </div>
    </section>


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
@endsection
