
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">المنتجات</h1>

        @if($products->isEmpty())
            <div class="alert alert-warning" role="alert">
                لا توجد منتجات لعرضها.
            </div>
        @else
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('path/to/your/image.jpg') }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">السعر: {{ $product->price }} دولار</p>
                                <a href="#" class="btn btn-primary">عرض التفاصيل</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
