@extends('components.app')
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h4 class="page-title m-0">Modifier un lot de produit</h4>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end page-title-box -->
            </div>
        </div> 
        <!-- end page title -->

        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <form action="{{url('editlot/'.$data->cle_lotproduit)}}" method="POST">
                                    <div class="row">
                                    @csrf
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label>Quantité</label>
                                        <input value="{{$data->quantite_lotproduit}}" step="any" name="quantite_lot" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label>Prix unitaire Euro</label>
                                        <input value="{{$data->prixu_lotproduit}}" step="any" name="prixu_lot" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label>Produit</label>
                                        <div class="col-sm-10">
                                            <select name="select_produit" class="form-control selectpicker" data-live-search="true">
                                                <option>{{$data->ref_produits}}</option>
                                                @foreach ($dataproduit as $dataproduit)
                                                    <option data-tokens={{$dataproduit->cle_produits}} value="{{$dataproduit->cle_produits}}">{{$dataproduit->ref_produits}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-12 text-center">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                Modifier
                                            </button>
                                        </div>
                                    </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->           

    </div><!-- container fluid -->

</div> <!-- Page content Wrapper -->