
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simplon-Burkina</title>
    </head>
    <body>
        <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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


      <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      
    </body>
   

</html>    

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\simplon\Simplon-Burkina\resources\views/Nos Simplonniens.blade.php ENDPATH**/ ?>