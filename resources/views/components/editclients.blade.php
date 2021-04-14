@extends('components.app')
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h4 class="page-title m-0">Modifier un client</h4>
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

                                <form action="{{url('editclients/'.$data->cle_client)}}" method="POST">
                                    <div class="row">
                                    @csrf
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label>Nom</label>
                                        <input value="{{$data->nom_client}}" name="nomclient" type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label>prénom</label>
                                        <input value="{{$data->prénom_client}}" name="prenomclient" type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label>Téléphone</label>
                                        <input value="{{$data->téléphone_client}}" name="telclient" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label>Mail</label>
                                        <input value="{{$data->mail_client_client}}" name="mailclient" type="email" class="form-control"/>
                                    </div>
                                    @if ($data->type_client_client == "professionnels")
                                    
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label>Nom de l'entreprise</label>
                                            <input value="{{$data->entreprise_client}}" name="entrepriseclient" type="text" class="form-control"/>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label>N° RC</label>
                                            <input value="{{$data->rc_client}}" name="rcclient" type="text" class="form-control"/>
                                        </div>
                                    
                                    @endif
                                    
                                    <div class="form-group">
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