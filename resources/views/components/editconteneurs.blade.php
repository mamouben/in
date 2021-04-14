@extends('components.app')
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h4 class="page-title m-0">Modifier un conteneur</h4>
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

                                <form action="{{url('editconteneurs/'.$data->cle_conteneurs)}}" method="POST">
                                    <div class="row">
                                    @csrf
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label>Montent devise</label>
                                        <input value="{{$data->montant_devise}}" name="montant_devise" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label>Taux de change</label>
                                        <input value="{{$data->taux_change}}" name="taux_change" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label>N° du D 10</label>
                                        <input value="{{$data->num_d10}}" name="num_d10" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label>Date du D 10</label>
                                        <input value="{{$data->date_d10}}" name="date_d10" type="date" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-3 col-sm-12 col-12">
                                        <label>Contre valeur DA</label>
                                        <input value="{{$data->contre_valeur}}" name="contre_valeur" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-3 col-sm-12 col-12">
                                        <label>Droit de douanes</label>
                                        <input value="{{$data->droits_douanes}}" name="droits_douanes" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-3 col-sm-12 col-12">
                                        <label>Taxe de domiciliation</label>
                                        <input value="{{$data->taxe_domiciliation}}" name="taxe_domiciliation" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-3 col-sm-12 col-12">
                                        <label>Frais de transit</label>
                                        <input value="{{$data->frais_transit}}" name="frais_transit" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label>Consignation maritime</label>
                                        <input value="{{$data->consignation_maritime}}" name="consignation_maritime" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label>Magasinage manutention</label>
                                        <input value="{{$data->magasinage_manutention1}}" name="magasinage_manutention1" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label>Magasinage manutention</label>
                                        <input value="{{$data->magasinage_manutention2}}" name="magasinage_manutention2" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label>Surestaries</label>
                                        <input value="{{$data->surestaries}}" name="surestaries" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label>Transport</label>
                                        <input value="{{$data->transport}}" name="transport" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label>Autre frais</label>
                                        <input value="{{$data->autresfrais}}" name="autresfrais" type="number" class="form-control"/>
                                    </div>
                                    
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