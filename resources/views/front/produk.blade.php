@extends('layouts.main')

@section('title', 'Produk')

@section('content')
{{-- Featured Products --}}
<h2 class="mb-3">Produk Kami</h2>

<form action="{{ url('/produk') }}" method="GET" class="g-1 mb-4 row">
    <div class="col-md-4">
        <input type="text" name="nama" class="form-control w-100" placeholder="Cari nama produk" value="{{ $nama }}">
    </div>
    <div class="col-md-3">
        <input type="text" name="min" class="form-control w-100" placeholder="Harga min" value="{{ $harga_min }}">
    </div>
    <div class="col-md-3">
        <input type="text" name="max" class="form-control w-100" placeholder="Harga max" value="{{ $harga_max }}">
    </div>
    <div class="col-md-1">
        <button type="submit" class="btn btn-primary w-100">Cari</button>
    </div>
    <div class="col-md-1">
        <button class="btn btn-outline-secondary w-100">Reset</button>
    </div>
</form>

<h2 class="mb-3">Featured Products</h2>
<div class="featured-products">
    <div class="row">
        <!-- <div class="col-md-4 col-lg-3 mb-4">
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
        </div> -->
        @foreach ($produk as $item)
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('img/' . $item['gambar']) }}"
                    class="card-img-top"
                    alt="{{ $item['nama'] }}">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $item['nama'] }}</h5>
                    @if ($item['harga'] > 5000000)
                    <span class="badge bg-dark text-light mb-2">Premium</span>
                    @elseif ($item['harga'] >= 2000000)
                    <span class="badge bg-info text-light mb-2">Menengah</span>
                    @else
                    <span class="badge bg-danger text-light mb-2">Ekonomis</span>
                    @endif
                    <p class="card-text text-primary font-weight-bold">
                        Rp {{ number_format($item['harga'], 0, ',', '.') }}
                    </p>
                    <a href="#" class="btn btn-primary mt-auto">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection