<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
  <h1 class="display-4">Welcome to Our Cat Collection</h1>
  <div class="row">
      @foreach($data as $cat)
          <div class="col-md-4 mb-4">
              <div class="card" style="width: 18rem;">
                  <img src="{{ $cat['url'] }}" class="card-img-top" alt="Cat image {{ $cat['id'] }}">
                  <div class="card-body">
                      <h5 class="card-title">Cat ID: {{ $cat['id'] }}</h5>
                      <p class="card-text">Width: {{ $cat['width'] }} px, Height: {{ $cat['height'] }} px</p>
                      <a href="{{ $cat['url'] }}" target="_blank" class="btn btn-primary">View Full Image</a>
                  </div>
              </div>
          </div>
      @endforeach
  </div>
</div>
@endsection
