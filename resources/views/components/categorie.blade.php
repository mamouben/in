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
                <div class="card m-b-30" >
                    <div class="card-body" style="border: 2px solid #000">

                        <h4 class="mt-0 header-title">Ajouter une famille de produit</h4>

                        <form action="{{url('/categorie')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Famille produit</label>
                                <input type="text" name="nomCategorie" class="colorpicker-default form-control col-4">
                            </div>
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-info">Ajouter</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <h4 class="mt-0 header-title">Liste famille produits</h4>
                @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                      <h5>{{$message}}</h5>
                  </div>
                @endif
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Famille produit</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categoriesp as $categoriep)
                        <tr>
                            <td>{{$categoriep->nom_categorie_produis}}</td>
                            <td>
                                <form method="POST" action="{{route('categorie.destroy',$categoriep->cle_categorie_produis)}}">
                                    <a class="btn btn-info waves-effect waves-light" href="{{ route('categorie.edit',$categoriep->cle_categorie_produis)}}">Modifier</a>
                                    
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