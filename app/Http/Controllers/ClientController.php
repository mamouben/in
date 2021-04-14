<?php

namespace App\Http\Controllers;
use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $client = Client::where('type_client_client', 'particuliers')->get();
        return view('components.clients',compact('client','client'));
    }
    public function indexpro()
    {
        $client = Client::where('type_client_client', 'professionnels')->get();
        return view('components.clientpro',compact('client','client'));
    }
    public function add()
    {
        return view('components.addclients');
    }
    public function store(Request $request)
    {
        Client::create([
            'nom_client' => $request->nomclient,
            'prénom_client' => $request->prenomclient,
            'téléphone_client' => $request->telclient,
            'mail_client_client' => $request->mailclient,
            'type_client_client' => $request->select_typeclient,
            'entreprise_client' => $request->entrepriseclient,
            'rc_client' => $request->rcclient,
        ]);
        if($request->select_typeclient == 'particuliers'){
            return redirect('/clients')->with('success','Client ajouter');
        }
        elseif($request->select_typeclient == 'professionnels'){
            return redirect('/clientpro')->with('success','Client ajouter');
        }
        
    }
    public function edit($client){
        // dd($client);
        $data = Client::find($client);
 
         return view('components.editclients')->with('data',$data);
     }
     public function update(Request $request,$client){
        
        //dd($request);
           $data = Client::find($client);
   
           $data->nom_client = $request->nomclient;
           $data->prénom_client = $request->prenomclient;
           $data->téléphone_client = $request->telclient;
           $data->mail_client_client = $request->mailclient;
           $data->entreprise_client = $request->entrepriseclient;
           $data->rc_client = $request->rcclient;
   
           $data->save();
       
           if($data->type_client_client == 'particuliers'){
                return redirect('/clients')->with('success','Client modifier');
            }
            elseif($data->type_client_client == 'professionnels'){
                return redirect('/clientpro')->with('success','Client modifier');
            }

       }

       public function destroy($client){
        $data = Client::find($client);
        $data->delete();

        if($data->type_client_client == 'particuliers'){
            return redirect('/clients')->with('success','Supprimer');
        }
        elseif($data->type_client_client == 'professionnels'){
            return redirect('/clientpro')->with('success','Supprimer');
        }
    }

}
