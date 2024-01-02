@extends('layouts.app')
@section('admin')

    <div class="page-content">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a href=""
                               class="btn btn-dark btn-rounded waves-effect waves-light"
                               style="float:right; margin-bottom:5px;"><i class="fa-solid fa-list"></i>Product List</a>

                            <h4 class="card-title"> Add Product </h4>

                            <div class="card-body">
                                <form method="POST" action="{{route('product.store')}}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="name">Product Name:</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Price:</label>
                                        <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="quantity">Quantity:</label>
                                        <input type="number" class="form-control" id="quantity" name="quantity" required>
                                    </div>

                                    <!-- You can add a hidden field for the 'id' if needed -->

                                    <button type="submit" class="btn btn-primary mt-2">Add Product</button>
                                </form>
                            </div>




                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>

@endsection
