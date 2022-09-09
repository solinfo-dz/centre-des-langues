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
#panel {
  visibility: hidden;
}
</style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-10 col-lg-10 col-sm-12 col-12 m-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h4 class="card-title font-weight-bold text-center"> Formulaire d'inscription</h4>
                    </div>
                      <div class="row mt-5 ">
        <div class="col-md-8 offset-md-3 m-auto">
            
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
                        <select name="qualite_condidat" id="qualite_condidat" class="form-control" onchange="myFunction()">
                            <option value="">Select
                            </option>
                            <option value="etudiant">Etudiant</option>
                            <option value="employe">Employé</option>
                            <option value="externe">Externe</option>
                        </select>
                    </td>
                </tr>
               <tr id="panel">
                    
                        <td>
                        <div class="form-group">
                            <label> Faculté </label>
                            <select class="form-control" name="faculte" id="faculte">
                                <option value="" selected disabled> Select </option>
                                @forelse ($facultes as $faculte)
                                    <option value="{{ $faculte->name }}">{{ $faculte->name }} </option>
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
    //if ($( "#qualite_condidat:selected" ).text()=="etudiant")
   if( value == "etudiant")
  document.getElementById("panel").style.visibility = "visible";
 else
    document.getElementById("panel").style.visibility ="hidden"
}
</script>
</body>

</html>