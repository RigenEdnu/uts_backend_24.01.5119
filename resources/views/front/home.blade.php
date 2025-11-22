@extends('layouts.main')

@section('title', 'Home')

@section('content')
{{-- Banner --}}
<div class="banner mb-4">
    <img src="{{ asset('img/banner.webp') }}" alt="Banner"
        class="img-fluid rounded shadow">
</div>

{{-- Featured Products --}}
<h2 class="mb-3">Featured Products</h2>
<div class="featured-products">
    <div class="row">
        <div class="col-md-4 col-lg-3 mb-4">
            <div class="card featured-card shadow-sm h-100">
                <img src="{{ asset('img/produk1.jpg') }}" class="card-img-top" alt="Product 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Produk 1</h5>
                    <p class="card-text text-muted">Rp 500.000</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 mb-4">
            <div class="card featured-card shadow-sm h-100">
                <img src="{{ asset('img/produk2.jpg') }}" class="card-img-top" alt="Product 2">
                <div class="card-body text-center">
                    <h5 class="card-title">Produk 2</h5>
                    <p class="card-text text-muted">Rp 500.000</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 mb-4">
            <div class="card featured-card shadow-sm h-100">
                <img src="{{ asset('img/produk3.jpg') }}" class="card-img-top" alt="Product 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Produk 3</h5>
                    <p class="card-text text-muted">Rp 500.000</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3 mb-4">
            <div class="card featured-card shadow-sm h-100">
                <img src="{{ asset('img/produk4.jpg') }}" class="card-img-top" alt="Product 4">
                <div class="card-body text-center">
                    <h5 class="card-title">Produk 4</h5>
                    <p class="card-text text-muted">Rp 500.000</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection