@extends('layouts.app')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">

                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Import Products</div>

                                    <div class="card-body">
                                        <form action="{{ route('product.import') }}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                <label for="file">Choose Excel File</label>
                                                <input type="file" name="file" id="file" class="form-control" accept=".xlsx, .xls">
                                            </div>

                                            <button type="submit" class="btn btn-primary">Import</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
@endsection
