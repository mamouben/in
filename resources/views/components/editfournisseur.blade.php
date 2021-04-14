@extends('components.app')
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h4 class="page-title m-0">Modifier un fournisseur</h4>
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

                                <form action="{{url('editfournisseur/'.$data->cle_fournisseur)}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input value="{{$data->nom__fournisseur}}" name="nomfournisseur" type="text" class="form-control" required placeholder="Nom du fournisseur"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Téléphone</label>
                                        <input value="{{$data->tel_fournisseur}}" name="telfournisseur" type="number" class="form-control" required placeholder="Téléphone du fournisseur"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Mail</label>
                                        <input value="{{$data->mail_fournisseur}}" name="emailfournisseur" type="email" class="form-control" required placeholder="Mail du fournisseur"/>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                Modifier
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