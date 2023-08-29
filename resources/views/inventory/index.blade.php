@extends('layouts.master')

@section('title')
    Item List
@endsection

@section('content')
    <h4>Item List </h4>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Stock</th>
                <th scope="col">Control</th>
            </tr>

        </thead>
        <tbody>
            @forelse ($items as $item)
                <tr>
                    <th scope="row"> {{ $item->id }} </th>
                    <td> {{ $item->name }} </td>
                    <td>{{ $item->price }}</td>
                    <td> {{ $item->stock }} </td>
                    <td>
                        <a  href=" {{ route("item.show", $item->id) }} " class="btn btn-outline-primary "> Details </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">
                        There is no record <br>
                        <a href="{{route('item.create')}}">Create Item</a>
                    </td>
                </tr>
                @endforelse
        </tbody>
    </table>
@endsection
