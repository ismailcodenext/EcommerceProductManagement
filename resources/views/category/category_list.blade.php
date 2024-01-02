@extends('layouts.app')
@section('admin')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('category.create')}}"
                               class="btn btn-dark btn-rounded waves-effect waves-light"
                               style="float:right; margin-bottom:5px;"><i class="fa-solid fa-square-plus"></i> Add
                                New Category</a>

                            <h4 class="card-title"> Category List </h4>


                            <table id="dataTable" class="table table-bordered dt-responsive nowrap"
                                   style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead style="background-color: #96ca2d; color: #0a0a0a">

                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>

                                </thead>


                                <tbody>

                                @foreach($categories as $category)
                                <tr>
                                    <td> {{$category->id}} </td>
                                    <td> {{$category->name}}</td>

                                    <td>

                                        <a href="{{route('category.edit', $category->id )}}" class="btn btn-info sm"
                                           title="Edit Data"><i class="fas fa-edit"></i></a>


                                        <a href="{{route('category.destroy',$category->id )}}"
                                           class="btn btn-danger sm" title="Delete Data" id="delete"> <i class="fas fa-trash-alt"></i> </a>

                                    </td>

                                </tr>

                                @endforeach


                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>

@endsection
