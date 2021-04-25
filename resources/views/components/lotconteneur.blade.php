@extends('components.app')
@section('content')
<div class="wrapper">
    <div class="container-fluid">
<!-- Page-Title -->

<!-- end page title end breadcrumb -->

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <a style="background-color: #9bcf5d;" href="{{ route('lotproduit.add',Request::segment(2) )}}" class="btn btn-info btn-lg waves-effect waves-light">Nouveau lot de produit</a>
                <hr/>
                @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                      <h5>{{$message}}</h5>
                  </div>
                  @endif
                <h4 class="mt-0 header-title">Liste des Lot de produits</h4>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Désignation</th>
                        <th>N° du D 10</th>
                        <th>Quantité</th>
                        <th>prix U Euro</th>
                        <th>Montant Euro</th>
                        <th>Fret</th>
                        <th>Clé de </th>
                        <th>Cout</th>
                        <th>Cout unitaire</th>
                        <th>Prix de vente</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                            <tr>
                                <td>{{$data->nom_produits}}</td>
                                <td>{{$data->num_d10}}</td>
                                <td>{{$data->quantite_lotproduit}}</td>
                                <td>{{$data->prixu_lotproduit}}</td>
                                <td>{{$data->montant_devis_lotproduit}}</td>
                                
                                <td>{{round(($data->fret_lotproduit*$data->montant_devis_lotproduit)/$total,6)}}</td>
                                <td>{{round(($data->montant_devis_lotproduit/$total)*100, 2)}} %</td>
                                <td>{{round($data->totaux*(($data->montant_devis_lotproduit/$total)),2)}}</td>
                                <td>{{round($data->totaux*($data->montant_devis_lotproduit/$total)/$data->quantite_lotproduit,2)}}</td>
                                <td>vide</td>
                                <td>
                                    <form method="POST" action="{{route('lot.destroy',$data->cle_lotproduit)}}">
                                        <a class="btn btn-info waves-effect waves-light" href="{{ route('lot.edit',$data->cle_lotproduit)}}">Modifier</a>
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger waves-effect waves-light">Suuprimer</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

</div> <!-- end container-fluid -->
</div>
<!-- end wrapper -->
</div>
</div>