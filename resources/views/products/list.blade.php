@extends('layout.main')
@section('container')
<body>
    <div class="mx-lg-5 mt-lg-3 mb-lg-3">
        <div class="rounded bg-info pt-3 pb-3">
            <div class="d-flex justify-content-between">
                <h2 class="mb-1 mx-5  fw-bold">Products</h2>
                <div class="d-flex mx-3">
                  <a href="{{ route('products.create') }}" class="btn btn-primary me-2">lihat profile</a>
                    <a href="{{ route('products.create') }}" class="btn btn-dark me-2">Tambah Produk</a>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali ke Produk</a>
                </div>
            </div>
            {{-- table --}}
            <div class="mx-lg-5 mt-lg-4 mb-lg-3">
            <table class="table table-hover mt-3">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">nama</th>
                    <th class="text-center">stok</th>
                    <th class="text-center">berat</th>
                    <th class="text-center">harga</th>
                    <th class="text-center">kondisi</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <tbody>
                      @foreach($products as $product)
                      <tr>
                          <td class="text-center align-middle">{{ $loop->iteration }}</td>
                          <td class="text-center align-middle">{{ $product->name }}</td>
                          <td class="text-center align-middle">{{ $product->stock }}</td>
                          <td class="text-center align-middle">{{ $product->weight }}</td>
                          <td class="text-center align-middle">{{ $product->price }}</td>
                          <th class="text-center align-middle bg-success rounded">{{ $product->condition }}</th>
                          <td>
                              <div class="d-flex justify-content-start">
                                  <a href="{{ route('products.create', $product->id) }}" class="btn btn-warning me-2" >Update</a>
                                  <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger">Delete</button>
                                  </form>
                              </div>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
  </div>
</body>
@endsection


                  
                  