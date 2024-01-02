@extends('layouts.app')

@section('admin')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">

                        <p>
                            Hello {{ $product->user->name }},
                        </p>

                        <p>
                            We are excited to inform you that a new product has been created. Below are the details:
                        </p>

                        <ul>
                            <li><strong>Product Name:</strong> {{ $product->name }}</li>
                            <li><strong>Price:</strong> {{ $product->price }}</li>
                            <li><strong>Quantity:</strong> {{ $product->quantity }}</li>
                            <!-- Add more details as needed -->
                        </ul>

                        <p>
                            Thank you for using our application!
                        </p>

                        <p>
                            Best regards,<br>
                            Your Application Team
                        </p>

                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
@endsection
