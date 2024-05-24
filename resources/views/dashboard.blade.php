@extends('layout.main')
@section('container')
<div class="container mt-5 ">
    <div class="row">
        <div class="col-md-6">
            <h3 class="">Discover.Connect.Trhive</h3>
            <h1 class="display-4 fw-bold">Transform Your Shopping Experience</h1>
            <p class="lead">Welcome to Amandemy Shopping, where your desires meet their perfect match. Immerse yourself in a world of endless possibilities, curated just for you. Whether you're hunting for unique finds, everyday essentials, or extraordinary gifts, we've got you covered.</p>
            <div>
                @csrf
                <a href="{{ route('products.index') }}"  class="btn btn-primary btn-lg">Buy Now!</a>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('img/marketplace.jpg') }}" alt="Shopping Experience" class="img-fluid">
        </div>
    </div>
</div>
@endsection