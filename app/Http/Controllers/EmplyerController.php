<?php

namespace App\Http\Controllers;
use App\Employer;
use Illuminate\Http\Request;

class EmplyerController extends Controller
{
    public function index()
    {
        $employer = Employer::all();
        return view('components.employer',compact('employer','employer'));
    }
    public function add()
    {
        return view('components.addemployer');
    }
    public function store(Request $request)
    {
        Employer::create([
            'nom_employer' => $request->nomemployer,
            'prenom_employer' => $request->prenomemployer,
            'tel_employer' => $request->telemployer,
            'mail_employer' => $request->mailemployer,
            'poste_employer' => $request->posteemployer,
        ]);
        return redirect('/employer')->with('success','Employer ajouter');
    }
    public function edit($employer){
        // dd($employer);
        $data = Employer::find($employer);
 
         return view('components.editemployer')->with('data',$data);
     }
     public function update(Request $request,$employer){
        
        //dd($request->posteemployer);
           $data = Employer::find($employer);
   
           $data->nom_employer = $request->nomemployer;
           $data->prenom_employer = $request->prenomemployer;
           $data->tel_employer = $request->telemployer;
           $data->mail_employer = $request->mailemployer;
           $data->poste_employer = $request->posteemployer;
           $data->save();
           return redirect('/employer')->with('success','Employer modifier');
       }
       public function destroy($employer){
        $data = Employer::find($employer);

        $data->delete();
        return redirect('/employer')->with('success','Employer Supprimer');
    }
}
