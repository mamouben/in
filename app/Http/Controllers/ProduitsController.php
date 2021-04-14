<?php

namespace App\Http\Controllers;
use App\Produit;
use App\Categorie;
use App\Fournisseur;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function index()
    {
        $produit = Produit::leftJoin('categorie-produis','cle_categorie_produis','=','produits.id_cat')->
        leftJoin('fournisseur','fournisseur.cle_fournisseur','=','produits.id_fournisseur')->get();
        return view('components.produits',compact('produit','produit'));
    }
    public function add()
    {
        $datacat = Categorie::all();
        $datafournisseur = Fournisseur::all();
        return view('components.addproduit')->with('datacat',$datacat)->
        with('datafournisseur',$datafournisseur);
    }
    public function store(Request $request)
    {
        //dd($request->quantiteproduit * $request->prixunitaireproduit);
        Produit::create([
            'ref_produits' => $request->refproduit,
            'nom_produits' => $request->nomproduit,
            'id_cat' => $request->select_cat,
            'id_fournisseur' => $request->select_fournisseur,
        ]);
        return redirect('/produits')->with('success','Produit ajouter');
    }
    public function edit($produit){
        //dd($produit);
        $datacat = Categorie::all();
        $datafournisseur = Fournisseur::all();
        $data = Produit::leftJoin('categorie-produis','cle_categorie_produis','=','produits.id_cat')->
        leftJoin('fournisseur','fournisseur.cle_fournisseur','=','produits.id_fournisseur')->find($produit);
 
         return view('components.editproduit')->with('data',$data)->with('datacat',$datacat)->
         with('datafournisseur',$datafournisseur);
     }
     public function update(Request $request,$produit){
        
     
        $data = Produit::find($produit);

        $data->ref_produits = $request->refproduit;
        $data->nom_produits = $request->nomproduit;
        $data->id_cat = $request->select_cat;
        $data->id_fournisseur = $request->select_fournisseur;
        $data->save();
        return redirect('/produits')->with('success','Produit modifier');
    }
    public function destroy($produit){
        $data = Produit::find($produit);

        $data->delete();
        return redirect('/produits')->with('success','Produit Supprimer');
    }
}
