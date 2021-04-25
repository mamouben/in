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
                        <th>N° D 10</th>
                        <th>Quantité à la rivée</th>
                        <th>Quantité actuel</th>
                        <th>Lieu de stockage</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                        {{$lot = 0}}
                        @foreach ($data as $data)

                            @if (($data->quantite_lotproduit_actuel) == 0)
                                {{$calssered = 'quantitemin'}}
                                @else
                                {{$calssered = 'hjgkf'}}
                            @endif
                            <tr class="{{$calssered}}">
                                <td>{{$data->num_d10}}</td>
                                <td>{{$data->quantite_lotproduit}}</td>
                                <td>{{$data->quantite_lotproduit_actuel}}</td>
                                <td>{{$data->nom_pointvente}}</td>
                                <td>
                                    @if (($data->quantite_lotproduit_actuel) > 0)
                                    {{$lot = $data->cle_lotproduit}}
                                    <button type="button" data-toggle="modal" data-target=".bs-example-modal-lg"  class="btn btn-secondary" id="transférer">Transférer</button>
                                    @endif
                                   
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myLargeModalLabel">Transférer un produit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('stock/'.$lot)}}" method="POST">
                    @csrf
                    <div class="row">
                    
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                        <label>Quantité</label>
                        <input step="any" name="quantite_lot" type="number" class="form-control"/>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                        <label>Point de vente</label>
                        <div class="col-sm-10">
                            <select name="select_pointvente" class="form-control" >
                                <option></option>
                                @foreach ($datapoinvente as $datapoinvente)
                                    <option value="{{$datapoinvente->cle_pointvente}}">{{$datapoinvente->nom_pointvente}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group col-12 text-center">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                Enregistrer
                            </button>
                        </div>
                    </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</div> <!-- end container-fluid -->
</div>
<!-- end wrapper -->
</div>
</div>