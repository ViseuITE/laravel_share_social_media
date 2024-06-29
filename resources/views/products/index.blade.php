<!DOCTYPE html>
<html>
<head>
    <title>Products List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <style>
            .social-btn-sp #social-links {
                margin: 0 auto;
                max-width: 500px;
            }
            .social-btn-sp #social-links ul li {
                display: inline-block;
            }          
            .social-btn-sp #social-links ul li a {
                padding: 15px;
                border: 1px solid #ccc;
                margin: 1px;
                font-size: 30px;
            }
            table #social-links{
                display: inline-table;
            }
            table #social-links ul li{
                display: inline;
            }
            table #social-links ul li a{
                padding: 5px;
                border: 1px solid #ccc;
                margin: 1px;
                font-size: 15px;
                background: #e3e3ea;
            }
        </style>

</head>
<body>
    <div class="container mt-5">
        <h2>Products List</h2>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Create Product</a>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3>{{ $product->name }}</h3>
                        </div>
                        <div class="card-body">
                            @if ($product->image)
                                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid mb-3">
                            @endif
                            <p><strong>Price:</strong> ${{ $product->price }}</p>
                            
                            <table>
                                <tr>
                                    <td>
                                    <!-- {!! Share::page(url('images/' . $product->image), $product->name) -->
                                    {!! Share::page(url('https://images.pexels.com/photos/26100664/pexels-photo-26100664/free-photo-of-a-young-male-deer.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load'), $product->name)
                                        ->facebook()
                                        ->twitter()
                                        ->linkedin()
                                        ->telegram()
                                        ->whatsapp() !!}
                                    </td>
                                </tr>
                            </table>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>