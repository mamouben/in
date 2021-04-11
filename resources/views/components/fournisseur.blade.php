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
                <button style="background-color: #9bcf5d;" type="button" class="btn btn-info btn-lg waves-effect waves-light">Nouveau fournisseur</button>
                <hr/>
                <h4 class="mt-0 header-title">Liste des fournisseur</h4>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Fournisseur</th>
                        <th>Téléphone</th>
                        <th>Mail</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>Tiger Nixon</td>
                        <td>Tiger Nixon</td>
                        <td>
                            <button type="button" class="btn btn-info waves-effect waves-light">update</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light">delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Tiger Nixon</td>
                        <td>Tiger Nixon</td>
                        <td>
                            <button type="button" class="btn btn-info waves-effect waves-light">update</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light">delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>Tiger Nixon</td>
                        <td>Tiger Nixon</td>
                        <td>
                            <button type="button" class="btn btn-info waves-effect waves-light">update</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light">delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Tiger Nixon</td>
                        <td>Tiger Nixon</td>
                        <td>
                            <button type="button" class="btn btn-info waves-effect waves-light">update</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light">delete</button>
                        </td>
                    </tr>
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