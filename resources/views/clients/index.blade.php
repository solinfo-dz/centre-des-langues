@extends('masteradmin')
@section('title')
    Liste des clients
@endsection

@section('content')
<style>
th,td{
    text-align: center;
}
#panel
{
    visibility :hidden;
}
</style>
    <div class="mt-5 text-center">
        <p><button class="btn btn-primary mr-5"  onclick="myFunction()" >Filtrer les clients</button>
            <a href="{{ route('export-clients') }}" class="btn btn-primary ml-5">Exporter en excel</a>
        </p>
        
    </div>
  
    <div class="row" id="panel">
        <div class="col-md-6 offset-md-3">
            <div id="result">
            <form action="{{ route('client.store') }}" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
                <select name="langue" id="langue" class="form-control" onchange="filtre()">
                            <option value="">Select
                            </option>
                            <option value="Francais">Francais</option>
                            <option value="Anglais">Anglais</option>
                            <option value="Espagnol">Espangol</option>
                            <option value="Allemand">Allemand</option>
                        </select>
            </form>  
            </div>
        </div>
    </div>
    <h3 class="text text-primary text-center mt-5">Liste des clients</h3>
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                          <th>Client Id </th>
                          <th>Nom </th>
                          <th>Prénom</th>
                          <th>Tel</th>
                          <th>Email</th>
                          <th>Qualité condidat</th>

                    </tr>
                </thead>
                <tbody>
                     @foreach ($clients as $client)
                         
                    
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>{{ $client->nom }}</td>
                        <td>{{ $client->prenom }}</td>
                        <td>{{ $client->Tel }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->qualite_condidat }}</td>

                        <td>
                            <a href="{{ route('client.show', $client->id) }}" class="btn btn-success">View Details</a>
                        </td>
             
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $clients->links() !!}
        </div>
    </div>
@endsection
<script>

 

 function myFunction() {

  document.getElementById("panel").style.visibility = "visible";
 }
</script>
<script>
    function filtre()
    {
        var select = document.getElementById('langue');
        var choix = select.options[select.selectedIndex].value;
   var url = '{{ route("filtrer", ":choix") }}';

url = url.replace(':choix', choix);

window.location.href=url;
 
    }
    </script>