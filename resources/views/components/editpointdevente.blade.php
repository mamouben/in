@extends('components.app')
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h4 class="page-title m-0">Modifier un point de vente</h4>
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

                                <form action="{{url('editpointdevente/'.$data->cle_pointvente)}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Point de vente</label>
                                        <input value="{{$data->nom_pointvente}}" name="nompointdevente" type="text" class="form-control" required placeholder="Nom du point de vente"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Lieu</label>
                                        <input value="{{$data->lieu_pointvente}}" name="lieupointdevente" type="text" class="form-control" required placeholder="Lieu du point de vente"/>
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