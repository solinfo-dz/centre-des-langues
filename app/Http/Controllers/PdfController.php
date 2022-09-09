<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use PDF;
use Auth;

class PdfController extends Controller
{


     public function createPDF () {
      
        $email=Auth::user()->email;
                $client=Client::where('email', $email)->first();
        $id=$client->id;
      
        $pdf = PDF::loadView ('clients.pdf', compact('client'));
        return $pdf->download ('Attestation.pdf');
    }
}