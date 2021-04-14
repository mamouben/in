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
                <a style="background-color: #9bcf5d;" href="{{ route('conteneurs.add')}}" class="btn btn-info btn-lg waves-effect waves-light">Nouveau conteneur</a>
                <hr/>
                @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                      <h5>{{$message}}</h5>
                  </div>
                  @endif
                <h4 class="mt-0 header-title">Liste des conteneurs</h4>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Montant en devise</th>
                        <th>Taux de change</th>
                        <th>N° du D10</th>
                        <th>Date du D10</th>
                        <th>Contre valeur en D.A</th>
                        <th>Droits de douanes</th>
                        <th>Taxe de domiciliation</th>
                        <th>Frais de transit</th>
                        <th>Consignation maritime</th>
                        <th>Magasinage et manutention</th>
                        <th>Magasinage et manutention</th>
                        <th>Surestaries</th>
                        <th>Transport</th>
                        <th>Autres frais (débours)</th>
                        <th>Totaux </th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($conteneurs as $conteneurs)
                            <tr>
                                <td>{{$conteneurs->montant_devise}}</td>
                                <td>{{$conteneurs->taux_change}}</td>
                                <td>{{$conteneurs->num_d10}}</td>
                                <td>{{$conteneurs->date_d10}}</td>
                                <td>{{$conteneurs->contre_valeur}}</td>
                                <td>{{$conteneurs->droits_douanes}}</td>
                                <td>{{$conteneurs->taxe_domiciliation}}</td>
                                <td>{{$conteneurs->frais_transit}}</td>
                                <td>{{$conteneurs->consignation_maritime}}</td>
                                <td>{{$conteneurs->magasinage_manutention1}}</td>
                                <td>{{$conteneurs->magasinage_manutention2}}</td>
                                <td>{{$conteneurs->surestaries}}</td>
                                <td>{{$conteneurs->transport}}</td>
                                <td>{{$conteneurs->autresfrais}}</td>
                                <td>{{$conteneurs->totaux}}</td>
                                <td>
                                    <form method="POST" action="{{route('conteneurs.destroy',$conteneurs->cle_conteneurs)}}">
                                        <a class="btn btn-info waves-effect waves-light" href="{{ route('conteneurs.edit',$conteneurs->cle_conteneurs)}}">Modifier</a>
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger waves-effect waves-light">Supprimer</button>
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