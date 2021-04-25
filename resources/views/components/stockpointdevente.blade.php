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
                
                <hr/>
                @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                      <h5>{{$message}}</h5>
                  </div>
                @endif
                <h4 class="mt-0 header-title">Liste des Produits dans le stock</h4>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Réference</th>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Date de transfere</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                        {{$lot = 0}}
                        @foreach ($data as $data)

                            @if (($data->quantite_stockpoinvente) == 0)
                                {{$calssered = 'quantitemin'}}
                                @else
                                {{$calssered = ''}}
                            @endif
                            <tr class="{{$calssered}}">
                                <td>{{$data->ref_produits}}</td>
                                <td>{{$data->nom_produits}}</td>
                                <td>{{$data->quantite_stockpoinvente}}</td>
                                <td>{{$data->datetransfere_stockpoinvente}}</td>
                                <td>
                                    <form method="POST" action="{{route('pointdeventestock.destroy',$data->cle_stockpoinvente)}}">
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