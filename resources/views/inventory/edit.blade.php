@extends('layouts.master')

@section('title')
    Update Page
@endsection

@section('content')
    <h4>Update Item </h4>
    <form action=" {{ route('item.update',$item->id) }} " method="post">
        @method("put")
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Item Name</label>
            <input type="text" class="form-control " value="{{ $item->name }}" name="name">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Item Price</label>
            <input type="text" class="form-control " value=" {{ $item->price }} " name="price">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Stock</label>
            <input type="text" class="form-control " value=" {{ $item->stock }} " name="stock">
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
