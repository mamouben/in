<?php

namespace App\Http\Controllers;
use App\Fournisseur;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    public function index()
    {
        $fournisseur = Fournisseur::all();
        return view('components.fournisseur',compact('fournisseur','fournisseur'));
    }
    public function add()
    {
        return view('components.addfournisseur');
    }
    public function store(Request $request)
    {
        Fournisseur::create([
            'nom__fournisseur' => $request->nomfournisseur,
            'tel_fournisseur' => $request->telfournisseur,
            'mail_fournisseur' => $request->emailfournisseur,
        ]);
        return redirect('/fournisseur')->with('success','Fournisseur ajouter');
    }
    public function edit($fournisseur){
        // dd($fournisseur);
        $data = Fournisseur::find($fournisseur);
 
         return view('components.editfournisseur')->with('data',$data);
     }
     public function update(Request $request,$fournisseur){
        
        //dd($fournisseur);
           $data = Fournisseur::find($fournisseur);
   
           $data->nom__fournisseur = $request->nomfournisseur;
           $data->tel_fournisseur = $request->telfournisseur;
           $data->mail_fournisseur = $request->emailfournisseur;
   
           $data->save();
       
   
           return redirect('/fournisseur')->with('success','Fournisseur modifier');
       }
       public function destroy($fournisseur){
        $data = Fournisseur::find($fournisseur);

        $data->delete();
        return redirect('/fournisseur')->with('success','Fournisseur Supprimer');
    }

}
