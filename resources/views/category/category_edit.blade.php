@extends('layouts.app')
@section('admin')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{route('category.index')}}"
                               class="btn btn-dark btn-rounded waves-effect waves-light"
                               style="float:right; margin-bottom:5px;"><i class="fa-solid fa-list"></i>Category List</a>

                            <h4 class="card-title"> Edit Category</h4>

                            <div class="card-body">
                                <form method="POST" action="{{route('category.update')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $categories->id }}">

                                    <div class="form-group">
                                        <label for="name">Category Name:</label>
                                        <input type="text" class="form-control" value="{{$categories->name}}" id="name" name="name" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary mt-2">Update Category</button>
                                </form>
                            </div>




                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>

@endsection
