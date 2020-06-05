<?php
namespace App\Http\Controllers; 

use Illuminate\Http\Request;

use App\apprenant;

class ApprenantController extends Controller
{
     function index(){ 
         $apprenant=apprenant::all();

        return view('portrait',['apprenantrep'=>$apprenant]);
    }

    function create(){
        return view('Formulaire');
    }

    function strore(Request $request){
        $apprenant=new apprenant();
        $apprenant->nom=$request->nom;
        $apprenant->prenom=$request->prenom;
        $apprenant->date_de_naissance=$request->date_de_naissance;
        $apprenant->genre=$request->genre;
        $apprenant->nationalité=$request->nationalité;
        $apprenant->formation=$request->formation;
        $apprenant->etablissement=$request->etablissement;
        $apprenant->telephone=$request->telephone;
        $apprenant->promotion=$request->promotion;
        $apprenant->photo=$request->photo;

        // if ($request->hasfile('photo')) {  
        //    $file = $request ->file('photo');
        //    $extension = $file->getOriginalExtension();
        //    $filename = time() .'.' . $extension;
        //    $file->move('style/images/' , $filename);
        //    $apprenant->photo = $filename;

        // } else{
        //     return $request;
        //     $apprenant->photo ='';
        // }
        


        $apprenant->save();
        return redirect('Formulaire');
    }
}

