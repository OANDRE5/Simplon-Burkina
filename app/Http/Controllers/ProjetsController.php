<?php

namespace App\Http\Controllers;

use App\Projet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjetsController extends Controller
{
    function addProject() {
        return view('formulaireProjets');
    }

    function displayProject() {
        $leProjet = Projet::all();
        return view('projetsRealises', ['$projetRecuperation'=>'$leProjet']);
    }

    function saveIntoDB(Request $request) {
        $projet = new Projet();
        $projet->libelle=$request->libelle;
        $projet->technologies_utilisees=$request->techno;
        $projet->duree_du_projet=$request->duree;
        $projet->mission=$request->mission;
        $projet->save();
        return redirect('formulaire-projet');
    }
}
