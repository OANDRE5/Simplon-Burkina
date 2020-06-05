
@extends('layouts/layout_test')

@include('layouts/menu')

@foreach($apprenantrep as $apprenant)
           
              
           
       


<h2 class="section-title text-center wow fadeInDown">Liste des Simploniens</h2>
<p class="text-center wow fadeInDown">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,<br>totam rem aperiam, eaque ipsa quae ab illo inventore veritati</p>
</div>

<div class="row">
<div class="col-sm-6 col-md-3">
    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
        <div class="team-img">
            <img class="img-responsive img-circle" src="images/team/01.jpg" alt="">
        </div>
        <div class="team-info">
             {{$apprenant->id}}
            <h3>{{$apprenant->nom}}  {{$apprenant->prenom}}</h3>
            <img src= " {{ asset('style/images/' . $apprenant->photo ) }} " alt="image">  


            <!-- <span>Co-Founder</span> -->
            
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
<!-- <div class="col-sm-6 col-md-3">
    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
        <div class="team-img">
            <img class="img-responsive img-circle" src="images/team/02.jpg" alt="">
        </div>
        <div class="team-info">
        {{$apprenant->id}}
        <h3>{{$apprenant->nom}}</h3>
        <h3>{{$apprenant->prenom}}</h3>

        <span>Co-Founder</span>
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
            <img class="img-responsive img-circle" src="images/team/03.jpg" alt="">
        </div>
        <div class="team-info">
        {{$apprenant->id}}
        <h3>{{$apprenant->nom}}</h3>
        <h3>{{$apprenant->prenom}}</h3>

        <span>Co-Founder</span>
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
            <img class="img-responsive img-circle" src="images/team/04.jpg" alt="">
        </div>
        <div class="team-info">
        {{$apprenant->id}}
        <h3>{{$apprenant->nom}}</h3>
        <h3>{{$apprenant->prenom}}</h3>

        <span>Co-Founder</span>
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

@endforeach -->