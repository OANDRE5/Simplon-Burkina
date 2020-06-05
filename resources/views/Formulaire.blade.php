
@extends('layouts/layout_test')


<header class="d-flex border-dark bg-light pt-3">
          <a href="{{url('formulaire')}}" class="btn btn-success ml-4">Formullaire</a>
          <a href="{{url('portrait')}}" class="btn btn-success ml-4">Portrait</a>
      </header>
      
 <form action="{{url('ajouter')}}" method="post"  enctype="multipart/form data" >
        @csrf
        <input type="text" class="w-50  mt-3 form-control" name="nom" placeholder="nom">
        <input type="text" class="w-50  mt-3 form-control" name="prenom" placeholder="prenom"> <br> <br>
        
        <input type="date"name="date_de_naissance" class="form-control" placeholder="date_de_naissance" required>
        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="genre" required>
                        <option >Genre</option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                        <option value="Autre">Autre</option>
                      </select>
        <input type="text" class="w-50  mt-3 form-control" name="nationalité" placeholder="nationalité">
 <br> <br>
         <input type="text" class="w-50  mt-3 form-control" name="formation" placeholder="formation">
        <input type="text" class="w-50  mt-3 form-control" name="etablissement" placeholder="etablisement"> <br> <br>             
        <input type="text" class="w-50  mt-3 form-control" name="telephone" placeholder="telephone">
        <input type="text" class="w-50  mt-3 form-control" name="promotion" placeholder="promotion"> <br> <br>
        <div class="form-group">
    <input type="file" class="form-control-file"  name="photo" placeholder="photo" id="exampleFormControlFile1">
  </div>
        <button type="submit" class="btn btn-info w-25  mt-3 form-control">Enregistrer</button>
    </form>