@extends('layout.main')
@section('container')
    

<body>
    <div class="container mb-5">
        <div class="row">
            {{-- check session --}}
            <div class="col-md-4 offset-4">
                
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            </div>
            <div class="col-md-4 offset-4 rounded bg-info mt-3 py-3">
                <h1 class="text-center fw-bold" style="font-size: 20px">Tambah Data Products</h1>
                <form class="mt-3" action="{{ route('products.store') }}" method="POST">
                {{-- <form class="mt-3" action="{{ route('products.store') }}" method="POST"> --}}
                    @csrf
                    <div class="mb-1">
                        <label class="fw-semibold" for="">Gambar Product</label>
                        <input type="file" class="form-control" name="image" placeholder="Masukan gambar">
                    </div>
                    <div class="mb-1">
                        <label class="fw-semibold" for="">Nama Product</label>
                        <input type="text" class="form-control" name="name" placeholder="Masukan nama">
                    </div>
                    <div class="mb-1">
                        <label class="fw-semibold" for="">Kondisi Product</label>
                        {{-- form check radio button --}}
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="condition" id="flexRadioDefault1" value="bekas">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Bekas
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="condition" id="flexRadioDefault2" checked value="baru">
                            <label class="form-check-label" for="flexRadioDefault2">
                              Baru
                            </label>
                          </div>
                    </div>
                    <div class="mb-1">
                        <label class="fw-semibold" for="">stock Product</label>
                        <input type="number" class="form-control" name="stock" placeholder="Masukan stock">
                    </div>
                    <div class="mb-1">
                        <label class="fw-semibold" for="">Harga Product</label>
                        <input type="number" class="form-control" name="price" placeholder="Masukan harga">
                    </div>
                    <div class="mb-1">
                        <label class="fw-semibold" for="">Berat Product</label>
                        <input type="number" class="form-control" name="weight" placeholder="Masukan berat">
                    </div>
                    <div class="mb-1">
                        <label class="fw-semibold" for="">Deskripsi Product</label>
                        <input class="form-control" name="description" placeholder="Masukan deskripsi">
                    </div>
                    <div class="d-flex">
                        <button class="btn btn-dark mx-auto" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
@endsection