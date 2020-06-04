@extends('layouts/projetsReal')

@section('projets-realises')

    <div class="card center text-center mb-5 ajuster">
        <h5 class="card-header">BIENVENUE AUX EVENEMENTS DE OUAGADOUGOU</h5>
    </div>

    <div class="row row-cols-2 row-cols-md-1 pr-5 pl-5">
        @foreach($projetRecuperation as $recup)
            <div class="col mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center font-weight-bolder">
                        <h1 class="card-title"><strong>{{$recup->libelle}}</strong></h1>
                        </div>
                        <div class="text-center text-uppercase">
                            <h3 class="card-title">{{$recup->duree_du_projet}}</h3>
                        </div>
                        <div class="text-center">
                            <p class="card-text">{{$recup->mission}}</p>
                        </div>
                        <div class="text-center">
                            <p class="card-text font-italic">{{$recup->technologies_utilisees}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection