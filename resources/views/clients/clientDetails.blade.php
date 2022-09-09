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
            <h3 class="text text-center text-primary">Attestation d'inscription</h3>

            
            <fieldset>
            <form action="{{ route('client.store') }}" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
                  <img  src="{{ asset('upload/clients/'.$client->photo) }}" alt="No Image" width="30%">
            <table class="table">

                

                <tr>
                    <td>Nom</td>
                    <td><label>{{$client->nom}} </label></td>
                    
                    <td><label>{{$client->اللقب}} </label></td>
                    <td>اللقب</td>
                </tr>
                   <tr>
                    <td>Prénom</td>
                    <td> <label>{{$client->prenom}} </label></td>
                   
                    <td> <label>{{$client->الاسم}} </label></td>
                    <td>الاسم</td>
                </tr>
                   <tr>
                    <td>Wilaya</td>
                    <td> <label>{{$client->wilaya}} </label></td>
                    <td> <label>{{$client->الولاية}} </label></td>
                    <td>الولاية</td>
                </tr>
                    <tr>
                    <td>Date de naissance</td>
                    <td> <label>{{$client->date_naissance}} </label></td>
                    <td>تاريخ الميلاد</td>
                </tr>
       <tr>
                    <td>Commune</td>
                    <td> <label>{{$client->commune}} </label></td>
                    <td> <label>{{$client->البلدية}} </label></td>
                    <td>البلدية</td>
                    
                </tr>
                   <tr>
                    <td>Nationnalité</td>
                    <td> <label>{{$client->nationalite}} </label></td>
                    <td> <label>{{$client->الجنسية}} </label></td>
                    <td>الجنسية</td>
                </tr>
                   <tr>
                    <td>Telephone</td>
                    <td><label>{{$client->Tel}} </label></td>
                </tr>
                 <tr>
                    <td>Email</td>
                    <td><label>{{$client->email}} </label></td>
                </tr>
                     <tr>
                     <td>Horaire choisit</td>
                <td><label>{{$client->horaire_choisi}} </label></td>
                
                <td><label>{{$client->التوقيت_المختار}} </label></td>
                <td id="arab">التوقيت المختار</td>
                </tr>
                <tr>
                    <td>Langue choisit</td>
                    <td><label>{{$client->langue_choisi}} </label></td>
                    <td>اللغة المختارة</td>
                </tr>
                <tr>
                    <td>Qualité du condidat</td>
                    <td><label>{{$client->qualite_condidat}} </label></td>
              
                </tr>
                  @if($client->qualite_condidat=="etudiant")
                 <tr>
                    <td>Faculté</td>
                    <td><label>{{$client->faculte}} </label></td>
              
                </tr>
                 <tr>
                    <td>Département</td>
                    <td><label>{{$client->dpt}} </label></td>
              
                </tr>
               @else
                 <tr>
                    <td>Profession</td>
                    <td><label>{{$client->profession}} </label></td>
                    <td><label>{{$client->المهنة}} </label></td>
                    <td>المهنة</td>
                </tr>
              @endif
            </table>
        </form>
        </fieldset>
        </div>
    </div>
@endsection
