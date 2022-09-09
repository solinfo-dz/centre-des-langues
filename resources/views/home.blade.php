@extends('masterAdmin')

@section('title')
    Inscription
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style>
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Dashboard</h3>
    </div>
    <section class="section">
   
        <div class="row mb-4">
            @if (session()->has('pesan'))
                {!!session()->get('pesan')!!}
            @endif
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Bienvenue à son inscription en ligne</h3>
                    </div>
                    <div class="card-body">
                        <h3 class="text-left">Instruction :</h3>
                       i Ulang.</li>
                        </ol> 
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
