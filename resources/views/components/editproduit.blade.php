@extends('components.app')
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h4 class="page-title m-0">Modifier un produit</h4>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end page-title-box -->
            </div>
        </div> 
        <!-- end page title -->

        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-body">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <form action="{{url('editproduit/'.$data->cle_produits)}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Réference</label>
                                        <input value="{{$data->ref_produits}}" name="refproduit" type="text" class="form-control" required placeholder="Réference du produit"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Produit</label>
                                        <input value="{{$data->nom_produits}}" name="nomproduit" type="text" class="form-control" required placeholder="Nom du produit"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Famille produit</label>
                                        <div class="col-sm-10">
                                            <select name="select_cat" class="form-control">
                                                <option value="{{$data->cle_categorie_produis}}">{{$data->nom_categorie_produis}}</option>
                                                @foreach ($datacat as $datacat)
                                                    <option value="{{$datacat->cle_categorie_produis}}">{{$datacat->nom_categorie_produis}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Fournisseur</label>
                                        <div class="col-sm-10">
                                            <select name="select_fournisseur" class="form-control">
                                                <option value="{{$data->cle_fournisseur}}">{{$data->nom__fournisseur}}</option>
                                                @foreach ($datafournisseur as $datafournisseur)
                                                    <option value="{{$datafournisseur->cle_fournisseur}}">{{$datafournisseur->nom__fournisseur}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                Ajouter
                                            </button>
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