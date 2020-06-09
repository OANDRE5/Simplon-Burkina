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

        <section id="testimonial">
          <div class="container">
              <div class="row">
                  <div class="col-sm-8 col-sm-offset-2">
  
                      <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" role="listbox">
                              <div class="item active">
                                  <p><img class="img-circle img-thumbnail" src="../assets/img/simplon1.jpg" alt=""></p>
                                  <h4>Simplon-Burkina</h4>
                                  <small>La Fabrique Numérique</small>
                                  <p>Notre objectif former les jeunes dans le numérique pour une meilleur insertion dans le mode professionel</p>
                              </div>
                              <div class="item">
                                  <p><img class="img-circle img-thumbnail" src="../assets/img/simplon3.jpg" alt=""></p>
                                  <h4>Simplon-Burkina</h4>
                                  <small>La Fabrique Numérique</small>
                                  <p>Notre objectif former les jeunes dans le numérique pour une meilleur insertion dans le mode professionel</p>
                              </div>
                              <div class="item">
                                <p><img class="img-circle img-thumbnail" src="../assets/img/simplon4.jpg" alt=""></p>
                                <h4>Simplon-Burkina</h4>
                                <small>La Fabrique Numérique</small>
                                <p>Notre objectif former les jeunes dans le numérique pour une meilleur insertion dans le mode professionel</p>
                            </div>
                          </div>
  
                          <!-- Controls -->
                          <div class="btns">
                              <a class="btn btn-primary btn-sm" href="carousel-testimonial" role="button" data-slide="prev" >
                                 Voir les Apprenants
                              </a>
                              <a class="btn btn-primary btn-sm" href="/alumnis/liste" role="button" data-slide="next">
                                Voir les Alumnis
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section><!--/#testimonial-->


      @include('partials.footer')

      {{-- <script src="assets/js/nos_simplo/jquery.js"></script>
      <script src="assets/js/nos_simplo/bootstrap.min.js"></script>
      <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
      <script src="assets/js/nos_simplo/owl.carousel.min.js"></script>
      <script src="assets/js/nos_simplo/mousescroll.js"></script>
      <script src="assets/js/nos_simplo/smoothscroll.js"></script>
      <script src="assets/js/nos_simplo/jquery.prettyPhoto.js"></script>
      <script src="assets/js/nos_simplo/jquery.isotope.min.js"></script>
      <script src="assets/js/nos_simplo/jquery.inview.min.js"></script>
      <script src="assets/js/nos_simplo/wow.min.js"></script>
      <script src="assets/js/nos_simplo/main.js"></script> --}}
    </body>
   

</html>    
