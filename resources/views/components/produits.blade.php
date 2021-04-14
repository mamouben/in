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
                <a href="{{ route('produit.add')}}" style="background-color: #9bcf5d;" type="button" class="btn btn-info btn-lg waves-effect waves-light">Nouveau produit</a>
                <hr/>
                @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                      <h5>{{$message}}</h5>
                  </div>
                  @endif
                <h4 class="mt-0 header-title">Liste des Produits</h4>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Réderance</th>
                        <th>Nom produit</th>
                        <th>Famille produits</th>
                        <th>Fournisseur</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                        @foreach ($produit as $produit)
                            <tr>
                                <td>{{$produit->ref_produits}}</td>
                                <td>{{$produit->nom_produits}}</td>
                                <td>{{$produit->nom_categorie_produis}}</td>
                                <td>{{$produit->nom__fournisseur}}</td>
                                <td>
                                    <form method="POST" action="{{route('produit.destroy',$produit->cle_produits)}}">
                                        <a class="btn btn-info waves-effect waves-light" href="{{ route('produit.edit',$produit->cle_produits)}}">Modifier</a>
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger waves-effect waves-light">Supprimer</button>
                                        <button type="button" class="btn btn-info waves-effect waves-light">Stock</button>
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