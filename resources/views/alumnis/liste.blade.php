@extends('layouts.app')
    
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simplon-Burkina</title>
    </head>
    <body>
        @include('partials.header')

        <section id="meet-team">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title text-center wow fadeInDown">LES ALUMNIS</h2>
                  
                </div>
    
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                            <div class="team-img">
                                <img class="img-responsive img-circle" src="../assets/img/photo2.jpg" alt="">
                            </div>
                            <div class="team-info">
                                <h3>@foreach ($alumnis as $alumni)
                                    <li>{{$alumni->nom}} {{$alumni->prenom}}</li>
                                        
                                   </h3>
                                <span>{{$alumni->formation}}</span>
                                @endforeach
                            </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                            <div class="team-img">
                                <img class="img-responsive img-circle" src="../assets/img/photo2.jpg" alt="">
                            </div>
                            <div class="team-info">
                                <h3>Leny Fuston</h3>
                                <span>Accounter</span>
                            </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                            <div class="team-img">
                                <img class="img-responsive img-circle" src="../assets/img/photo2.jpg" alt="">
                            </div>
                            <div class="team-info">
                                <h3>Sander Bell</h3>
                                <span>Designer</span>
                            </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                            <div class="team-img">
                                <img class="img-responsive img-circle" src="../assets/img/photo2.jpg" alt="">
                            </div>
                            <div class="team-info">
                                <h3>Nartleb August</h3>
                                <span>Director</span>
                            </div>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> 


                @include('partials.footer')

                <script src="assets/js/nos_simplo/jquery.js"></script>
                <script src="assets/js/nos_simplo/bootstrap.min.js"></script>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
                <script src="assets/js/nos_simplo/owl.carousel.min.js"></script>
                <script src="assets/js/nos_simplo/mousescroll.js"></script>
                <script src="assets/js/nos_simplo/smoothscroll.js"></script>
                <script src="assets/js/nos_simplo/jquery.prettyPhoto.js"></script>
                <script src="assets/js/nos_simplo/jquery.isotope.min.js"></script>
                <script src="assets/js/nos_simplo/jquery.inview.min.js"></script>
                <script src="assets/js/nos_simplo/wow.min.js"></script>
                <script src="assets/js/nos_simplo/main.js"></script>   

    </body>

</html>


