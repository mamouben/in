@extends('components.app')
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h4 class="page-title m-0">Ajouter un client</h4>
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

                                <form action="{{url('/addclients')}}" method="POST">
                                    <div class="row">
                                    @csrf
                                    
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-12">
                                        <label>Type de client</label>
                                    <select id="select_typeclient" name="select_typeclient" class="form-control">
                                        <option></option>
                                        <option>particuliers</option>
                                        <option>professionnels</option>
                                    </select>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label>Nom</label>
                                        <input name="nomclient" type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label>prénom</label>
                                        <input name="prenomclient" type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label>Téléphone</label>
                                        <input name="telclient" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label>Mail</label>
                                        <input name="mailclient" type="email" class="form-control"/>
                                    </div>
                                    <div id="info_pro" class="row col-12">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label>Nom de l'entreprise</label>
                                        <input name="entrepriseclient" type="text" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label>N° RC</label>
                                        <input name="rcclient" type="text" class="form-control"/>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                Ajouter
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