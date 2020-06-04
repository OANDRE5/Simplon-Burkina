@extends('layouts/projetsReal')

@section('projets-realises')

    <div class="card center text-center mb-5 ajuster">
        <h5 class="card-header">LES PROJETS REALISES</h5>
    </div>

    <div class="row row-cols-1 row-cols-md-1 pr-5 pl-5 mx-5">
        @foreach($recuperation as $projet)
            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center font-weight-bolder">
                            <h1 class="card-title"><strong>{{$projet->libelle}}</strong></h1>
                        </div>
                        <div class="text-center text-uppercase">
                            <h3 class="card-title">{{$projet->duree_du_projet}}</h3>
                        </div>
                        <div class="text-center">
                            <p class="card-text">{{$projet->mission}}</p>
                        </div>
                        <div class="text-center">
                            <p class="card-text font-italic">{{$projet->technologies_utilisees}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection