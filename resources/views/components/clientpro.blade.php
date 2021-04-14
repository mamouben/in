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
                <a style="background-color: #9bcf5d;" href="{{ route('clients.add')}}" class="btn btn-info btn-lg waves-effect waves-light">Nouveau client</a>
                <hr/>
                @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                      <h5>{{$message}}</h5>
                  </div>
                  @endif
                <h4 class="mt-0 header-title">Liste des clients professionnels</h4>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Type de client</th>
                        <th>Nom de l'entreprise</th>
                        <th>N° RC</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Téléphone</th>
                        <th>Mail</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($client as $client) 
                            <tr>
                                <td>{{$client->type_client_client}}</td>
                                <td>{{$client->nom_client}}</td>
                                <td>{{$client->prénom_client}}</td>
                                <td>{{$client->téléphone_client}}</td>
                                <td>{{$client->mail_client_client}}</td>
                                <td>{{$client->entreprise_client}}</td>
                                <td>{{$client->rc_client}}</td>
                                <td>
                                    <form method="POST" action="{{route('clients.destroy',$client->cle_client)}}">
                                        <a class="btn btn-primary" href="{{ route('clients.edit',$client->cle_client)}}">Modifier</a>
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger waves-effect waves-light">Supprimer</button>
                                    </form>
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