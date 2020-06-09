
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Simplon-Burkina</title>
    </head>
    <body>
        
    
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section id="contact">
    <div id="google-map" style="height:650px" data-latitude="4.688467" data-longitude="-74.051289"></div>
    <div class="container-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <div class="contact-form">
                        <h3>Contact Info</h3>

                        <address>
                          <strong>SIMPLON-BURKINA.</strong><br>
                          Charles Degaul Ave, Suite 600<br>
                          Ouagadougou, CA 94107<br>
                          <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>

                        <form id="main-contact-form" name="contact-form" method="post" action="contact-us.send.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Evoyer Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/#bottom-->
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\simplon\Simplon-Burkina\resources\views/Nous Contacter.blade.php ENDPATH**/ ?>