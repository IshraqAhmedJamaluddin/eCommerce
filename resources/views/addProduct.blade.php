@extends('layout')
  
@section('content')
<style>
    .card2 {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
    }

    .price {
    color: grey;
    font-size: 22px;
    }

    .card2 button {
    border: none;
    outline: 0;
    padding: 12px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
    }

    .card2 button:hover {
    opacity: 0.7;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Product') }}</div>
                  <div class="card-body">

                      <form action="{{ route('add-product.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="name" class="form-control" name="name" required autofocus>
                                  @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>
                            <div class="col-md-6">
                                <input type="text" id="price" class="form-control" name="price" required>
                                @if ($errors->has('price'))
                                    <span class="text-danger">{{ $errors->first('price') }}</span>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="weight" class="col-md-4 col-form-label text-md-right">Weight</label>
                            <div class="col-md-6">
                                <input type="text" id="weight" class="form-control" name="weight" required>
                                @if ($errors->has('weight'))
                                    <span class="text-danger">{{ $errors->first('weight') }}</span>
                                @endif
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                            <div class="col-md-6">
                                <input type="text" id="description" class="form-control" name="description" required>
                                @if ($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label for="stock" class="col-md-4 col-form-label text-md-right">Stock</label>
                            <div class="col-md-6">
                                <input type="text" id="stock" class="form-control" name="stock">
                                @if ($errors->has('stock'))
                                    <span class="text-danger">{{ $errors->first('stock') }}</span>
                                @endif
                            </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Add
                              </button>
                          </div>
                      </form>
                        
                  </div>

            </div>
        </div>
    </div>
</div>
@endsection