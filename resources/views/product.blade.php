@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Test</h1>

        <div class="product-name">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Product</span>
                </div>
                <input type="text" class="form-control" placeholder="Product" aria-label="Product" aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="quanity in-stock">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Quanity</span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="price">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Price</span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>

    </div>
</div>
@endsection