@extends('layout.main')
@section('container')
    

<body>
    <div class="mx-lg-5 mt-lg-4 mb-lg-3">
        <div class="rounded bg-info pt-3 pb-3">
            <div class="row">
            <div class="col-md-4 offset-4">
                <h2 class="text-center fw-bold mt-2">Products</h2>
            </div>
            <div class="col-md-4 d-flex justify-content-start">
                <a href="{{ route('products.list') }}" class="btn btn-md btn-warning fw-bold me-3 h-75 m-auto">ke halaman admin</a>
                {{-- <a href="{{ route('products.create') }}" class="btn btn-md btn-dark fw-bold me-3 h-75 m-auto">Tambah</a> --}}
            </div>
        </div>
            <div class="mt-3 bg-dark mx-auto rounded" style="height: 3px; width: 75px"></div>
            <div class="grid mx-3 mt-4">
                <div class="row row-gap-4">
                @foreach ($products as $item)
                <div class="col-3">
                    <div class="card bg-white w-100">
                        <img src="{{ $item->image }}" class="card-img-top" alt="gambar">
                        <div class="card-body">
                            <div class="d-flex justify-content-between my-2">
                                <p class="card-title fw-bold my-auto" style="font-size: 24px">{{ $item->name }}</p>
                                <p class="my-auto rounded bg-success px-2 fw-semibold">
                                    {{ $item->condition }}
                                </p>
                            </div>
                            <div class="d-flex justify-content-between my-2">
                                <p class="my-auto rounded py-1 bg-warning px-2 text-white fw-semibold" style="font-size: 16px">
                                    {{ $item->stock }}pcs
                                </p>
                                <p class="my-auto rounded py-1 bg-info px-2 fw-semibold" style="font-size: 16px">
                                    Rp.{{ number_format($item->price,0, ',', '.') }}
                                </p>
                                <p class="my-auto rounded py-1 bg-secondary text-white px-2 fw-semibold" style="font-size: 16px">
                                    {{ $item->weight }}
                                </p>
                            </div>
                            <p style="overflow: hidden; max-width: 400px; margin: 10px aouto;">
                                {{ substr($item->description,0,40) }}...
                            </p>
                            <a href=""></a>
                            <button class="btn btn-primary w-100">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>
</body>
@endsection