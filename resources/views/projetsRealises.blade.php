@extends('layouts/projetsReal')

@section('projets-realises')

    <div class="card rounded text-center mb-5 font-weight-bolder shadow">
        <h1 class="card-header">LES PROJETS REALISES</h1>
    </div>

    <div class="col row-cols-1 row-cols-md-2 pr-5 pl-5 mb-5">
        @foreach($recuperation as $projet)
            <div class="col mb-4">
                <div class="">
                    <div class="card-body bg-light bordure shadow">
                        <div class="text-center font-weight-bolder">
                            <h3 class="card-title"><strong>{{$projet->libelle}}</strong></h3>
                        </div>
                        <div class="text-center">
                            <h5 class="card-text">{{$projet->technologies_utilisees}}</h5>
                        </div>
                        <div class="text-center">
                            <p class="card-text justify-text text-dark">{{$projet->mission}}</p>
                        </div>
                        <div class="text-center">
                            <p class="card-text text-dark font-italic">{{$projet->duree_du_projet}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection