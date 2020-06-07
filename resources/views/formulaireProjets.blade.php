@extends('layouts/formProjets')


@section('formulaire-projets-realises')


    <div class="mb-3" style="max-width: 100%;">




        <div class="card rounded text-center mb-5 font-weight-bolder shadow">
            <h1 class="card-header">FORMULAIRE D'AJOUT DE PROJET</h1>
        </div>

        <form class="mt-5 mb-5 marges" method="post" action="{{url('enregistrer')}}">
            @csrf
            <div class="form-group row">
                <label for="libelleForm" class="col-sm-4 col-form-label text-dark">Libellé</label>

        <div class="text-center border bolder mt-3">
            <h1>FORMULAIRE D'AJOUT DE PROJET</h1>
        </div>

    <form class="mt-5 marges" method="post" action="{{url('enregistrer')}}">
            @csrf
            <div class="form-group row">
                <label for="libelleForm" class="col-sm-4 col-form-label">Libellé</label>

                <div class="col-sm-8">
                    <input type="text" class="form-control" id="libelleForm" name="libelle">
                </div>
            </div>
            <div class="form-group row">

                <label for="techForm" class="col-sm-4 col-form-label text-dark">Technologies utilisées</label>

                <label for="techForm" class="col-sm-4 col-form-label">Technologies utilisées</label>

                <div class="col-sm-8">
                    <input type="text" class="form-control" id="techForm" name="techno">
                </div>
            </div>
            <div class="form-group row">

                <label for="dureeForm" class="col-sm-4 col-form-label text-dark">Durée du porjet</label><br>

                <label for="dureeForm" class="col-sm-4 col-form-label">Durée du porjet</label><br>

                <div class="col-sm-8">
                    <input type="text" class="form-control" id="dureeForm" name="duree">
                </div>
            </div>
            <div class="form-group row">

                <label for="missionForm" class="col-sm-4 col-form-label text-dark">Mission</label>

                <label for="missionForm" class="col-sm-4 col-form-label">Mission</label>

                <div class="col-sm-8">
                    <textarea type="text" class="form-control" id="missionForm" name="mission"></textarea>
                </div>
            </div>


            <div class="mt-5 center">
                <input type="submit" class="btn btn-primary d-inline" value="Enregistrer">
=======
            <div class="mt-5">
                <input type="submit" class="btn btn-primary" value="Enregistrer">

            </div>
        </form>


    </div>

@endsection