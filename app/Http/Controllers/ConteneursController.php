<?php

namespace App\Http\Controllers;
use App\Conteneur;
use Illuminate\Http\Request;

class ConteneursController extends Controller
{
    public function index()
    {
        $conteneurs = Conteneur::all();
        return view('components.conteneurs',compact('conteneurs','conteneurs'));
    }
    public function add()
    {
        return view('components.addconteneurs');
    }
    public function store(Request $request)
    {
        Conteneur::create([
            'montant_devise' => $request->montant_devise,
            'taux_change' => $request->taux_change,
            'num_d10' => $request->num_d10,
            'date_d10' => $request->date_d10,
            'contre_valeur' => $request->contre_valeur,
            'droits_douanes' => $request->droits_douanes,
            'taxe_domiciliation' => $request->taxe_domiciliation,
            'frais_transit' => $request->frais_transit,
            'consignation_maritime' => $request->consignation_maritime,
            'magasinage_manutention1' => $request->magasinage_manutention1,
            'magasinage_manutention2' => $request->magasinage_manutention2,
            'surestaries' => $request->surestaries,
            'transport' => $request->transport,
            'autresfrais' => $request->autresfrais,
            'totaux' => ($request->contre_valeur  + $request->droits_douanes + $request->taxe_domiciliation + 
            $request->frais_transit + $request->consignation_maritime + $request->magasinage_manutention1 +
            $request->magasinage_manutention2 + $request->surestaries + $request->transport + $request->autresfrais),
        ]);
        return redirect('/conteneurs')->with('success','Conteneur ajouter');
    }
    public function edit($conteneur){
        // dd($conteneur);
        $data = Conteneur::find($conteneur);
 
         return view('components.editconteneurs')->with('data',$data);
     }
     public function update(Request $request,$conteneur){
        
        //dd($requestConteneur);
           $data = Conteneur::find($conteneur);
   
            $data->montant_devise = $request->montant_devise;
            $data->taux_change = $request->taux_change;
            $data->num_d10 = $request->num_d10;
            $data->date_d10 = $request->date_d10;
            $data->contre_valeur = $request->contre_valeur;
            $data->droits_douanes = $request->droits_douanes;
            $data->taxe_domiciliation = $request->taxe_domiciliation;
            $data->frais_transit = $request->frais_transit;
            $data->consignation_maritime = $request->consignation_maritime;
            $data->magasinage_manutention1 = $request->magasinage_manutention1;
            $data->magasinage_manutention2 = $request->magasinage_manutention2;
            $data->surestaries = $request->surestaries;
            $data->transport = $request->transport;
            $data->autresfrais = $request->autresfrais;
            $data->totaux = ($request->contre_valeur  + $request->droits_douanes + $request->taxe_domiciliation + 
            $request->frais_transit + $request->consignation_maritime + $request->magasinage_manutention1 +
            $request->magasinage_manutention2 + $request->surestaries + $request->transport + $request->autresfrais);
   
           $data->save();
       
   
           return redirect('/conteneurs')->with('success','Conteneur modifier');
       }
       public function destroy($conteneur){
        $data = Conteneur::find($conteneur);

        $data->delete();
        return redirect('/conteneurs')->with('success','Conteneur Supprimer');
    }

}
