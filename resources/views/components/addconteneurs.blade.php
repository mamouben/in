@extends('components.app')
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h4 class="page-title m-0">Ajouter un conteneur</h4>
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

                                <form action="{{url('/addconteneurs')}}" method="POST">
                                    <div class="row">
                                    @csrf
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label>Montent devise</label>
                                        <input name="montant_devise" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label>Taux de change</label>
                                        <input name="taux_change" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label>N° du D 10</label>
                                        <input name="num_d10" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-12">
                                        <label>Date du D 10</label>
                                        <input name="date_d10" type="date" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-3 col-sm-12 col-12">
                                        <label>Contre valeur DA</label>
                                        <input name="contre_valeur" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-3 col-sm-12 col-12">
                                        <label>Droit de douanes</label>
                                        <input name="droits_douanes" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-3 col-sm-12 col-12">
                                        <label>Taxe de domiciliation</label>
                                        <input name="taxe_domiciliation" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-3 col-sm-12 col-12">
                                        <label>Frais de transit</label>
                                        <input name="frais_transit" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label>Consignation maritime</label>
                                        <input name="consignation_maritime" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label>Magasinage manutention</label>
                                        <input name="magasinage_manutention1" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label>Magasinage manutention</label>
                                        <input name="magasinage_manutention2" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label>Surestaries</label>
                                        <input name="surestaries" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label>Transport</label>
                                        <input name="transport" type="number" class="form-control"/>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-12">
                                        <label>Autre frais</label>
                                        <input name="autresfrais" type="number" class="form-control"/>
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