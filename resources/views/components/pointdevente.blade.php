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
                <a style="background-color: #9bcf5d;" href="{{ route('pointdevente.add')}}" class="btn btn-info btn-lg waves-effect waves-light">Nouveau point de vente</a>
                <hr/>
                @if ($message = Session::get('success'))
                  <div class="alert alert-success">
                      <h5>{{$message}}</h5>
                  </div>
                  @endif
                <h4 class="mt-0 header-title">Liste des points de vente</h4>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>point de vente</th>
                        <th>Lieu</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($pointdevente as $pointdevente)
                            <tr>
                                <td>{{$pointdevente->nom_pointvente}}</td>
                                <td>{{$pointdevente->lieu_pointvente}}</td>
                                <td>
                                    <form method="POST" action="{{route('pointdevente.destroy',$pointdevente->cle_pointvente)}}">
                                        <a class="btn btn-info waves-effect waves-light" href="{{ route('pointdevente.edit',$pointdevente->cle_pointvente)}}">Modifier</a>
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger waves-effect waves-light">delete</button>
                                        
                                    </form>
                                    
                                    
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