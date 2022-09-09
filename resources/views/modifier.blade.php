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
            <form action="{{ route('client.update',$client->id) }}" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
            <table class="table">

                <tr>
                    <td>Nom</td>
                    <td><input type="text" name="nom" value="{{$client->nom}}" class="form-control"></td>
                </tr>
                   <tr>
                    <td>Prénom</td>
                    <td><input type="text" name="prenom" value="{{$client->prenom}}" class="form-control"></td>
                </tr>
                   <tr>
                    <td>Wilaya</td>
                    <td><input type="text" name="wilaya" value="{{$client->wilaya}}"class="form-control"></td>
                </tr>
                    <tr>
                    <td>Date de naissance</td>
                    <td><input type="date" name="date_naissance" value="{{$client->date_naissance}}" class="form-control"></td>
                </tr>
       <tr>
                    <td>Commune</td>
                    <td><input type="text" name="commune" value="{{$client->commune}}"class="form-control"></td>
                </tr>
                   <tr>
                    <td>Nationnalité</td>
                    <td><input type="text" name="nationalite" value="{{$client->nationalite}}" class="form-control"></td>
                </tr>
                   <tr>
                    <td>Telephone</td>
                    <td><input type="text" value="{{$client->Tel}}" value="000-00-00-00"name="Tel" class="form-control"></td>
                </tr>
                 <tr>
                    <td>Email</td>
                    <td><input type="email" value="{{$client->email}}"name="email" class="form-control"></td>
                </tr>
                     <tr>
                    <td>Horaire choisit</td>
                    <td><input type="text" value="{{$client->horaire_choisi}}"name="horaire_choisi" class="form-control"></td>
                </tr>
                <tr>
                    <td>Photo</td>
                    <td><input type="file" name="photo" class="form-control"></td>
                </tr>
                 <tr>
                    
                    <div class="card-body">
                        <td>
                        <div class="form-group">
                            <label> Faculté </label>
                            <select class="form-control" name="faculte" id="faculte">
                                <option value="" selected disabled> {{$client->faculte}}</option>
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
                                <option>{{$client->dpt}}</option>
                            </select>
                        </div>
                    </td>
                    </div>
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
</body>

</html>