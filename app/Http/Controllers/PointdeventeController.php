<?php

namespace App\Http\Controllers;
use App\Pointvente;
use Illuminate\Http\Request;

class PointdeventeController extends Controller
{
    public function index()
    {
        $pointdevente = Pointvente::all();
        return view('components.pointdevente',compact('pointdevente','pointdevente'));
    }
    public function add()
    {
        return view('components.addpointdevente');
    }
    public function store(Request $request)
    {
        Pointvente::create([
            'nom_pointvente' => $request->nompointdevente,
            'lieu_pointvente' => $request->lieupointdevente,
        ]);
        return redirect('/pointdevente')->with('success','Point de vente ajouter');
    }
    public function edit($pointdevente){
        // dd($pointdevente);
        $data = Pointvente::find($pointdevente);
 
         return view('components.editpointdevente')->with('data',$data);
     }
     public function update(Request $request,$pointdevente){
        
        //dd($request);
           $data = Pointvente::find($pointdevente);
   
           $data->nom_pointvente = $request->nompointdevente;
           $data->lieu_pointvente = $request->lieupointdevente;
           $data->save();
           return redirect('/pointdevente')->with('success','Point de vente modifier');
       }
       public function destroy($pointdevente){
        $data = Pointvente::find($pointdevente);

        $data->delete();
        return redirect('/pointdevente')->with('success','Point de vente Supprimer');
    }
}
