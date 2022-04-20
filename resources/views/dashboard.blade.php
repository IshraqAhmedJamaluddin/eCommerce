@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    <a href="{{ route('products') }}">Surf our beautiful products!</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection