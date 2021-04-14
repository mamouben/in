@extends('components.app')
@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h4 class="page-title m-0">Modifier un employer</h4>
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

                                <form action="{{url('editemployer/'.$data->cle_employer)}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input value="{{$data->nom_employer}}" name="nomemployer" type="text" class="form-control" required placeholder="Nom de l'employer"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Prénom</label>
                                        <input value="{{$data->prenom_employer}}" name="prenomemployer" type="text" class="form-control" required placeholder="Prénom de l'employer"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Téléphone</label>
                                        <input value="{{$data->tel_employer}}" name="telemployer" type="number" class="form-control" required placeholder="Téléphone de l'employer"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Mail</label>
                                        <input value="{{$data->mail_employer}}" name="mailemployer" type="email" class="form-control" required placeholder="Mail de l'employer"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Poste</label>
                                        <input value="{{$data->poste_employer}}" name="posteemployer" type="text" class="form-control" required placeholder="Poste de l'employer"/>
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