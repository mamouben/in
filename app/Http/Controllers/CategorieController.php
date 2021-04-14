<?php

namespace App\Http\Controllers;
use App\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        $categoriesp = Categorie::all();
        return view('components.categorie',compact('categoriesp','categoriesp'));
    }

    public function store(Request $request)
    {
        Categorie::create([
            'nom_categorie_produis' => $request->nomCategorie
        ]);
        return redirect()->back()->with('success','Famille ajouter');
    }
    public function edit($categorie){
        // dd($categorie);
        $data = Categorie::find($categorie);
 
         return view('components.editcatp')->with('data',$data);
     }
     public function update(Request $request,$categorie){
        $data = Categorie::find($categorie);
        $data->nom_categorie_produis = $request->nomCategorie ;
        $data->save();
        return redirect('/categorie')->with('success','Famille modifier');
    }
    public function destroy($categorie){
        $data = Categorie::find($categorie);

        $data->delete();
        return redirect('/categorie')->with('success','Famille Supprimer');
    }

}
