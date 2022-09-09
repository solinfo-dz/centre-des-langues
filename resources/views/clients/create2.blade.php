@extends('masteradmin')

@section('title')
    Inscription
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style>
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <h3 class="text text-center text-primary">Formulaire d'inscription</h3>
            <form action="{{ route('client.store') }}" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
            <table class="table">

                <tr>
                    <td>Nom</td>
                    <td><input type="text" name="nom" class="form-control"></td>
                </tr>
                   <tr>
                    <td>Prénom</td>
                    <td><input type="text" name="prenom" class="form-control"></td>
                </tr>
                   <tr>
                    <td>Wilaya</td>
                    <td><input type="text" name="wilaya" class="form-control"></td>
                </tr>
                    <tr>
                    <td>Date de naissance</td>
                    <td><input type="date" name="date_naissance" class="form-control"></td>
                </tr>
       <tr>
                    <td>Commune</td>
                    <td><input type="text" name="commune" class="form-control"></td>
                </tr>
                   <tr>
                    <td>Nationnalité</td>
                    <td><input type="text" name="nationalite" class="form-control"></td>
                </tr>
                   <tr>
                    <td>Telephone</td>
                    <td><input type="text" value="000-00-00-00"name="Tel" class="form-control"></td>
                </tr>
                 <tr>
                    <td>Email</td>
                    <td><input type="email" value="{{Auth::user()->email}}"name="email" class="form-control"></td>
                </tr>
                     <tr>
                    <td>Horaire choisit</td>
                    <td><input type="text" value=""name="horaire_choisi" class="form-control"></td>
                </tr>
                <tr>
                    <td>Photo</td>
                    <td><input type="file" name="photo" class="form-control"></td>
                </tr>
                <tr>
                    <td>Qualité du condidat</td>
                    <td>
                        <select name="qualite_condidat" id="" class="form-control">
                            <option value="etudiant">Etudiant</option>
                            <option value="employe">Employé</option>
                        </select>
                    </td>
                </tr>
                   <tr>
                    <td>
                      <div class="form-group">
                            <label> Faculte </label>
                            <select class="form-control" name="faculte" id="faculte">
                                <option value="" selected disabled> Select </option>
                                @forelse ($facultes as $faculte)
                                    <option value="{{ $faculte->id }}">{{ $faculte->name }} </option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                      </td>
                      <td>
                        <div class="form-group">
                            <label> Département </label>
                            <select class="form-control" name="dpt" id="dpt">
                                <option> Select </option>
                            </select>
                        </div>
                    </td>
                </tr>
 
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="Enregistrer ma condidature" name="saveCourse" class="btn btn-block btn-primary"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
   
@endsection