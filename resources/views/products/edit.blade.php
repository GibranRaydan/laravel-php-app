@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}" title="Go back"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name"
                        required>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Size:</strong>
                    <select name="size" class="form-group">
                        <option value="S" {{$product->size  == "S" ?'selected' : ''}}>S</option>
                        <option value="M" {{$product->size  == "M" ?'selected' : ''}}>M</option>
                        <option value="L" {{$product->size  == "L" ?'selected' : ''}}>L</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantity in stock:</strong>
                    <input type="number" name="quantity" value="{{ $product->quantity }}" class="form-control"
                        placeholder="quantity" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Comments:</strong>
                    <input type="text" name="comments" value="{{ $product->comments }}" class="form-control"
                        placeholder="Comments" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">

                    <strong>Size:</strong>
                    <select name="brand_id" class="form-group">
                        
                        @foreach ($brands->all() as $brand)
                            <option value="{{ $brand->id }}" {{$brand->id  == $product->brand_id ? 'selected' : ''}}>{{ $brand->name }}</option>
                            
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
