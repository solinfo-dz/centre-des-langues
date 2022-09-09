<!DOCTYPE html>
<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <title>Attestation d'inscription</title>
   <style>


td{
    padding: 4px !important;
}
body
{
    font-family: Verdana, Tahoma, "DejaVu Sans", sans-serif;
    
}
#arab{
  font-family: DejaVu Sans, sans-serif;
}
.container
{
    display:flex;
    flex-dirextion:column;
}
.haut
{
    background: url('{{public_path('images/separateur.png')}}')
     repeat-x bottom ;
   display:flex;
   flex-direction:column;
  
     min-height:150px;
}
.bas
{
    background: url('{{public_path('images/separateur.png')}}')
     repeat-x top ;
     
     min-height:250px;
    
   
}

</style>

</head>
 <div class="conatiner">
        <div class="haut">
                <img  src="{{ public_path('images/entete_pdf.png') }}" alt="No entete" 
                width="100%">
                    
                <table class="bas" >
            <tr>
                <td rowspan="2" width="15%"><p>Quittance: {{$client->quittance}}</p> </td>
                <td colspan="6" rowspan="2" width="50%"> <img src="{{public_path('images/titre_pdf.png')}}"
                            alt="no titre" width="80%"></td>
                <td rowspan="2" width="15%"><img  src="{{ public_path('upload/clients/'.$client->photo) }}"
                             alt="No Image profile" width="70%"></td>
            </tr>
          </table>
                
           
         </div>

        <div class="col-md-6 offset-md-3">
            <!--h3 class="text text-center text-primary">Attestation d'inscription</h3-->
           
            <fieldset>
            <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
        <table class="table">


            <tr>
                <td>Nom</td>
                <td><label>{{$client->nom}} </label></td>
                
                <td id="arab"><label>{{$client->اللقب}} </label></td>
                <td id="arab">اللقب</td>
            </tr>
            <tr>
                <td>Prenom</td>
                <td> <label>{{$client->prenom}} </label></td>
            
                <td id="arab"> <label>{{$client->الاسم}} </label></td>
                <td id="arab">الاسم</td>
            </tr>
            <tr>
                <td>Wilaya</td>
                <td> <label>{{$client->wilaya}} </label></td>
                <td id="arab"> <label>{{$client->الولاية}} </label></td>
                <td id="arab">الولاية</td>
            </tr>
                <tr>
                <td>Date de naissance</td>
                <td> <label>{{$client->date_naissance}} </label></td>
                <td id="arab">تاريخ الميلاد</td>
            </tr>
            <tr>
                <td>Commune</td>
                <td> <label>{{$client->commune}} </label></td>
                <td id="arab"> <label>{{$client->البلدية}} </label></td>
                <td id="arab">البلدية</td>
                
            </tr>
            <tr>
                <td>Nationnalite</td>
                <td> <label>{{$client->nationalite}} </label></td>
                <td id="arab"> <label>{{$client->الجنسية}} </label></td>
                <td id="arab">الجنسية</td>
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
                <td id="arab">اللغة المختارة</td>
            </tr>
            <tr>
                <td>Qualite du condidat</td>
                <td><label>{{$client->qualite_condidat}} </label></td>

            </tr>
            @if($client->qualite_condidat=="etudiant")
            <tr>
                <td>Faculte</td>
                <td><label>{{$client->faculte}} </label></td>

            </tr>
            <tr>
                <td>Departement</td>
                <td><label>{{$client->dpt}} </label></td>

            </tr>
            @else
            <tr>
                <td>Profession</td>
                <td><label>{{$client->profession}} </label></td>
                <td id="arab"><label>{{$client->المهنة}} </label></td>
                <td id="arab">المهنة</td>
            </tr>
            @endif
            </table>
        </form>
        </fieldset>
    
        </div>
    </div>
    <div class="row mt-5">
    <div class="col-md-6 offset-md-3">
            <!--h3 class="text text-center text-primary">Attestation d'inscription</h3-->
            
            <img  src="{{ public_path('images/pied_page.png') }}" alt="No entete" width="100%">
    </div>   
    

        
    </div>
    
   