<?php

namespace App\Http\Controllers;


use App\Models\Client;
use App\Models\User;
use App\Models\Faculte;
use App\Models\Dpt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class ClientController extends Controller
{


     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['clients'] = Client::simplePaginate(4);
        return view('clients.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $data['faculte']=Faculte::all();
        $data['dpt']=Dpt::all();
        $facultes=Faculte::all();
        return view('clients.create',compact('facultes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'quittance' => 'required', 
      
            'nom' => 'required', 
            'prenom' => 'required',
            'date_naissance'=>'required',
            'wilaya' => 'required',
            'date_naissance'=>'required',
            'commune'=>'required',
            'nationalite'=>'required',
            'Tel'=>'required',
            'horaire_choisi'=>'required',
            'qualite_condidat'=>'required',
           
            
           'الاسم' => 'required', 
           'اللقب' => 'required', 
           'الولاية' => 'required', 
            'البلدية' => 'required', 
           'الجنسية' => 'required', 
            'التوقيت_المختار' => 'required', 
            
        ]);

        if($validator->fails()){
          // return redirect()->back()->withErrors($validator)->withInput();
            dd($request);
        }

        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $name = time().'.'.$photo->getClientOriginalExtension();
            $path = public_path('upload/clients');
            $photo->move($path, $name);
            $photo = $name;
        }else{
            $photo = 'NoImage.JPG';
        }

        $clientObj =  new Client;
        $clientObj->quittance = $request->quittance;
        $clientObj->nom = $request->nom;
        $clientObj->prenom = $request->prenom;
        $clientObj->photo = $photo;
        $clientObj->qualite_condidat = $request->qualite_condidat;
        $clientObj->wilaya = $request->wilaya;
        $clientObj->Tel = $request->Tel;
        $clientObj->email = Auth::user()->email;
        $clientObj->nationalite = $request->nationalite;
        $clientObj->date_naissance = $request->date_naissance;
        $clientObj->commune = $request->commune;
        $clientObj->horaire_choisi = $request->horaire_choisi;
        $clientObj->langue_choisi = $request->langue_choisi;

        $clientObj->faculte = $request->faculte;
        $clientObj->dpt = $request->dpt;
        $clientObj->profession = $request->profession;
        $clientObj->الاسم=$request->الاسم;
        $clientObj->اللقب=$request->اللقب;
        $clientObj->الولاية=$request->الولاية;
        $clientObj->البلدية=$request->البلدية;
        $clientObj->الجنسية=$request->الجنسية;
        $clientObj->التوقيت_المختار=$request->التوقيت_المختار;
        $clientObj->المهنة=$request->المهنة;



        $clientObj->save();

        
        return redirect()->route('client.show',$clientObj->id)->with('success', 'Client added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [];
        $data['client'] = Client::find($id);
        return view('clients.clientDetails', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $email=Auth::user()->email;
        $client=Client::where('email','like',$email)->first();
        $id=$client->id;
        $data = [];
        $data['client'] = Client::find($id);
        $data['facultes']=Faculte::all();
        return view('clients.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         
        $validator = Validator::make($request->all(),[
            'quittance' => 'required', 
            'nom' => 'required', 
            'prenom' => 'required',
            'date_naissance'=>'required',
            'wilaya' => 'required',
            'date_naissance'=>'required',
            'commune'=>'required',
            'nationalite'=>'required',
            'Tel'=>'required',
            'horaire_choisi'=>'required',
            'qualite_condidat'=>'required',
           
            
           'الاسم' => 'required', 
           'اللقب' => 'required', 
           'الولاية' => 'required', 
            'البلدية' => 'required', 
           'الجنسية' => 'required', 
            'التوقيت_المختار' => 'required', 
          
        ]);

       if($validator->fails()){
           return redirect()->back()->withErrors($validator)->withInput();
        }

        $clientObj =  Client::find($id);
    
     
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $name = time().'.'.$photo->getClientOriginalExtension();
            $path = public_path('upload/clients');
            $photo->move($path, $name);
            $photo = $name;
            $clientObj->photo = $photo;

        }
        $clientObj->quittance = $request->quittance;
        $clientObj->nom = $request->nom;
        $clientObj->prenom = $request->prenom;
       
        $clientObj->qualite_condidat = $request->qualite_condidat;
        $clientObj->wilaya = $request->wilaya;
        $clientObj->Tel = $request->Tel;
        $clientObj->email = Auth::user()->email;
        $clientObj->nationalite = $request->nationalite;
        $clientObj->date_naissance = $request->date_naissance;
        $clientObj->commune = $request->commune;
        $clientObj->horaire_choisi = $request->horaire_choisi;
        $clientObj->langue_choisi = $request->langue_choisi;
       if($request->qualite_condidat=="etudiant")
       { $clientObj->faculte = $request->faculte;
        $clientObj->dpt = $request->dpt;
        $clientObj->profession="";
       }
        else
        {
            $clientObj->faculte="";
            $clientObj->dpt="";
            $clientObj->profession = $request->profession;

        }
       
        $clientObj->الاسم=$request->الاسم;
        $clientObj->اللقب=$request->اللقب;
        $clientObj->الولاية=$request->الولاية;
        $clientObj->البلدية=$request->البلدية;
        $clientObj->الجنسية=$request->الجنسية;
        $clientObj->التوقيت_المختار=$request->التوقيت_المختار;
        $clientObj->المهنة=$request->المهنة;
        $clientObj->save();
        
        return redirect()->route('client.show',$clientObj->id)->with('success', 'Client Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientObj = Client::find($id);
        $clientObj->delete();
        return redirect()->route('client.create')->with('success', 'Client Deleted Successfully');
    }
public function filtrer($langue)
{
  
    $clients= DB::table('clients')->where('langue_choisi','=',$langue)->simplePaginate(4);
  
    $data['clients'] = $clients;
 
    return view('clients.index', $data);
 
    

}
 
}
