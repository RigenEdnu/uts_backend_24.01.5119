@extends('layouts.main')

@section('title', 'Produk')

@section('content')
{{-- Featured Products --}}
<h2 class="mb-3">Produk Kami</h2>
<div class="row mb-4 g-2">
    <div class="col-md-4">
        <input type="text" class="form-control w-100" placeholder="Cari nama produk">
    </div>
    <div class="col-md-3">
        <input type="text" class="form-control w-100" placeholder="Harga min">
    </div>
    <div class="col-md-3">
        <input type="text" class="form-control w-100" placeholder="Harga max">
    </div>
    <div class="col-md-1">
        <button class="btn btn-primary w-100">Cari</button>
    </div>
    <div class="col-md-1">
        <button class="btn btn-outline-secondary w-100">Reset</button>
    </div>

</div>
<h2 class="mb-3">Featured Products</h2>
<div class="featured-products">
    <div class="row">
        <div class="col-md-4 col-lg-3 mb-4">
            <div class="card featured-card shadow-sm h-100">
                <img src="{{ asset('img/produk1.jpg') }}" class="card-img-top" alt="Product 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Produk 11</h5>
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