@extends('layouts.master')

@section('title')
    Create Page
@endsection

@section('content')
    <h4>Create Item </h4>
    <form action="">
        <div class="mb-3">
            <label for="" class="form-label">Item Name</label>
            <input type="text" class="form-control " name="name">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Item Price</label>
            <input type="text" class="form-control " name="price">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Stock</label>
            <input type="text" class="form-control " name="stock">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
@endsection
