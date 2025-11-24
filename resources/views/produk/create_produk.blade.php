<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Form Tambah Produk
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <form action="{{ route('admin.produk.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Nama Produk <span style="color:red">*</span></label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                        @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Harga <span style="color:red">*</span></label>
                        <input type="number" name="harga" class="form-control" value="{{ old('harga') }}">
                        @error('harga') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Stock <span style="color:red">*</span></label>
                        <input type="number" name="stock" class="form-control" value="{{ old('stock') }}">
                        @error('stock') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <button class="btn btn-success">Simpan</button>
                    <a href="{{ route('admin.produk') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>