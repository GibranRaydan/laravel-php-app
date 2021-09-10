@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products </h2>
            </div>


            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('brands.index') }}" title="Brands list"> <i
                        class="fa fa-signal"></i>
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('products.create') }}" title="Create a new product"> <i
                class="fas fa-plus-circle"></i>
        </a>
    </div>

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>size</th>
            <th>quantity in Stock</th>
            <th>comments</th>
            <th>brand</th>

        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->size }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->comments }}</td>
                <td>{{ $product->brand->name}}</td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">

                        <a href="{{ route('products.show', $product->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('products.edit', $product->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links('pagination::bootstrap-4') !!}

@endsection