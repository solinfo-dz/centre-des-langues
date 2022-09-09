<?php

namespace App\Http\Controllers;
use App\Models\Dpt;
use App\Models\Faculte;
use App\Models\Client;

use Illuminate\Http\Request;
use Auth;


class DropdownController2 extends Controller
{
       /**
     * load dropdowns blade
     * @param NA
     * @return view
     */
    public function inscrire() {
        $facultes = Faculte::all();
        return view('Clients.create', compact('facultes'));
    }

      /**
     * load dropdowns blade
     * @param NA
     * @return view
     */
    public function modifier() {
        $email=Auth::user()->email;
         $client=Client::where('email','like',$email)->first();
         $data['client'] = $client;
        $data['facultes']=Faculte::all();
        return view('clients.edit', $data);
    }

    /**
     * Get all dpts based on  faculte
     * @param request
     * @return response
     */
    public function getDpts(Request $request) {

        if ($request->faculteName)

         {
            $faculte=Faculte::where('name',$request->faculteName)->first();
            $id=$faculte->id;
            $dpts = Dpt::where('faculte_id', $id)->get();
          
            if ($dpts) {
                return response()->json(['status' => 'success', 'data' => $dpts], 200);
            }
            return response()->json(['status' => 'failed', 'message' => 'No dpts found'], 404);
        }
        return response()->json(['status' => 'failed', 'message' => 'Please select faculte'], 500);
    }
}
