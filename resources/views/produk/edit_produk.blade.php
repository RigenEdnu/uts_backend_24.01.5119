<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Form Edit Produk
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">

                {{-- Flash error --}}
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                {{-- Validation errors --}}
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route('admin.produk.update', $produk->id_produk) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>Nama Produk</label>
                        <input type="text" name="nama" class="form-control"
                            value="{{ old('nama', $produk->nama) }}">
                        @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Harga</label>
                        <input type="number" name="harga" class="form-control"
                            value="{{ old('harga', $produk->harga) }}">
                        @error('harga') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="mb-3">
                        <label>Stock</label>
                        <input type="number" name="stock" class="form-control"
                            value="{{ old('stock', $produk->stock) }}">
                        @error('stock') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <button class="btn btn-success">Perbarui</button>
                    <a href="{{ route('admin.produk') }}" class="btn btn-secondary">Kembali</a>

                </form>
            </div>
        </div>
    </div>
</x-app-layout>