<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\ExportClient;
use App\Models\Client;


class ExcelController extends Controller
{
   

    public function exportClients(Request $request){
        return Excel::download(new ExportClient, 'clients.xlsx');
    }

   

}
