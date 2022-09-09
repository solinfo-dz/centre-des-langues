<!doctype html>
<html lang="en">

<head>
    <title> Inscription CEIL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
<style>
#panel,#prof {
  visibility: hidden;
}

</style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-sm-12 col-12 m-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="card-title font-weight-bold text-center"> Formulaire d'inscription</h4>
                    </div>
     <div class="row mt-5 ">
        <div class="col-md-10 offset-md-3 m-auto">
            <form action="{{ route('client.update',$client->id) }}" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
                @method('PUT')
     
            <table class="table">
<tr>
<td> <img  src="{{ asset('upload/clients/'.$client->photo) }}" alt="No Image"  width="30%" >
             </td>
</tr>                
<tr>
    <td>N=° Quittance</td>
    <td><input type="text" name="quittance" class="form-control" value="{{$client->quittance}}"></td>
    

</tr>
<tr>
<td>Nom</td>
    <td><input type="text" name="nom" value="{{$client->nom}} " class="form-control"></td>
    <td><input type="text" name="اللقب" value="{{$client->اللقب}}"class="form-control"></td>
    <td>اللقب</td>
 
</tr>
   <tr>

   <td>Prénom</td>
    <td><input type="text" name="prenom" value="{{$client->prenom}}"class="form-control"></td>
    <td><input type="text" name="الاسم" value="{{$client->الاسم}}"class="form-control"></td>
    <td>الاسم</td>
   
</tr>
   <tr>
   <td>Wilaya</td>
    <td><input type="text" name="wilaya" value="{{$client->wilaya}} " class="form-control"></td>
    <td><input type="text" name="الولاية"value= "{{$client->الولاية}} " class="form-control"></td>
    <td>الولاية</td>
   
</tr>
    <tr>
    <td>Date de naissance</td>
    <td><input type="date" name="date_naissance" value="{{$client->date_naissance}}"class="form-control"></td>
    <td>تاريخ الميلاد</td>
    
</tr>
<tr>
<td>Commune</td>
<td><input type="text" name="commune" value="{{$client->commune}}"class="form-control"></td>
<td><input type="text" name="البلدية" value="{{$client->البلدية}}"class="form-control"></td>
<td>البلدية</td>
    
</tr>
   <tr>
   <td>Nationnalité</td>
    <td><input type="text" name="nationalite" value="{{$client->nationalite}}" class="form-control"></td>
    <td><input type="text" name="الجنسية" value="{{$client->الجنسية}} "class="form-control"></td>
    <td>الجنسية</td>
   
</tr>
<tr>
                    <td>Telephone</td>
                    <td><input type="text" value="000-00-00-00"name="Tel" 
                    value="{{$client->Tel}}"class="form-control"></td>
              
                    <td>Email</td>
                    <td><input type="email" value="{{Auth::user()->email}}"
                    name="email" class="form-control" disabled="disabled"></td>
                </tr>
     <tr>
     <td>Horaire choisit</td>
                    <td><input type="text" name="horaire_choisi" 
                    value="{{$client->horaire_choisi}}"class="form-control"></td>
                    <td><input type="text" name="التوقيت_المختار" value="{{$client->التوقيت_المختار}}" class="form-control"></td>
                    <td>التوقيت المختار</td>
 
</tr>
<tr>
                    <td>Photo</td>
                    <td><input type="file" name="photo" class="form-control"></td>
                </tr>
<tr>
<td>Qualité du condidat</td>
                    <td border="1">
                        <select name="qualite_condidat" id="qualite_condidat" class="form-control" onchange="myFunction()">
                            <option value="{{$client->qualite_condidat}}">{{$client->qualite_condidat}}
                            </option>
                            <option value="etudiant">Etudiant</option>
                            <option value="employe">Employé</option>
                            <option value="externe">Externe</option>
                        </select>
                    </td>
                <td>صفة المترشح</td>
                
</tr>
<tr>
                
    <td>Langue choisi</td>
    <td>
    <select name="langue_choisi" id="langue_choisi" class="form-control">
        <option value="{{$client->langue_choisi}}">{{$client->langue_choisi}}
        </option>
        <option value="Francais">Francais</option>
        <option value="Anglais">Anglais</option>
        <option value="Espagnol">Espangol</option>
        <option value="Allemand">Allemand</option>

    </select>
    </td>
    <td>اللغة المختارة</td>
</tr>  
                


  <tr id="panel">

                        <td>
                        <div class="form-group">
                            <label> Faculté </label>
                            <select class="form-control" name="faculte" id="faculte">
                            
                               <option value=" {{$client->faculte}}" > {{$client->faculte}}</option>
                             
                                @forelse ($facultes as $faculte)
                                    <option value="{{ $faculte->name }}">{{ $faculte->name }} </option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        
                    </td>
                    <td>الكلية</td>
               
                    <td>
                        <div class="form-group">
                            <label> Département </label>
                            <select class="form-control" name="dpt" id="dpt">
                            <option value=" {{$client->dpt}}" > {{$client->dpt}}</option>
                              
                            </select>
                        </div>
                    </td>
                    <td>القسم</td>
                    
                </tr>
              
               

                    
                    <tr id="prof">
                    
                    <td>Profession</td>
                    <td><input type="text" name="profession"  value="{{$client->profession}}"
                    class="form-control"></td>
                  
                    
                    <td><input type="text" name="المهنة" 
                    class="form-control" value="{{$client->المهنة}}"></td>
                    <td>المهنة</td>
                    
                </tr>
               


                  <tr>
                    <td></td>
                    <td><input type="submit" value="Modifier ma condidature" name="update" class="btn btn-block btn-primary"></td>
                </tr>
            </table>
        </form>
                  </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/script2.js') }}"></script>

    <script>
function myFunction() {
     var select = document.getElementById('qualite_condidat');
var value = select.options[select.selectedIndex].value;
    
   if( value == "etudiant")
   {
  document.getElementById("panel").style.visibility = "visible";
  document.getElementById("prof").style.visibility = "hidden";
   }
   else
   {
  document.getElementById("panel").style.visibility = "hidden";
  document.getElementById("prof").style.visibility = "visible";
   }


}
</script>

</body>

</html>