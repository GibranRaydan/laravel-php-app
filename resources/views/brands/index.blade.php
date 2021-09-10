@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Brands </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}" title="Products list"> <i
                        class="fa fa-folder-open"></i>
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
        <a class="btn btn-success" href="{{ route('brands.create') }}" title="Create a new brand"> <i
                class="fas fa-plus-circle"></i>
        </a>
    </div>

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Reference</th>
        </tr>
        @foreach ($brands as $brand)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $brand->name }}</td>
                <td>{{ $brand->reference }}</td>
                <td>
                    <form action="{{ route('brands.destroy', $brand->id) }}" method="POST">

                        <a href="{{ route('brands.show', $brand->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('brands.edit', $brand->id) }}">
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

    {!! $brands->links('pagination::bootstrap-4') !!}

@endsection