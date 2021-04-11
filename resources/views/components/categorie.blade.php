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
                <div class="card m-b-30" >
                    <div class="card-body" style="border: 2px solid #000">

                        <h4 class="mt-0 header-title">Ajouter une famille de produit</h4>

                        <form action="#">
                            <div class="form-group">
                                <label>Default</label>
                                <input type="text" class="colorpicker-default form-control col-4">
                                <button type="button" class="btn btn-info waves-effect waves-light">Ajouter</button>
                            </div>
                        </form>

                    </div>
                </div>
                <h4 class="mt-0 header-title">Liste famille produits</h4>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Famille produit</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>
                            <button type="button" class="btn btn-info waves-effect waves-light">update</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light">delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>
                            <button type="button" class="btn btn-info waves-effect waves-light">update</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light">delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Ashton Cox</td>
                        <td>
                            <button type="button" class="btn btn-info waves-effect waves-light">update</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light">delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
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