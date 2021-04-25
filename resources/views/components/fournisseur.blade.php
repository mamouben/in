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
                <a href="{{ route('fournisseur.add')}}" style="background-color: #9bcf5d;" class="btn btn-info btn-lg waves-effect waves-light">Nouveau fournisseur</a>
                <hr/>
                @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                      <h5>{{$message}}</h5>
                  </div>
                  @endif
                <h4 class="mt-0 header-title">Liste des fournisseur</h4>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Fournisseur</th> 
                        <th>Téléphone</th>
                        <th>Mail</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($fournisseur as $fournisseur)
                            <tr>
                                <td>{{$fournisseur->nom__fournisseur}}</td>
                                <td>{{$fournisseur->tel_fournisseur}}</td>
                                <td>{{$fournisseur->mail_fournisseur}}</td>
                                <td>
                                    <form method="POST" action="{{route('fournisseur.destroy',$fournisseur->cle_fournisseur)}}">
                                        <a class="btn btn-info waves-effect waves-light" href="{{ route('fournisseur.edit',$fournisseur->cle_fournisseur)}}">Modifier</a>
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger waves-effect waves-light">Supprimer</button>
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