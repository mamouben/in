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
                <a href="{{ route('employer.add')}}" style="background-color: #9bcf5d;" class="btn btn-info btn-lg waves-effect waves-light">Nouveau employer</a>
                <hr/>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <h5>{{$message}}</h5>
                </div>
                @endif
                <h4 class="mt-0 header-title">Liste des employers</h4>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Téléphone</th>
                        <th>Mail</th>
                        <th>Poste</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($employer as $employer)
                            <tr>
                                <td>{{$employer->nom_employer}}</td>
                                <td>{{$employer->prenom_employer}}</td>
                                <td>{{$employer->tel_employer}}</td>
                                <td>{{$employer->mail_employer}}</td>
                                <td>{{$employer->poste_employer}}</td>
                                <td>
                                    <form method="POST" action="{{route('employer.destroy',$employer->cle_employer)}}">
                                        <a class="btn btn-info waves-effect waves-light" href="{{ route('employer.edit',$employer->cle_employer)}}">Modifier</a>
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger waves-effect waves-light">Suuprimer</button>
                                    </form>
                                    
                                    
                            </td>
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