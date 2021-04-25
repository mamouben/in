<?php

namespace App\Http\Controllers;
use App\Produit;
use App\Lotconteneur;
use Illuminate\Http\Request;

class LotproduitController extends Controller
{
    public function add()
    {
        $data = Produit::all();
        return view('components.addlot')->with('data',$data);
    }
    public function store(Request $request,$id)
    {
        Lotconteneur::create([
            'quantite_lotproduit' => $request->quantite_lot,
            'quantite_lotproduit_actuel' => $request->quantite_lot,
            'prixu_lotproduit' => $request->prixu_lot,
            'id_produit' => $request->select_produit,
            'montant_devis_lotproduit' => ($request->quantite_lot * $request->prixu_lot),
            'id_conteneur' => $id,
            'id_lieu_stockage' => 0,
        ]);
        
        return redirect('/lotconteneurs/'.$id)->with('success','Lot produit ajouter');
    }
    public function edit($id){
        // dd($conteneur);
        $dataproduit = Produit::all();
        $data = Lotconteneur::leftJoin('produits','cle_produits','=','lotproduit.id_produit')->find($id);
 
         return view('components.editlot')->with('data',$data)->with('dataproduit',$dataproduit);
     }
     public function update(Request $request,$id){
        
        //dd($requestConteneur);
           $data = Lotconteneur::find($id);
            
            $data->quantite_lotproduit = $request->quantite_lot;
            $data->prixu_lotproduit = $request->prixu_lot;
            $data->id_produit = $request->select_produit;
            $data->montant_devis_lotproduit = ($request->quantite_lot * $request->prixu_lot);
   
           $data->save();
   
           
           return redirect('/lotconteneurs/'.$data->id_conteneur)->with('success','Lot modifier');
       }

     public function destroy($id){
        $data = Lotconteneur::find($id);

        $data->delete();
        return redirect('/lotconteneurs/'.$data->id_conteneur)->with('success','Lot Supprimer');
    }

}

