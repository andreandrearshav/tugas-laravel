<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="mx-lg-5 mt-lg-3 mb-lg-3">
        <div class="rounded bg-info pt-3 pb-3">
            <div class="d-flex justify-content-between">
                <h2 class="mb-1 mx-5  fw-bold">Products</h2>
                <div class="d-flex mx-3">
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
                          <td class="text-center align-middle bg-success rounded">{{ $product->condition }}</td>
                          <td>
                              <div class="d-flex justify-content-start">
                                  <a href="{{ route('products.create', $product->id) }}" class="btn btn-warning me-2">Update</a>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>