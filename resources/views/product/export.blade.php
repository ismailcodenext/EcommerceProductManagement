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
                                    <div class="card-header">Export Products</div>

                                    <div class="card-body">
                                        <a href="{{ route('product.export') }}" class="btn btn-success">Export Products</a>
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
